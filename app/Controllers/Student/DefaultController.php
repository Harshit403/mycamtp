<?php
	namespace App\Controllers\Student;
	use App\Models\BaseModel;
	use App\Controllers\BaseController;
	use App\Models\Student\DefaultModel;

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
	        $data['categoryDetails'] = $this->common->getInfo('category_table','',array('deleted'=>0,'active'=>1));
	        $data['blog_list'] = $this->defaultModel->fetchBlogList(4);
	        return view('student/index',$data);
	    }

	    public function auth(){
	    	$getData = $this->request->getGet();
	    	if (isset($getData['auth'])) {
	    		$data['addClass'] = $getData['auth'];
	    		$data['level_list'] = $this->defaultModel->fetchLevelListModel();
	    		$data['category_list'] = $this->common->getInfo('category_table','',array('deleted'=>0,'active'=>1));
	    		return view('student/auth/student_auth',$data);
	    	} else {
	        	throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
	    	}
	    }

	    public function fetchLevelList(){
	    	$getData = $this->request->getGet();
	    	$category_short_name = $getData['category'];
	    	if (!empty($category_short_name)) {
	    		$data['level_list'] = $this->defaultModel->fetchLevelListModel($category_short_name);
	    		return view('student/level_list',$data);
	    	}
	    }

	    public function fetchTypeList(){
	    	$getData = $this->request->getGet();
	    	$category_short_name = $getData['category'];
	    	$level_short_name = $getData['level'];
	    	if (!empty($level_short_name)) {
	    		$data['type_list'] = $this->defaultModel->fetchTypeListModel($level_short_name);
	    		return view('student/type_list',$data);
	    	}
	    }

	    public function fetchSubjectList(){
	    	$getData = $this->request->getGet();
	    	$type_short_name = $getData['type'];
	    	if (!empty($type_short_name)) {
	    		$data['subject_list'] = $this->defaultModel->fetchSubjectListModel($type_short_name);
	    		return view('student/subject_list',$data);
	    	}
	    }

	    public function addStudentDetails(){
	    	$postData = $this->request->getPost();
			$checkUeserExist = $this->defaultModel->checkExistStudent($postData['email'],$postData['mobile_no']);
			if(empty($checkUeserExist)){
				$password = $postData['password'];
				$postData['password'] = md5(md5($postData['password']));
				unset($postData['confirm_password']);
				$addStudentData = $this->common->dbAction('student_table',$postData,'insert',array());
				if (!empty($addStudentData)) {
				// 	$emailTemplate = file_get_contents(PUBLIC_PATH.'/emailTemplate/reg_template.php');
				// 	$login_url = base_url().'/sign_in';
				// 	$emailTemplate = str_replace('{login}',$login_url, $emailTemplate);
				// 	$emailTemplate = str_replace('{user_email}',$postData['email'], $emailTemplate);
				// 	$emailTemplate = str_replace('{user_password}',$password, $emailTemplate);
				// 	$subject = "Registration Confirmation";
				// 	$send_email = $this->sendMail($postData['email'], $subject, $emailTemplate,'New Register');
					$response = array(
						'success'=>true,
						'message'=>'You are registered successfully',
					);
				} else {
					$response = array(
						'success'=>false,
						'message'=>'Failed to add your account',
					);
				}
			} else{
				$response = array(
					'success'=>false,
					'message'=>'User account is already exists',
				);
			}
			return json_encode($response);
	    }

	    public function verifyStudentLogin(){
	    	$postData = $this->request->getPost();
			$checkUserExist = $this->common->getInfo('student_table','row',array('email'=>$postData['email']),'student_name,email,password');
			$cryptPass = md5(md5($postData['password']));
			if (!empty($checkUserExist)) {
				if ($cryptPass==$checkUserExist->password) {
					if($checkUserExist->blocked==0){
						$success = true;
						$message = 'You have logged in successfully';
						$studentDetails = array(
							'id'=>$checkUserExist->student_id,
							'student_name'=>$checkUserExist->student_name,
							'mobile_no'=>$checkUserExist->mobile_no,
							'email'=>$checkUserExist->email,
							'is_logged_in'=>true,
						);
						session()->set('studentDetails',$studentDetails);
					} else {
						$success = false;
						$message = 'Your account has been blocked, please contact with admin';
					}
					
				}else {
					$success = false;
					$message = 'You have entered wrong credentials';
				}
			} else {
				$success = false;
				$message = 'Student does not exist';
			}
			$response = array(
				'success'=>$success,
				'message'=>$message,
			);
			return json_encode($response);
	    	$postData = $this->request->getPost();
			$checkUserExist = $this->common->getInfo('student_table','row',array('email'=>$postData['email']),'student_name,email,password');
			$cryptPass = md5(md5($postData['password']));
			if (!empty($checkUserExist)) {
				if ($cryptPass==$checkUserExist->password) {
					if($checkUserExist->blocked==0){
						$success = true;
						$message = 'You have logged in successfully';
						$studentDetails = array(
							'id'=>$checkUserExist->student_id,
							'student_name'=>$checkUserExist->student_name,
							'email'=>$checkUserExist->email,
							'mobile_no'=>$checkUserExist->mobile_no,
							'is_logged_in'=>true,
						);
						session()->set('studentDetails',$studentDetails);
					} else {
						$success = false;
						$message = 'Your account has been blocked, please contact with admin';
					}
					
				}else {
					$success = false;
					$message = 'You have entered wrong credentials';
				}
			} else {
				$success = false;
				$message = 'Student does not exist';
			}
			$response = array(
				'success'=>$success,
				'message'=>$message,
			);
			return json_encode($response);
	    }

	    public function loadDashboardPage($item_type=''){
			$data['fetchLevels'] = $this->defaultModel->fetchLevelListModel();
			$fetch_sub ='';
			$data['schedule_list'] = '';
	        $subject_id_details = '';
	        if(session()->get('studentDetails')!==null){
	            $studentDetails = session()->get('studentDetails');
	            $student_id = $studentDetails['id'];
	            if ($item_type!='free') {
	            	$cart_table = $this->common->getInfo('cart_table','row',array('student_id'=>$student_id,'deleted'=>0));
		       		if (!empty($cart_table)) {
		       			$cart_id = $cart_table->cart_id;
		            	$fetch_sub = $this->defaultModel->fetchAvailableSubject($cart_id,3);
		            	$subject_id_details = $this->defaultModel->getNotesSubjectList($cart_table->cart_id,3);
		                $amendmentDetails = $this->defaultModel->getAmendmentSubjectList($cart_table->cart_id,3);
		                $qbankDetails = $this->defaultModel->getQbankSubjectList($cart_table->cart_id,3);
		                $data['amendment_sub'] = $amendmentDetails;
		                $data['qbank_sub'] = $qbankDetails;
		            	$data['schedule_list'] = $this->defaultModel->getScheduleList($cart_table->cart_id);
		       		}
	            } else {
	                $studentInfo = $this->common->getInfo('student_table','row',array('student_id'=>$student_id));
	                $level_id = $studentInfo->current_level;
	            	$fetch_sub = $this->defaultModel->fetchFreeSubject(3,$level_id);
	            	$subject_id_details = $this->defaultModel->getFreeNotesSubjectList(3,$level_id);
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
		        
		        $data['fetch_sub'] = $fetch_sub;
	            $data['notes_sub'] = $subject_id_details;
		        $data['item_type'] = $item_type;
	        }
	        
			return view('student/dashboard',$data);
		}

	    public function addToCartItem(){
			$postData = $this->request->getPost();
			if(session()->get('studentDetails')!==null){
				$studentDetails = session()->get('studentDetails');
				$cartArray = $this->getCartId();
				$cart_id = '';
				if($cartArray['success']){
					$cart_id = $cartArray['data'];
				}
				$fetchSubjectDetails = $this->common->getInfo('subject_table','row',array('subject_id'=>$postData['subject_id'],'deleted'=>0));
				if (!empty($fetchSubjectDetails)) {
					$postData['original_price'] = $fetchSubjectDetails->original_price;
					$postData['offer_price'] = $fetchSubjectDetails->offer_price;
					$postData['amt_after_discount'] = $fetchSubjectDetails->offer_price;
				}
				if(!empty($cart_id)){
					$fetchCartItems = $this->common->getInfo('cart_items_table','row',array('cart_id'=>$cart_id,'subject_id'=>$postData['subject_id'],'deleted'=>0));
					if(!empty($fetchCartItems)){
						$qty = $fetchCartItems->qty;
						$qty++;
						$addCartItems = $this->common->dbAction('cart_items_table',array('qty'=>$qty),'update',array('cart_items_id'=>$fetchCartItems->cart_items_id));
					} else {
						$existCartItemsPromoCode = $this->common->getInfo('cart_items_table','row',array('cart_id'=>$cart_id,'deleted'=>0));
						if(!empty($existCartItemsPromoCode)){
							$postData['promo_code_name'] = $existCartItemsPromoCode->promo_code_name;
							$postData['discount_type'] = $existCartItemsPromoCode->discount_type;
							$postData['discount'] = $existCartItemsPromoCode->discount;
						}
						$postData['qty'] = 1;
						$postData['cart_id'] = $cart_id;
						$addCartItems = $this->common->dbAction('cart_items_table',$postData,'insert',array());
					}
					if(!empty($addCartItems)){
						$cartDetails = json_decode($this->getCartDetails($cart_id));
						$status = true;
						$message = 'Item added to cart successfully';
						$totalQty = count($cartDetails);
					} else{
						$status = false;
						$message = 'Failed to add cart items';
						$totalQty = 0;
					}
				} else{
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
				'success'=>$status,
				'message'=>$message,
				'totalQty'=>$totalQty,
			);
			return json_encode($response);
		}

		public function getCartDetails($cart_id = ''){
			if($cart_id==''){
				if(session()->get('studentDetails')!==null){
					$studentDetails = session()->get('studentDetails');
					$student_id = $studentDetails['id'];
					$cartDetails  = $this->common->getInfo('cart_table','row',array('student_id' => $student_id,'deleted'=>0),'cart_id desc','cart_id');
					if(!empty($cartDetails->cart_id)){
						$cart_id = $cartDetails->cart_id;
						session()->push('studentDetails', ['cart_id' => $cart_id]);
					} else {
						$cart_id = $this->common->dbAction('cart_table',array('student_id' => $student_id),'insert_id',array());
					}
				}
			}
			$getCartItems = $this->defaultModel->getActiveCartItems($cart_id);
			return json_encode($getCartItems);
		}

		public function getCartItemsArray(){
			if(session()->get('studentDetails')!==null){
				$studentDetails = session()->get('studentDetails');
				$cart_id = isset($studentDetails['cart_id']) ? $studentDetails['cart_id'] : '' ;
				if($cart_id==''){
					$cart_details = $this->common->getInfo('cart_table','row',array('student_id'=>$studentDetails['id'],'deleted=>0'));
					$cart_id = $cart_details->cart_id;
				}
				$cartItemsDetailsArray  = $this->defaultModel->getActiveCartItems($cart_id);
				if(!empty($cartItemsDetailsArray)){
					$response = array(
						'success'=>true,
						'message'=>'Cart items are fetched successfully',
						'cartData'=>$cartItemsDetailsArray,
					);
				} else {
					$response = array(
						'success'=>true,
						'message'=>'cart is blanks',
						'cartData'=>[],
					);
				}
				
			} else {
				$response = array(
					'success'=>false,
					'message'=>'Something went wrong',
					'cartData'=>[],
				);
			}
			return json_encode($response);	
		}

		public function applyPromocode(){
			$postData = $this->request->getPost();
			$totalPrice = $postData['totalPriceDeciaml'];
			unset($postData['totalPriceDeciaml']);
			$postData['deleted']=0;
			$promoData = [];
			$checkPromocodeExist = $this->common->getInfo('promo_code_table','row',$postData);
			if(empty($checkPromocodeExist)){
				$response = array('success' => false,'message' =>'Promo Code does not exist');
				return json_encode($response);
			} else {
				if($checkPromocodeExist->validity_date < date('Y-m-d h:i:s')){
					$response = array('success'=>false,'message' =>'Promocode is expired');
					return json_encode($response);
					exit;
				} else if($totalPrice < $checkPromocodeExist->min_cart_amt){
					$response = array('success'=>false,'message' =>'Min cart value to apply code is ' . $checkPromocodeExist->min_cart_amt);
					return json_encode($response);
					exit;
				}
				$promoData['promo_code_name'] = $checkPromocodeExist->code_name;
				$promoData['discount_type'] = $checkPromocodeExist->discount_type;
				$promoData['discount'] = $checkPromocodeExist->discount_amt;
				$update_promo_code = '';
				if(session()->get('studentDetails')!==null){
					$studentDetails = session()->get('studentDetails');
					$cartArray = $this->getCartId();
					$cart_id = $cartArray['data'];
					$update_promo_code = $this->common->dbAction('cart_items_table',$promoData,'update',array('cart_id'=>$cart_id,'deleted'=>0));
					$this->updateAfterDiscountAmt($cart_id,'update');
				}
				if(!empty($update_promo_code)){
					$response = array(
						'success'=>true,
						'message'=>'Promo code applied successfully'
					);
				} else {
					$response = array(
						'success'=>false,
						'message'=>'Failed to apply promo code'
					);
				}
				return json_encode($response);
			}
		}

		public function removeCartItems(){
			$postData = $this->request->getPost();
			$cart_items_id =$postData['cart_items_id'];
			$changeStatusDelete = $this->common->dbAction('cart_items_table','','delete',array('cart_items_id'=>$cart_items_id));
			$this->validPromoCode();
			if(!empty($changeStatusDelete)){
				$response = array(
					'success'=>true,
					'message'=>'Item removed successfully',
				);
			} else{
				$response = array(
	                'success'=>false,
	                'message'=>'Failed to remove item',
	            );
			}
			return json_encode($response);
		}

		public function validPromoCode(){
			if(session()->get('studentDetails')!==null){
				$student_details  = session()->get('studentDetails');
				$student_id = $student_details['id'];
				$cartDetails = $this->common->getInfo('cart_table','row',array('student_id' => $student_id));
				if(!empty($cartDetails)){
					$cartItemsDetails = json_decode($this->getCartDetails());
					$priceArray = array_map(function($v){
						return $v->offer_price;
					}, $cartItemsDetails);
					$priceTotal = array_sum($priceArray);
					if($priceTotal!==''){
						$checkPromoCodeMaxValueRow = $this->defaultModel->getPromoCodeDetails($cartDetails->cart_id);
						if(!empty($checkPromoCodeMaxValueRow)){
							$checkPromoCodeMaxValue = $checkPromoCodeMaxValueRow->min_cart_amt;
							if($checkPromoCodeMaxValue > $priceTotal){
								$this->common->dbAction('cart_items_table',array('promo_code_name'=>null,'discount_type'=>'percent','discount'=>null),'update',array('cart_id'=>$cartDetails->cart_id,'deleted'=>0));
							}
						}
					}
				}
			}
		}

		public function removePromocode(){
			$studentData = session()->get('studentDetails');
			$getCartDetails = $this->common->getInfo('cart_table','row',array('student_id'=>$studentData['id']));
			$removePromocode = $this->common->dbAction('cart_items_table',array('promo_code_name'=>'','discount_type'=>'percent','discount'=>''),'update',array('cart_id'=>$getCartDetails->cart_id));
			$this->updateAfterDiscountAmt();
			if (!empty($removePromocode)) {
				$response = array('success'=>true,'message'=>'Promocode has been removed successfully');
			} else {
				$response = array('success'=>false,'message'=>'Failed to remove promocode');
			}
			return json_encode($response);
		}

		public function updateAfterDiscountAmt($cart_id=''){
			$cartItemsDetailsArray  = json_decode($this->getCartDetails());
			foreach ($cartItemsDetailsArray as $value) {
				$offer_price = $value->offer_price;
				$discount = $value->discount;
				if ($value->discount_type=='percent') {
					$updateData['amt_after_discount'] = $offer_price - ($offer_price*$discount/100);
				} else {
					$updateData['amt_after_discount'] =  $offer_price - $discount;
				}
				$this->common->dbAction('cart_items_table',$updateData,'update',array('cart_items_id'=>$value->cart_items_id));
			}
		}

		public function checkoutPayments(){
			// fetch student cart items
			$getCartDetails = json_decode($this->getCartDetails());
			$payableAmtArray = array_map(function($v){
				return $v->amt_after_discount;
			}, $getCartDetails);
			$total_amt_to_pay = array_sum($payableAmtArray);
			$studentDetails = session()->get('studentDetails');
			$student_id = $studentDetails['id'];
			$order_id = 'OD'.uniqid($student_id.'M');
			$linkInfo = $this->cashfreePayment($studentDetails,$total_amt_to_pay,$order_id);
			// save purchase details
			if (!empty($linkInfo)) {
				$insertData = array();
				$cartIdArray = $this->getCartId();
				$insertData['cart_id'] = $cartIdArray['data'];
				$insertData['cf_link_id'] = $linkInfo->cf_link_id;
				$insertData['payment_request_id'] = $linkInfo->link_id;
				$insertData['payment_mode'] = 'cashfree';
				$insertData['total_payment_amount'] = $linkInfo->link_amount;
				$insertData['order_id'] = $order_id;
				$addPurchaseData = $this->common->dbAction('purchase_table',$insertData,array());
				if (!empty($addPurchaseData)) {
					$response = array('success'=>true,'url'=>$linkInfo->link_url);
				} else {
					log_message('error','Link info have not updated in purchase table');
					$response = array('success'=>false,'message'=>'Somthing went wrong');
				}
			} else{
				log_message('error','Failed to create link info properly');
				$response = array('success'=>false,'message'=>'Somthing went wrong');
			}
			
			return json_encode($response);

		}


		public function cashfreePayment($studentDetails,$total_amt_to_pay=0.00,$order_id){
			$student_id = $studentDetails['id'];
			$link_id = uniqid($student_id);
			session()->set('link_id',$link_id);
			$curl = curl_init();
			curl_setopt_array($curl, [
		  	CURLOPT_URL => "https://sandbox.cashfree.com/pg/links",
		 	CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => json_encode([
			    'link_amount' => $total_amt_to_pay,
			    'link_currency' => 'INR',
			    'link_id' => $link_id,
			    'link_partial_payments' => false,
			    'customer_details' => [
			        'customer_name' => $studentDetails['student_name'],
			        'customer_phone' => $studentDetails['mobile_no'],
			        'customer_email' => $studentDetails['email']
			    ],
			    'link_purpose' => $order_id,
			    'link_notify' => [
			        'send_sms' => false,
			        'send_email' => false
			    ],
			    'link_auto_reminders' => false,
			    'link_notes' => [
			        'key_1' => 'value_1',
			        'key_2' => 'value_2'
			    ],
			    'link_meta' => [
			        'upi_intent' => false,
			        'return_url' => base_url().'purchase-status',
			    ],
			    'thank_you_msg'=>'Thank you for your purchase'
			  ]),
			  CURLOPT_HTTPHEADER => [
			    "accept: application/json",
			    "content-type: application/json",
			    "x-api-version: 2022-09-01",
			    "x-client-id: TEST10214468d99f38722859d430198886441201",
			    "x-client-secret: cfsk_ma_test_65d85b5eefef840a9f8e52b5b8840122_bceb118b",
			    "x-api-version: 2022-09-01"
			  ],
			]);

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			  echo "cURL Error #:" . $err;
			} else {
			  return json_decode($response);
			}
		}

		public function purchaseStatus(){
			echo 'redirect to..wait';
			$getData = $this->request->getGet();
			if (session()->get('link_id')==null) {
				echo "Invalid action detected";
				return redirect('dashboard');
				exit;
			}
			$link_id = session()->get('link_id');
			$curl = curl_init();
			curl_setopt_array($curl, [
			  CURLOPT_URL => "https://sandbox.cashfree.com/pg/links/".$link_id,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => [
			    "accept: application/json",
			    "content-type: application/json",
			    "x-api-version: 2022-09-01",
			    "x-client-id: TEST10214468d99f38722859d430198886441201",
			    "x-client-secret: cfsk_ma_test_65d85b5eefef840a9f8e52b5b8840122_bceb118b",
			    "x-api-version: 2022-09-01"
			  ],
			]);

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			  echo "cURL Error #:" . $err;
			} else {
			   $json_decoded_info = json_decode($response);
			   $purchase_table_fetch_info = $this->common->getInfo('purchase_table','row',array('payment_request_id'=>$link_id));
			   if (!empty($purchase_table_fetch_info)) {
			     $purchaseStatus = $json_decoded_info->link_status;
			     
			     if ($purchaseStatus=='PAID') {
			   		// update purchase table
			     	$updatePurchaseTable = $this->common->dbAction('purchase_table',array('payment_status'=>$purchaseStatus),'update',array('payment_request_id'=>$link_id));
			     	// update cart items table
		     		$cart_id = $purchase_table_fetch_info->cart_id;
			     	$purchase_id = $purchase_table_fetch_info->purcahse_id;
			     	$update_cart_items_table = $this->common->dbAction('cart_items_table',array('payment_status'=>$purchaseStatus,'purchase_id'=>$purchase_id,'deleted'=>1),'update',array('cart_id'=>$cart_id));
			     	// create invoice for that order
			     	$this->createInvoice($link_id);
		     		return redirect('dashboard');
			     } else {
			     	$responseInfo = $this->cancelPaymentLink($link_id);
			     	if ($responseInfo->link_status=='CANCELLED') {
					  	$updatePurchaseTable = $this->common->dbAction('purchase_table',array(),'delete',array('payment_request_id'=>$link_id));
					  	if ($updatePurchaseTable) {
					  		return redirect('dashboard');
					  	}
				  	}
			     }
			   }
			}
		}

		public function cancelPaymentLink($link_id){
			$curl = curl_init();

			curl_setopt_array($curl, [
			  CURLOPT_URL => "https://sandbox.cashfree.com/pg/links/".$link_id."/cancel",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_HTTPHEADER => [
			    "accept: application/json",
			    "content-type: application/json",
			    "x-api-version: 2022-09-01",
			    "x-client-id: TEST10214468d99f38722859d430198886441201",
			    "x-client-secret: cfsk_ma_test_65d85b5eefef840a9f8e52b5b8840122_bceb118b",
			    "x-api-version: 2022-09-01"
			  ],
			]);

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			  echo "cURL Error #:" . $err;
			} else {
			  return json_decode($response);
			  
			}
		}

		public function createInvoice($link_id){
			$checkthePurchasedSubject = $this->defaultModel->fetchPurchaseModel($link_id);
			$insertData = array();
			if (!empty($checkthePurchasedSubject)) {
				$json_encoded_info = json_encode($checkthePurchasedSubject);
				$insertData['student_id'] = $checkthePurchasedSubject[0]->student_id;
				$insertData['cart_id'] = $checkthePurchasedSubject[0]->cart_id;
				$insertData['payment_request_id'] = $checkthePurchasedSubject[0]->payment_request_id;
				$insertData['order_id'] = $checkthePurchasedSubject[0]->order_id;
				$insertData['invoice_json'] = $json_encoded_info;
				$insertInvoice = $this->common->dbAction('invoice_table',$insertData,'insert',array());
				if (!empty($insertInvoice)) {
					return true;
				} else {
					return false;
				}
			}
		}

		public function logOutUser(){
			session()->destroy();
			return redirect()->to('/auth?auth=login');
		}

		public function loadPaperListPage(){
			$getItem = $this->request->getGet();
			if (isset($getItem['subject'])) {
				$subject_short_name = $getItem['subject'];
				if(session()->get('studentDetails')!==null){
		            $studentDetails = session()->get('studentDetails');
		            $data['fetchLevels'] = $this->defaultModel->fetchLevelListModel();
		            $item_type = '';
		            if (isset($getItem['item_type'])) {
		            	$item_type = $getItem['item_type'];
		            }
		            $data['item_type'] = $item_type;
		            if ($item_type!='free') {
		                $cartIdArray = $this->getCartId();
		                $validateSubject = '';
		                if($cartIdArray['success']){
		                    $cart_id = $cartIdArray['data'];
		                    $validateSubject = $this->defaultModel->validatePurchasedSubject($subject_short_name,$cart_id);
		                }
		                if(empty($validateSubject)){

		                    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		                } else {
		                    if (!empty($subject_short_name)) {
		                        $data['getPaperDetails'] = $this->defaultModel->getPaperListModel('','',$subject_short_name);
		                        return view('student/my_resource_paper_list_page',$data);
		                    } else {
		                        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		                    }
		                }
		            } else{
		                $data['getPaperDetails'] = $this->defaultModel->getPaperListModel('','free',$subject_short_name);
		                return view('student/my_resource_paper_list_page',$data);
		            }
		        }
			} else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
			}
	        
	    }

	    public function fetchLevelListInfo(){
	    	$postData = $this->request->getPost();
	    	$fetchLevels = $this->common->getInfo('level_table','',$postData);
	    	if (!empty($fetchLevels)) {
	    		$response = array('success'=>true,'data'=>$fetchLevels);
	    	} else {
	    		$response = array('success'=>false,'data'=>$fetchLevels);
	    	}
	    	return json_encode($response);
	    }

	    public function displayBlogDetails(){
	    	$getData = $this->request->getGet();
	    	if (isset($getData['item'])) {
	    		$data['blog_item'] = $this->common->getInfo('blog_table','row',array('blog_short_name'=>$getData['item']));
	    		return view('student/blog_details',$data);
	    	} else {
	    		throw new Exception("Error Processing Request", 404);
	    	}
	    }

	    public function loadBlogListPage(){
			$data['blog_items'] = $this->defaultModel->fetchBlogList();
			return view('student/blog_list',$data);
		}

		public function loadTermsAndConditionPage(){
			return view('student/terms_and_condition');
		}

		public function loadCancelAndRefundPage(){
			return view('student/cancel_and_refund');
		}

		public function loadPrivacyPolicy(){
			return view('student/privacy_policy');
		}

		public function loadShippingDelivery(){
			return view('student/shipping_and_delivery');
		}

		public function loadAboutUs(){
			return view('student/about_us');
		}

		public function loadDisclaimer(){
			return view('student/disclaimer');
		}

		public function loadMyResourceSubjectPage($item_type=''){
	        $data['fetchAvailbleSubject'] ='';
	        if(session()->get('studentDetails')!==null){
	            $studentDetails = session()->get('studentDetails');
	            $data['item_type'] = $item_type;
	            if ($item_type!='free') {
	                $cartIdArray = $this->getCartId();
	                if($cartIdArray['success']){
	                    $cart_id = $cartIdArray['data'];
	                    $fetchAvailbleSubject = $this->defaultModel->fetchAvailableSubject($cart_id);
	                }
	            } else {
	                $student_id = session()->get('studentDetails')['id'];
	                $studentInfo = $this->common->getInfo('student_table','row',array('student_id'=>$student_id));
	                $level_id = $studentInfo->current_level;
	                // $fetchAvailbleSubject = $this->defaultModel->fetchFreeSubject('',$level_id);
	            }
	            $i = 0;
	            foreach ($fetchAvailbleSubject as $key => $value) {
	                $fetchAvailbleSubject[$i]['subject_id'] = $this->encryptValue($value['subject_id']);
	                $i++;
	            }
	            $data['fetchAvailbleSubject'] = $fetchAvailbleSubject;
	        }
	        return view('student/my_resource_subject_list',$data);
	    }

		
	}
?>