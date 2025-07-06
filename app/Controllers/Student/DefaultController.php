<?php

namespace App\Controllers\Student;

use App\Models\BaseModel;
use App\Controllers\BaseController;
use App\Models\Student\DefaultModel;
use Exception;

class DefaultController extends BaseController
{
	private $common;
	private $defaultModel;
	function __construct()
	{
		$this->common = new BaseModel();
		$this->defaultModel = new DefaultModel();
	}

	public function index(): string
	{
		$data['categoryDetails'] = $this->common->getInfo('category_table', '', array('deleted' => 0, 'active' => 1));
		$data['blog_list'] = $this->defaultModel->fetchBlogList(4);
		$data['level_list'] = $this->defaultModel->fetchLevelListModel();
		return view('student/index', $data);
	}

	public function auth()
	{
		$getData = $this->request->getGet();
		if (isset($getData['auth'])) {
			$data['addClass'] = $getData['auth'];
			$data['level_list'] = $this->defaultModel->fetchLevelListModel();
			$data['category_list'] = $this->common->getInfo('category_table', '', array('deleted' => 0, 'active' => 1));
			return view('student/auth/student_auth', $data);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function fetchLevelList()
	{
		$getData = $this->request->getGet();
		$category_short_name = $getData['category'];
		if (!empty($category_short_name)) {
			$data['category_info'] = $this->common->getInfo('category_table', 'row', array('category_short_name' => $category_short_name));
			$data['level_list'] = $this->defaultModel->fetchLevelListModel($category_short_name);
			return view('student/level_list', $data);
		}
	}

	public function fetchTypeList()
	{
		$getData = $this->request->getGet();
		$category_short_name = $getData['category'];
		$level_short_name = $getData['level'];
		if (isset($getData['category']) && isset($getData['level'])) {
			$data['level_info'] = $this->common->getInfo('level_table', 'row', array('level_short_name' => $getData['level']));
			$data['type_list'] = $this->defaultModel->fetchTypeListModel($getData);
			return view('student/type_list', $data);
		}
	}

	public function fetchSubjectList()
	{
		$getData = $this->request->getGet();
		if (isset($getData['level']) && isset($getData['type'])) {
			$data['type_info'] = $this->defaultModel->getTypeInfo($getData);
			$data['subject_list'] = $this->defaultModel->fetchSubjectListModel($getData);
			return view('student/subject_list', $data);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function addStudentDetails()
	{
		$postData = $this->request->getPost();
		$referral_by = isset($postData['referral_by_student_id']) ? $postData['referral_by_student_id'] : null;

		$checkUeserExist = $this->defaultModel->checkExistStudent($postData['email'], $postData['mobile_no']);
		if (empty($checkUeserExist)) {
			$password = $postData['password'];
			$postData['password'] = md5(md5($postData['password']));
			unset($postData['confirm_password']);

			if (!empty($referral_by)) {
				$postData['referral_by_student_id'] = $referral_by;
			}

			$addStudentData = $this->common->dbAction('student_table', $postData, 'insert', array());
			if (!empty($addStudentData)) {
				$emailTemplate = file_get_contents(PUBLIC_PATH . '/emailTemplate/reg_template.php');
				$login_url = base_url() . '/auth?auth=login';
				$emailTemplate = str_replace('{login}', $login_url, $emailTemplate);
				$emailTemplate = str_replace('{user_email}', $postData['email'], $emailTemplate);
				$emailTemplate = str_replace('{user_password}', $password, $emailTemplate);
				$subject = "Welcome to Mission CS Test Series.";
				$send_email = $this->sendMail($postData['email'], $subject, $emailTemplate, 'Mission CS Test Series');

				$response = array(
					'success' => true,
					'message' => 'Registration successfully completed.',
				);
			} else {
				$response = array(
					'success' => false,
					'message' => 'Something went wrong while registering your account.',
				);
			}
		} else {
			$response = array(
				'success' => false,
				'message' => 'You have already registered with us.',
			);
		}
		return json_encode($response);
	}

	public function verifyStudentLogin()
	{
		$postData = $this->request->getPost();
		$checkUserExist = $this->common->getInfo('student_table', 'row', array('email' => $postData['email']), 'student_name,email,password');
		$cryptPass = md5(md5($postData['password']));
		if (!empty($checkUserExist)) {
			if ($cryptPass == $checkUserExist->password) {
				if ($checkUserExist->blocked == 0) {
					$success = true;
					$message = 'You have logged in successfully';
					$studentDetails = array(
						'id' => $checkUserExist->student_id,
						'student_name' => $checkUserExist->student_name,
						'mobile_no' => $checkUserExist->mobile_no,
						'email' => $checkUserExist->email,
						'is_logged_in' => true,
					);
					session()->set('studentDetails', $studentDetails);
				} else {
					$success = false;
					$message = 'Your account has been blocked, please contact the admin.';
				}
			} else {
				$success = false;
				$message = 'You have entered wrong credentials.';
			}
		} else {
			$success = false;
			$message = 'Please Signup First, before login.';
		}
		$response = array(
			'success' => $success,
			'message' => $message,
		);
		return json_encode($response);
		$postData = $this->request->getPost();
		$checkUserExist = $this->common->getInfo('student_table', 'row', array('email' => $postData['email']), 'student_name,email,password');
		$cryptPass = md5(md5($postData['password']));
		if (!empty($checkUserExist)) {
			if ($cryptPass == $checkUserExist->password) {
				if ($checkUserExist->blocked == 0) {
					$success = true;
					$message = 'You have logged in successfully';
					$studentDetails = array(
						'id' => $checkUserExist->student_id,
						'student_name' => $checkUserExist->student_name,
						'email' => $checkUserExist->email,
						'mobile_no' => $checkUserExist->mobile_no,
						'is_logged_in' => true,
					);
					session()->set('studentDetails', $studentDetails);
				} else {
					$success = false;
					$message = 'Your account has been blocked, please contact the admin';
				}
			} else {
				$success = false;
				$message = 'You have entered wrong credentials';
			}
		} else {
			$success = false;
			$message = 'Please Signup First, before login.';
		}
		$response = array(
			'success' => $success,
			'message' => $message,
		);
		return json_encode($response);
	}

	public function loadDashboardPage($item_type = '')
	{
		$data['fetchLevels'] = $this->defaultModel->fetchLevelListModel();
		$fetch_sub = '';
		$data['schedule_list'] = '';
		$subject_id_details = '';
		$data['balance'] = 0;
		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$student_id = $studentDetails['id']; // Current logged-in student's ID
			$studentInfo = $this->common->getInfo('student_table', 'row', array('student_id' => $student_id));
			if ($studentInfo && isset($studentInfo->balance)) {
				$data['balance'] = $studentInfo->balance;
			}
			if ($item_type != 'free') {
				$cart_table = $this->common->getInfo('cart_table', 'row', array('student_id' => $student_id, 'deleted' => 0));
				if (!empty($cart_table)) {
					$cart_id = $cart_table->cart_id;
					$fetch_sub = $this->defaultModel->fetchAvailableSubject($cart_id, 3);
					$subject_id_details = $this->defaultModel->getNotesSubjectList($cart_table->cart_id, 3);
					$amendmentDetails = $this->defaultModel->getAmendmentSubjectList($cart_table->cart_id, 3);
					$qbankDetails = $this->defaultModel->getQbankSubjectList($cart_id, 3);
					$data['amendment_sub'] = $amendmentDetails;
					$data['qbank_sub'] = $qbankDetails;
					$data['schedule_list'] = $this->defaultModel->getScheduleList($cart_table->cart_id);
				}
			} else {
				$studentInfo = $this->common->getInfo('student_table', 'row', array('student_id' => $student_id));
				$level_id = $studentInfo->current_level;
				$fetch_sub = $this->defaultModel->fetchFreeSubject(3, $level_id);
				$subject_id_details = $this->defaultModel->getFreeNotesSubjectList(3, $level_id);
			}

			$i = 0;
			if (!empty($fetch_sub)) {
				foreach ($fetch_sub as $key => $value) {
					$fetch_sub[$i]['subject_id'] = $this->encryptValue($value['subject_id']);
					$i++;
				}
			}

			$i = 0;
			if (!empty($subject_id_details)) {
				foreach ($subject_id_details as $key => $value) {
					($subject_id_details[$i])->subject_id = $this->encryptValue($value->subject_id);
					$i++;
				}
			}
			$referralCredits = $this->defaultModel->getReferralCredits($student_id);
			$data['referral_credits'] = $referralCredits;
			$data['fetch_sub'] = $fetch_sub;
			$data['notes_sub'] = $subject_id_details;
			$data['item_type'] = $item_type;
		}

		return view('student/dashboard', $data);
	}


	public function addToCartItem()
	{
		$postData = $this->request->getPost();
		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$cartArray = $this->getCartId();
			$cart_id = '';
			if ($cartArray['success']) {
				$cart_id = $cartArray['data'];
			}
			$fetchSubjectDetails = $this->common->getInfo('subject_table', 'row', array('subject_id' => $postData['subject_id'], 'deleted' => 0));
			if (!empty($fetchSubjectDetails)) {
				$postData['original_price'] = $fetchSubjectDetails->original_price;
				$postData['offer_price'] = $fetchSubjectDetails->offer_price;
				$postData['amt_after_discount'] = $fetchSubjectDetails->offer_price;
			}
			if (!empty($cart_id)) {
				$fetchCartItems = $this->common->getInfo('cart_items_table', 'row', array('cart_id' => $cart_id, 'subject_id' => $postData['subject_id'], 'deleted' => 0));
				if (!empty($fetchCartItems)) {
					$qty = $fetchCartItems->qty;
					$qty++;
					$addCartItems = $this->common->dbAction('cart_items_table', array('qty' => $qty), 'update', array('cart_items_id' => $fetchCartItems->cart_items_id));
				} else {
					$existCartItemsPromoCode = $this->common->getInfo('cart_items_table', 'row', array('cart_id' => $cart_id, 'deleted' => 0));
					if (!empty($existCartItemsPromoCode)) {
						$postData['promo_code_name'] = $existCartItemsPromoCode->promo_code_name;
						$postData['discount_type'] = $existCartItemsPromoCode->discount_type;
						$postData['discount'] = $existCartItemsPromoCode->discount;
					}
					$postData['qty'] = 1;
					$postData['cart_id'] = $cart_id;
					$addCartItems = $this->common->dbAction('cart_items_table', $postData, 'insert', array());
				}
				if (!empty($addCartItems)) {
					$cartDetails = json_decode($this->getCartDetails($cart_id));
					$status = true;
					$message = 'Item added to cart successfully';
					$totalQty = count($cartDetails);
				} else {
					$status = false;
					$message = 'Failed to add cart items';
					$totalQty = 0;
				}
			} else {
				$status = false;
				$message = 'Something went wrong';
				$totalQty = 0;
			}
		} else {
			$status = false;
			$message = 'Please login first';
			$totalQty = 0;
		}
		$response = array(
			'success' => $status,
			'message' => $message,
			'totalQty' => $totalQty,
		);
		return json_encode($response);
	}

	public function getCartDetails($cart_id = '')
	{
		if ($cart_id == '') {
			if (session()->get('studentDetails') !== null) {
				$studentDetails = session()->get('studentDetails');
				$student_id = $studentDetails['id'];
				$cartDetails  = $this->common->getInfo('cart_table', 'row', array('student_id' => $student_id, 'deleted' => 0), 'cart_id desc', 'cart_id');
				if (!empty($cartDetails->cart_id)) {
					$cart_id = $cartDetails->cart_id;
					session()->push('studentDetails', ['cart_id' => $cart_id]);
				} else {
					$cart_id = $this->common->dbAction('cart_table', array('student_id' => $student_id), 'insert_id', array());
				}
			}
		}
		$getCartItems = $this->defaultModel->getActiveCartItems($cart_id);
		return json_encode($getCartItems);
	}

	public function getCartItemsArray()
	{
		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$cart_id = isset($studentDetails['cart_id']) ? $studentDetails['cart_id'] : '';
			if ($cart_id == '') {
				$cart_details = $this->common->getInfo('cart_table', 'row', array('student_id' => $studentDetails['id'], 'deleted=>0'));
				$cart_id = $cart_details->cart_id;
			}
			$cartItemsDetailsArray  = $this->defaultModel->getActiveCartItems($cart_id);
			if (!empty($cartItemsDetailsArray)) {
				$response = array(
					'success' => true,
					'message' => 'Cart items are fetched successfully',
					'cartData' => $cartItemsDetailsArray,
				);
			} else {
				$response = array(
					'success' => true,
					'message' => 'cart is blanks',
					'cartData' => [],
				);
			}
		} else {
			$response = array(
				'success' => false,
				'message' => 'Something went wrong',
				'cartData' => [],
			);
		}
		return json_encode($response);
	}

	public function applyPromocode()
	{
		$postData = $this->request->getPost();
		$totalPrice = $postData['totalPriceDeciaml'];
		unset($postData['totalPriceDeciaml']);
		$postData['deleted'] = 0;
		$promoData = [];
		$checkPromocodeExist = $this->common->getInfo('promo_code_table', 'row', $postData);
		if (empty($checkPromocodeExist)) {
			$response = array('success' => false, 'message' => 'Promo Code does not exist');
			return json_encode($response);
		} else {
			if ($checkPromocodeExist->validity_date < date('Y-m-d h:i:s')) {
				$response = array('success' => false, 'message' => 'Promocode is expired');
				return json_encode($response);
				exit;
			} else if ($totalPrice < $checkPromocodeExist->min_cart_amt) {
				$response = array('success' => false, 'message' => 'Min cart value to apply code is ' . $checkPromocodeExist->min_cart_amt);
				return json_encode($response);
				exit;
			}
			$promoData['promo_code_name'] = $checkPromocodeExist->code_name;
			$promoData['discount_type'] = $checkPromocodeExist->discount_type;
			$promoData['discount'] = $checkPromocodeExist->discount_amt;
			$update_promo_code = '';
			if (session()->get('studentDetails') !== null) {
				$studentDetails = session()->get('studentDetails');
				$cartArray = $this->getCartId();
				$cart_id = $cartArray['data'];
				$update_promo_code = $this->common->dbAction('cart_items_table', $promoData, 'update', array('cart_id' => $cart_id, 'deleted' => 0));
				$this->updateAfterDiscountAmt($cart_id, 'update');
			}
			if (!empty($update_promo_code)) {
				$response = array(
					'success' => true,
					'message' => 'Promo code applied successfully'
				);
			} else {
				$response = array(
					'success' => false,
					'message' => 'Failed to apply promo code'
				);
			}
			return json_encode($response);
		}
	}

	public function removeCartItems()
	{
		$postData = $this->request->getPost();
		$cart_items_id = $postData['cart_items_id'];
		$changeStatusDelete = $this->common->dbAction('cart_items_table', '', 'delete', array('cart_items_id' => $cart_items_id));
		$this->validPromoCode();
		if (!empty($changeStatusDelete)) {
			$response = array(
				'success' => true,
				'message' => 'Item removed successfully',
			);
		} else {
			$response = array(
				'success' => false,
				'message' => 'Failed to remove item',
			);
		}
		return json_encode($response);
	}

	public function validPromoCode()
	{
		if (session()->get('studentDetails') !== null) {
			$student_details  = session()->get('studentDetails');
			$student_id = $student_details['id'];
			$cartDetails = $this->common->getInfo('cart_table', 'row', array('student_id' => $student_id));
			if (!empty($cartDetails)) {
				$cartItemsDetails = json_decode($this->getCartDetails());
				$priceArray = array_map(function ($v) {
					return $v->offer_price;
				}, $cartItemsDetails);
				$priceTotal = array_sum($priceArray);
				if ($priceTotal !== '') {
					$checkPromoCodeMaxValueRow = $this->defaultModel->getPromoCodeDetails($cartDetails->cart_id);
					if (!empty($checkPromoCodeMaxValueRow)) {
						$checkPromoCodeMaxValue = $checkPromoCodeMaxValueRow->min_cart_amt;
						if ($checkPromoCodeMaxValue > $priceTotal) {
							$this->common->dbAction('cart_items_table', array('promo_code_name' => null, 'discount_type' => 'percent', 'discount' => null), 'update', array('cart_id' => $cartDetails->cart_id, 'deleted' => 0));
						}
					}
				}
			}
		}
	}

	public function removePromocode()
	{
		$studentData = session()->get('studentDetails');
		$getCartDetails = $this->common->getInfo('cart_table', 'row', array('student_id' => $studentData['id']));
		$removePromocode = $this->common->dbAction('cart_items_table', array('promo_code_name' => '', 'discount_type' => 'percent', 'discount' => ''), 'update', array('cart_id' => $getCartDetails->cart_id));
		$this->updateAfterDiscountAmt();
		if (!empty($removePromocode)) {
			$response = array('success' => true, 'message' => 'Promocode has been removed successfully');
		} else {
			$response = array('success' => false, 'message' => 'Failed to remove promocode');
		}
		return json_encode($response);
	}

	public function updateAfterDiscountAmt($cart_id = '')
	{
		$cartItemsDetailsArray  = json_decode($this->getCartDetails());
		foreach ($cartItemsDetailsArray as $value) {
			$offer_price = $value->offer_price;
			$discount = $value->discount;
			if ($value->discount_type == 'percent') {
				$updateData['amt_after_discount'] = $offer_price - ($offer_price * $discount / 100);
			} else {
				$updateData['amt_after_discount'] =  $offer_price - $discount;
			}
			$this->common->dbAction('cart_items_table', $updateData, 'update', array('cart_items_id' => $value->cart_items_id));
		}
	}

	public function checkoutPayments()
	{
		$getCartDetails = json_decode($this->getCartDetails());
		$payableAmtArray = array_map(function ($v) {
			return $v->amt_after_discount;
		}, $getCartDetails);
		//$total_amt_to_pay = array_sum($payableAmtArray);
		$total_amt_to_pay = number_format(array_sum($payableAmtArray), 2, '.', '');
		$studentDetails = session()->get('studentDetails');
		$student_id = $studentDetails['id'];
		$city_name = $this->request->getPost('billingCity');
		$state_name = $this->request->getPost('billingState');

		$order_id = 'OD' . uniqid($student_id . 'M');
		$updateData = [];

		if (!empty($city_name)) {
			$updateData['city_name'] = $city_name;
		}

		if (!empty($state_name)) {
			$updateData['state_name'] = $state_name;
		}
		if (!empty($updateData)) {
			$this->common->dbAction('student_table', $updateData, 'update', ['student_id' => $student_id]);
			session()->set('billingDetails', $updateData);
		}

		
		$linkInfo = $this->cashfreePayment($studentDetails, $total_amt_to_pay, $order_id);

		if (!empty($linkInfo)) {
			$linkInfo = json_decode($linkInfo);
			session()->set('link_id', isset($linkInfo->order_id) ? $linkInfo->order_id : '');
		}
		if (!empty($linkInfo)) {
			$insertData = array();
			$cartIdArray = $this->getCartId();
			$insertData['cart_id'] = $cartIdArray['data'];
			$insertData['cf_link_id'] = $linkInfo->cf_order_id;
			$insertData['payment_request_id'] = $linkInfo->order_id;
			$insertData['payment_mode'] = 'cashfree';
			$insertData['total_payment_amount'] = $linkInfo->order_amount;
			$insertData['order_id'] = $order_id;
			$insertData['student_id'] = $student_id;
			$addPurchaseData = $this->common->dbAction('purchase_table', $insertData, 'insert', array());

			if (!empty($addPurchaseData)) {
				$response = array('success' => true, 'payment_session_id' => $linkInfo->payment_session_id);
			} else {
				log_message('error', 'Link info have not updated in purchase table');
				$response = array('success' => false, 'message' => 'Somthing went wrong');
			}
		} else {
			log_message('error', 'Failed to create link info properly');
			$response = array('success' => false, 'message' => 'Somthing went wrong');
		}

		return json_encode($response);
	}

	public function getCheckoutData()
	{
		$studentDetails = session()->get('studentDetails');

		if (!$studentDetails || !isset($studentDetails['id'])) {
			return $this->response->setJSON([
				'success' => false,
				'message' => 'Student details not found.'
			]);
		}

		$student_id = $studentDetails['id'];
		$billingDetails = session()->get('billingDetails');

		if (!$billingDetails) {
			$studentData = $this->common->dbAction('student_table', [], 'select', ['student_id' => $student_id]);

			if (!empty($studentData) && isset($studentData[0])) {
				$billingDetails = [
					'city_name' => $studentData[0]['city_name'] ?? '',
					'state_name' => $studentData[0]['state_name'] ?? '',
				];
				session()->set('billingDetails', $billingDetails);
			} else {
				$billingDetails = ['city_name' => '', 'state_name' => ''];
			}
		}

		return $this->response->setJSON([
			'success' => true,
			'city_name' => $billingDetails['city_name'] ?? '',
			'state_name' => $billingDetails['state_name'] ?? ''
		]);
	}



	public function cashfreePayment($studentDetails, $total_amt_to_pay = 0.00, $order_id = '')
	{
		$student_id = $studentDetails['id'];
		$link_id = uniqid($student_id);
		$ch = curl_init();
		$mobile_no = $studentDetails['mobile_no'];

		if (strlen($mobile_no) > 10) {
			$mobile_no = substr($mobile_no, -10);
		}
		curl_setopt($ch, CURLOPT_URL, SERVER_URL . '/pg/orders');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
			'order_amount' => $total_amt_to_pay,
			'order_currency' => 'INR',
			'customer_details' => [
				'customer_id' => $studentDetails['id'],
				'customer_name' => $studentDetails['student_name'],
				'customer_phone' => $mobile_no,
				'customer_email' => $studentDetails['email']
			],
			'order_meta' => [
				'return_url' => 'https://missioncstestseries.com/purchase-status',
			],
			'thank_you_msg' => 'Thank you for your purchase'
		]),);

		$headers = array();
		$headers[] = 'X-Client-Secret: ' . SECRET_KEY . '';
		$headers[] = 'X-Client-Id: ' . CLIENT_ID . '';
		$headers[] = 'X-Api-Version: ' . API_VERSION . '';
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'Accept: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);
		return $result;
	}

	public function purchaseStatus()
	{
		echo 'redirecting to.... wait';
		$getData = $this->request->getGet();
		if (session()->get('link_id') == null) {
			echo "Invalid action detected";
			return redirect()->to('dashboard');
			exit;
		}
		$link_id = session()->get('link_id');
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, SERVER_URL . '/pg/orders/' . $link_id);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


		$headers = array();
		$headers[] = 'X-Client-Secret: ' . SECRET_KEY . '';
		$headers[] = 'X-Client-Id: ' . CLIENT_ID . '';
		$headers[] = 'Accept: application/json';
		$headers[] = "X-Api-Version: " . API_VERSION . "";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$err = '';
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
			$err = curl_error($ch);
		}
		$result = curl_exec($ch);

		curl_close($ch);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$json_decoded_info = json_decode($result);
			$purchase_table_fetch_info = $this->common->getInfo('purchase_table', 'row', array('payment_request_id' => $link_id));
			if (!empty($purchase_table_fetch_info)) {
				$purchaseStatus = $json_decoded_info->order_status;

				if ($purchaseStatus == 'PAID') {
					// update purchase table
					$updatePurchaseTable = $this->common->dbAction('purchase_table', array('payment_status' => $purchaseStatus), 'update', array('payment_request_id' => $link_id));
					$studentDetails = session()->get('studentDetails');
					$student_id = $studentDetails['id'];
					$referredByStudentId = $this->common->getInfo('student_table', 'row', array('student_id' => $student_id))->referral_by_student_id;

					if (!empty($referredByStudentId)) {
						$this->defaultModel->updateReferralBalance($referredByStudentId);
					}
					// update cart items table
					$cart_id = $purchase_table_fetch_info->cart_id;
					$purchase_id = $purchase_table_fetch_info->purcahse_id;
					$update_cart_items_table = $this->common->dbAction('cart_items_table', array('payment_status' => $purchaseStatus, 'purchase_id' => $purchase_id, 'deleted' => 1), 'update', array('cart_id' => $cart_id));
					// create invoice for that order
					$this->createInvoice($link_id);
					// add sales Info
					$this->addSalesInfo($purchase_id, $link_id);
					return  redirect()->to('dashboard');
				} else {
					$updatePurchaseTable = $this->common->dbAction('purchase_table', array(), 'delete', array('payment_request_id' => $link_id));
					if (!empty($updatePurchaseTable)) {
						return  redirect()->to('dashboard');
					}
				}
			}
		}
	}

	private function createInvoice($link_id)
	{
		$checkthePurchasedSubject = $this->defaultModel->fetchPurchaseModel($link_id);
		$insertData = array();
		if (!empty($checkthePurchasedSubject)) {
			$json_encoded_info = json_encode($checkthePurchasedSubject);
			$insertData['student_id'] = $checkthePurchasedSubject[0]->student_id;
			$insertData['cart_id'] = $checkthePurchasedSubject[0]->cart_id;
			$insertData['payment_request_id'] = $checkthePurchasedSubject[0]->payment_request_id;
			$insertData['order_id'] = $checkthePurchasedSubject[0]->order_id;
			$insertData['invoice_json'] = $json_encoded_info;
			$insertInvoice = $this->common->dbAction('invoice_table', $insertData, 'insert', array());
			if (!empty($insertInvoice)) {
				return true;
			} else {
				return false;
			}
		}
	}

	public function logOutUser()
	{
		session()->destroy();
		return redirect()->to('/auth?auth=login');
	}

	public function loadPaperListPage($item_type = '')
	{
		$getItem = $this->request->getGet();
		if (isset($getItem['subject'])) {
			$subject_short_name = $getItem['subject'];
			if (session()->get('studentDetails') !== null) {
				$studentDetails = session()->get('studentDetails');
				$data['fetchLevels'] = $this->defaultModel->fetchLevelListModel();
				$data['item_type'] = $item_type;
				if ($item_type != 'free') {
					$cartIdArray = $this->getCartId();
					$validateSubject = '';
					if ($cartIdArray['success']) {
						$cart_id = $cartIdArray['data'];
						$validateSubject = $this->defaultModel->validatePurchasedSubject($subject_short_name, $cart_id);
					}
					if (empty($validateSubject)) {

						throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
					} else {
						if (!empty($subject_short_name)) {
							$data['getPaperDetails'] = $this->defaultModel->getPaperListModel('', '', $subject_short_name);
							return view('student/my_resource_paper_list_page', $data);
						} else {
							throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
						}
					}
				} else {
					$data['getPaperDetails'] = $this->defaultModel->getPaperListModel('', 'free', $subject_short_name);
					return view('student/my_resource_paper_list_page', $data);
				}
			}
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function fetchLevelListInfo()
	{
		$postData = $this->request->getPost();
		$fetchLevels = $this->common->getInfo('level_table', '', $postData);
		if (!empty($fetchLevels)) {
			$response = array('success' => true, 'data' => $fetchLevels);
		} else {
			$response = array('success' => false, 'data' => $fetchLevels);
		}
		return json_encode($response);
	}

	public function displayBlogDetails()
	{
		$getData = $this->request->getGet();
		if (isset($getData['item'])) {
			$data['blog_item'] = $this->common->getInfo('blog_table', 'row', array('blog_short_name' => $getData['item']));
			return view('student/blog_details', $data);
		} else {
			throw new \Exception("Error Processing Request", 404);
		}
	}

	public function loadBlogListPage()
	{
		$data['blog_items'] = $this->defaultModel->fetchBlogList();
		return view('student/blog_list', $data);
	}

	public function loadTermsAndConditionPage()
	{
		return view('student/terms_and_condition');
	}

	public function loadCancelAndRefundPage()
	{
		return view('student/cancel_and_refund');
	}

	public function loadPrivacyPolicy()
	{
		return view('student/privacy_policy');
	}

	public function loadShippingDelivery()
	{
		return view('student/shipping_and_delivery');
	}

	public function loadAboutUs()
	{
		return view('student/about_us');
	}

	public function loadDisclaimer()
	{
		return view('student/disclaimer');
	}
	public function loadBuy()
	{
		return view('student/buy');
	}
	public function loadMyResourceSubjectPage($item_type = '')
	{
		$data['fetchAvailbleSubject'] = '';
		$fetchAvailbleSubject = array();
		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$data['item_type'] = $item_type;
			if ($item_type != 'free') {
				$cartIdArray = $this->getCartId();
				if ($cartIdArray['success']) {
					$cart_id = $cartIdArray['data'];
					$fetchAvailbleSubject = $this->defaultModel->fetchAvailableSubject($cart_id);
				}
			} else {
				$student_id = session()->get('studentDetails')['id'];
				$studentInfo = $this->common->getInfo('student_table', 'row', array('student_id' => $student_id));
				$level_id = $studentInfo->current_level;
				if (!empty($level_id)) {
					$fetchAvailbleSubject = $this->defaultModel->fetchFreeSubject('', $level_id);
				}
			}
			$i = 0;
			if (!empty($fetchAvailbleSubject)) {
				foreach ($fetchAvailbleSubject as $key => $value) {
					$fetchAvailbleSubject[$i]['subject_id'] = $this->encryptValue($value['subject_id']);
					$i++;
				}
			}

			$data['fetchAvailbleSubject'] = $fetchAvailbleSubject;
		}
		return view('student/my_resource_subject_list', $data);
	}

	public function loadNotesSubjectListPage($item_type = '')
	{
		if (session()->get('studentDetails') !== null) {
			$cart_id =  $this->getCartId()['data'];
			if (!empty($cart_id)) {
				if (!empty($item_type) && $item_type == 'free') {
					$student_id = session()->get('studentDetails')['id'];
					$studentInfo = $this->common->getInfo('student_table', 'row', array('student_id' => $student_id));
					$level_id = $studentInfo->current_level;
					$data['subject_id_details'] = $this->defaultModel->getFreeNotesSubjectList('', $level_id);
				} else {
					$data['subject_id_details'] = $this->defaultModel->getNotesSubjectList($cart_id);
				}
				$data['item_type'] = $item_type;
				return view('student/subject_notes_list', $data);
			} else {
				throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
			}
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function loadNotesListPage($item_type = '')
	{
		$getItem = $this->request->getGet();
		if (isset($getItem['subject'])) {
			if (session()->get('studentDetails') !== null) {
				$subject_short_name = $getItem['subject'];
				if (!empty($subject_short_name)) {
					if (!empty($item_type) && $item_type == 'free') {
						$data['notes_list'] = $this->defaultModel->getAvailableNotesListFree($subject_short_name);
					} else {
						$data['notes_list'] = $this->defaultModel->getAvailableNotesList($subject_short_name);
					}
					$data['item_type'] = $item_type;
					$data['subject_details'] = $this->common->getInfo('subject_table', 'row', array('subject_short_name' => $subject_short_name));
					return view('student/student_notes_list', $data);
				} else {
					throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
				}
			} else {
				throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
			}
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function loadAmendmentSubjectList()
	{
		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$student_id = $studentDetails['id'];
			$cart_id = $this->getCartId()['data'];
			if ($cart_id) {
				$subject_id_details = $this->defaultModel->getAmendmentSubjectList($cart_id);
				$data['subject_id_details'] = $subject_id_details;
				return view('student/amendment_subject_list', $data);
			}
		}
	}

	public function loadAmendmentList()
	{
		$getItem = $this->request->getGet();
		if (isset($getItem['subject'])) {
			$subject_short_name = $getItem['subject'];
			if (!empty($subject_short_name)) {
				$data['amendment_list'] = $this->defaultModel->fetchAmendmentList($subject_short_name);
				return view('student/amendment_list', $data);
			} else {
				throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
			}
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function loadQbankSubjectList()
	{
		if (session()->get('studentDetails') !== null) {
			$cart_id = $this->getCartId()['data'];
			if ($cart_id) {
				$subject_id_details = $this->defaultModel->getQbankSubjectList($cart_id);

				$data['subject_id_details'] = $subject_id_details;
				return view('student/qbank_subject_list', $data);
			}
		}
	}

	public function loadQbankList()
	{
		$getItem = $this->request->getGet();
		if (isset($getItem['subject'])) {
			$subject_short_name = $getItem['subject'];
			if (!empty($subject_short_name)) {
				$data['qbank_list'] = $this->defaultModel->fetchQbankList($subject_short_name);
				return view('student/qbank_list', $data);
			} else {
				throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
			}
		}
	}

	public function loadInvoicePage()
	{
		if (session()->get('studentDetails') !== null) {
			$cart_id = $this->getCartId()['data'];
			$data['invoiceDetails'] = $this->common->getInfo('invoice_table', '', array('cart_id' => $cart_id));
			return view('student/invoice_page', $data);
		}
	}

	public function loadContactUs()
	{
		return view('student/contact_us');
	}
	public function loadCSEET()
	{
		return view('student/cseet');
	}
	public function loadCSExecutive()
	{
		return view('student/cs_executive');
	}
	public function loadCSProfessional()
	{
		return view('student/cs_professional');
	}
	public function loadGPlan()
	{
		return view('student/gplan');
	}
	public function loadPlans()
	{
		return view('student/plans_list');
	}
	public function loadPricing()
	{
		return view('student/pricing');
	}
	public function loadCSTestSeries()
	{
		return view('student/cs_test_series');
	}
	public function downloadInvoice()
	{
		$mpdf = new \Mpdf\Mpdf();
		$getItem = $this->request->getGet();
		if (isset($getItem['order_id'])) {
			$order_id = $getItem['order_id'];
			$data['invoice_info'] = $this->common->getInfo('invoice_table', 'row', array('order_id' => $order_id));
			$pdf_name = 'INVOICE-' . $order_id . '.pdf';
			$html = view('student/invoice_info', $data);
			// return view('student/invoice_info',$data);
			$mpdf->WriteHTML($html);
			// $mpdf->Output($pdf_name,\Mpdf\Output\Destination::INLINE);
			$mpdf->Output($pdf_name, 'D');
		}
	}

	public function uploadAssignmentFile()
	{
		$postData = $this->request->getPost();
		$paper_id = $postData['paper_id'];
		$assignment_file = $this->request->getFile('assignment_file');
		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$student_id = $studentDetails['id'];
			$student_email = $studentDetails['email'];
			$postData['student_id'] = $student_id;
			$paper_details = $this->common->getInfo('paper_table', 'row', array('paper_id' => $paper_id), 'paper_id desc', 'paper_name');
			$checkIfPaperExist = $this->common->getInfo('upload_assignment_table', 'row', array('student_id' => $student_id, 'paper_id' => $paper_id, 'deleted' => 0));
			if (!empty($checkIfPaperExist)) {
				$response = array(
					'success' => false,
					'message' => 'Assignment already submitted',
				);
				return json_encode($response);
				exit;
			}
			ini_set('upload_max_filesize', '-1');
			if ($assignment_file->isValid() && ! $assignment_file->hasMoved()) {
				$newName = $assignment_file->getRandomName();
				$assignmentPath = '/assets/assetItems/upload_assignment_paper';
				$assignment_file->move(PUBLIC_PATH . $assignmentPath, $newName);
				$postData['assignment_file'] = $assignmentPath . '/' . $newName;
				$postData['assignment_status'] = '1';
			}
			$uploadAssignment = $this->common->dbAction('upload_assignment_table', $postData, 'insert', array());
			if ($uploadAssignment) {
				$response = array(
					'success' => true,
					'message' => 'Assignment submitted successfully',
				);
			} else {
				$response = array(
					'success' => false,
					'message' => 'Failed to submit assignment',
				);
			}
			return json_encode($response);
		}
	}

	public function fetchAssignmentStatus()
	{
		if (session()->get('studentDetails') !== null) {
			$student_id = session()->get('studentDetails')['id'];
			$fetchAssigment = $this->common->getInfo('upload_assignment_table', 'array', array('deleted' => 0, 'student_id' => $student_id), 'assignment_id desc', 'assignment_status,paper_id,assignment_checked_file');
			return json_encode($fetchAssigment);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function addNewsLetter()
	{
		$postData = $this->request->getPost();
		$updateData = array();
		if (isset($postData['newsletter_email'])) {
			$email = $postData['newsletter_email'];
			$userDetails = $this->common->getInfo('student_table', 'row', array('email' => $email));

			$updateData['is_student'] = !empty($userDetails) ? 1 : 0;
			$updateData['newsletter_email'] = $email;
			$checkNewsLetterExist = $this->common->getInfo('newsletter', 'row', array('newsletter_email' => $email, 'deleted' => 0));
			if ($checkNewsLetterExist) {
				$response = array('success' => false, 'message' => 'You have already subsribed newsletter');
			} else {
				$insertNewsLetter = $this->common->dbAction('newsletter', $updateData, 'insert', array());
				if ($insertNewsLetter) {
					$response = array('success' => true, 'message' => 'Your subscription request has been taken successfully');
				} else {
					$response = array('success' => false, 'message' => 'Failed to add subscription');
				}
			}
		} else {
			$response = array('success' => false, 'message' => 'Please enter an email Id');
		}
		return json_encode($response);
	}

	public function addFreeProductByItsPromoCode()
	{
		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$student_id = $studentDetails['id'];
			$link_id = uniqid($student_id);
			$order_id = 'OD' . uniqid($student_id . 'M');
			session()->set('link_id', $link_id);
			$cart_id = $this->getCartId()['data'];
			if (!empty($cart_id)) {
				$fetchCartItems = $this->common->getInfo('cart_items_table', '', array('cart_id' => $cart_id));
				if (!empty($fetchCartItems)) {
					$total_payable_amount = 0;
					foreach ($fetchCartItems as $value) {
						$offer_price = $value->offer_price;
						$discount = $value->discount;
						if ($value->discount_type == 'percent') {
							$total_payable_amount += $offer_price - ($offer_price * $discount / 100);
						} else {
							$total_payable_amount += $offer_price - $discount;
						}
					}
					$insertData = array();
					$insertData['cart_id'] = $cart_id;
					$insertData['payment_request_id'] = $link_id;
					$insertData['payment_mode'] = 'PROMOFULLDISCOUNT';
					$insertData['total_payment_amount'] = $total_payable_amount;
					$insertData['order_id'] = $order_id;
					$insertData['payment_status'] = 'PAID';
					$addPurchaseData = $this->common->dbAction('purchase_table', $insertData, 'insert_id', array());
					if (!empty($addPurchaseData)) {
						$updateData['payment_status'] = 'PAID';
						$updateData['purchase_id'] = $addPurchaseData;
						$updateData['deleted'] = 1;
						$update_cart_items_table = $this->common->dbAction('cart_items_table', $updateData, 'update', array('cart_id' => $cart_id, 'deleted' => 0));
						if (!empty($update_cart_items_table)) {
							$this->createInvoice($link_id);
							$this->addSalesInfo($addPurchaseData, $link_id);
							$response = array('success' => true, 'url' => base_url('/dashboard'));
						} else {
							$response = array('success' => false, 'message' => 'Somtething went wrong');
							log_message('error', 'Failed to update cart items table');
						}
					} else {
						$response = array('success' => false, 'message' => 'Somtething went wrong');
						log_message('error', 'Failed to add purcahse info');
					}
				}
			}
		} else {
			$response = array('success' => false, 'message' => 'Please login first');
			log_message('error', 'Access without login');
		}
		return json_encode($response);
	}

	public function addSalesInfo($purchase_id = '', $link_id)
	{
		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$student_id = $studentDetails['id'];
			$getStudentInfo = $this->common->getInfo('student_table', 'row', array('student_id' => $student_id));
			$salesInfoArray = array();
			if (!empty($getStudentInfo)) {
				$salesInfoArray['student_id'] = $student_id;
				$salesInfoArray['student_name'] = $getStudentInfo->student_name;
				$salesInfoArray['date_of_enrollment'] = $getStudentInfo->create_date;
			}
			$getSalesInfo = $this->defaultModel->getSalesInfoModel($purchase_id);
			if (!empty($getSalesInfo)) {
				$salesBatch = array();
				foreach ($getSalesInfo as  $value) {
					$salesInfoArray['category_name'] = $value->category_name;
					$salesInfoArray['category_short_name'] = $value->category_short_name;
					$salesInfoArray['level_name'] = $value->level_name;
					$salesInfoArray['level_short_name'] = $value->level_short_name;
					$salesInfoArray['type_name'] = $value->type_name;
					$salesInfoArray['type_short_name'] = $value->type_short_name;
					$salesInfoArray['subject_name'] = $value->subject_name;
					$salesInfoArray['subject_short_name'] = $value->subject_short_name;
					$salesInfoArray['promo_code'] = $value->promo_code_name;
					$salesInfoArray['discount_type'] = $value->discount_type;
					$salesInfoArray['discount_amt'] = $value->discount;
					$salesInfoArray['original_price'] = $value->original_price;
					$salesInfoArray['offer_price'] = $value->offer_price;
					$salesInfoArray['payment_mode'] = $value->payment_mode;
					$salesInfoArray['purchase_date'] = $value->purchase_date;
					$salesInfoArray['link_id'] = $link_id;
					$salesBatch[] = $salesInfoArray;
				}
				$addSalesInfo = $this->common->dbAction('sales_table', $salesInfoArray, 'insert_batch', array());
			}

			if (!empty($addSalesInfo)) {
				return true;
			}
		}
	}

	public function loadProfilePage()
	{
		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$student_id = $studentDetails['id'];
			$data['studentDetails'] = $this->common->getInfo('student_table', 'row', array('student_id' => $student_id));
			$data['categoryDetails'] = $this->common->getInfo('category_table', '', array('deleted' => 0, 'active' => 1));
			return view('student/student_profile', $data);
		}
	}

	public function updateUserProfile()
	{
		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$student_id = $studentDetails['id'];
			$postData = $this->request->getPost();
			$updateProfile = $this->common->dbAction('student_table', $postData, 'update', array('student_id' => $student_id));
			if (!empty($updateProfile)) {
				$response = array('success' => true, 'message' => 'User info updated successfully');
			} else {
				$response = array('success' => false, 'message' => 'Failed to update user info');
			}
			return json_encode($response);
		}
	}

	public function loadWhyUs()
	{
		return view('student/why_us');
	}

	// forgot password
	public function loadForgotPassword()
	{
		return view('student/auth/forgot_password');
	}
	public function forgotPassEmail()
	{
		$postData = $this->request->getPost();
		$checkEmailExist = $this->common->getInfo('student_table', 'row', $postData);
		if ($checkEmailExist->blocked == 1) {
			$response = array('success' => false, 'message' => 'User account is blocked by the admin');
			return json_encode($response);
			exit;
		} else if (empty($checkEmailExist)) {
			$response = array('success' => false, 'message' => 'User does not exists');
			return json_encode($response);
			exit;
		}
		$otp = random_int(100000, 999999);
		$sendEmail = $this->sendMail($postData['email'], 'OTP', "This is the OTP message your OTP is $otp ,valid for 15 min", 'Forgot Password');
		if ($sendEmail == '1') {
			$tempdata = ['otp' => $otp, 'email' => $postData['email']];
			session()->setTempdata($tempdata, null, 300);
			$response = array('success' => true, 'message' => 'Email has been sent successfully');
		}
		return json_encode($response);
	}

	public function verifyOTP()
	{
		$postData = $this->request->getPost();
		$tempArray = session()->getTempdata();
		if (!empty($tempArray)) {
			if ($tempArray['email'] != $postData['email']) {
				$response = array('success' => false, 'message' => 'Please enter your correct mail address');
			} else {
				if ($tempArray['otp'] == $postData['otp']) {
					$response = array('success' => true, 'message' => 'OTP verified successfully');
					session()->setTempdata('email', $tempArray['email'], 900);
				} else {
					$response = array('success' => false, 'message' => 'Wrong OTP entered');
				}
			}
		} else {
			$response = array('success' => false, 'message' => 'OTP expired');
		}
		return json_encode($response);
	}

	public function loadSetPasswordPage()
	{
		if (session()->getTempdata() !== null) {
			return view('student/auth/password_set');
		} else {
			return redirect()->to('auth?auth=login');
		}
	}

	public function setNewPassword()
	{
		$postData = $this->request->getPost();
		$emailTempData = session()->getTempdata('email');
		if (empty($emailTempData)) {
			$response = array('success' => false, 'message' => 'Session expired, please try again');
		} else {
			$password = md5(md5($postData['password']));
			$updatePassword = $this->common->dbAction('student_table', array('password' => $password), 'update', array('email' => $emailTempData));
			if ($updatePassword) {
				$response = array('success' => true, 'message' => 'Password updated successfully');
			} else {
				$response = array('success' => false, 'message' => 'Failed to update password');
			}
		}
		return json_encode($response);
	}

	public function updatePassword()
	{
		$postData = $this->request->getPost();
		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$student_id = $studentDetails['id'];
			$password = base64_decode($postData['password']);
			$setPassword = md5(md5($password));
			if (!empty($setPassword)) {
				$updatePassword = $this->common->dbAction('student_table', array('password' => $password), 'update', array('student_id' => $student_id));
				if (!empty($updatePassword)) {
					$response = array('success' => true, 'message' => 'Password updated successfully');
				} else {
					$response = array('success' => true, 'message' => 'Password updated successfully');
				}
			} else {
				$response = array('success' => false, 'message' => 'No password available');
			}
		} else {
			$response = array('success' => false, 'message' => 'Please login first');
		}
		return json_encode($response);
	}
	public function fetchCategoryLists()
	{
		$categories = $this->defaultModel->fetchCategory();
		return $this->response->setJSON($categories);
	}

	public function fetchLevelLists($category_id)
	{
		$levels = $this->defaultModel->fetchLevelsByCategory($category_id);
		return $this->response->setJSON($levels);
	}

	public function fetchTypeLists($level_id)
	{
		$types = $this->defaultModel->fetchTypesByLevel($level_id);
		return $this->response->setJSON($types);
	}

	public function fetchSubjectLists($type_id, $level_id)
	{
		$subject = $this->defaultModel->fetchSubjectsByTypeAndLevel($type_id, $level_id);

		return $this->response->setJSON($subject);
	}
	public function getReferralCredits()
	{
		$db = \Config\Database::connect();

		$builder = $db->table('purchase_table p');
		$builder->select("
            s.student_id AS referral_by_student_id, 
            s.student_name AS referral_by_student_name,
            c.student_id AS purchased_by_student_id,
            p.total_payment_amount,
            (p.total_payment_amount * 0.1) AS referral_credit
        ");
		$builder->join('cart_table c', 'p.cart_id = c.cart_id');
		$builder->join('student_table s', 'c.student_id = s.student_id');
		$builder->where('p.payment_status', 'success');
		$builder->where('s.referral_by_student_id IS NOT NULL');

		$query = $builder->get();

		if ($query->getNumRows() > 0) {
			$data['referral_credits'] = $query->getResult();
		} else {
			$data['referral_credits'] = [];
		}

		return view('dash', $data);
	}

	public function requestPayout()
	{
		$db = \Config\Database::connect();
		$input = $this->request->getJSON(); // Get JSON input from AJAX request

		if (session()->get('studentDetails') !== null) {
			$studentDetails = session()->get('studentDetails');
			$student_id = $studentDetails['id'];
			$amount = $input->amount;
			$upi_id = $input->upi_id;
			$status = 'pending';
			$requested_at = date('Y-m-d H:i:s'); // Current timestamp

			// Save payout request to database
			$builder = $db->table('payout_table');
			$data = [
				'student_id' => $student_id,
				'amount' => $amount,
				'upi_id' => $upi_id,
				'status' => $status,
				'requested_at' => $requested_at,
			];

			if ($builder->insert($data)) {
				return $this->response->setJSON(['success' => true, 'message' => 'Payout requested successfully.']);
			} else {
				return $this->response->setJSON(['success' => false, 'message' => 'Failed to request payout.']);
			}
		}
	}
}
