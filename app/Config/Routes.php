<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// STUDENT
$routes->get('/', STUDENT.'DefaultController::index');
$routes->get('/auth', STUDENT.'DefaultController::auth');
$routes->get('/level', STUDENT.'DefaultController::fetchLevelList');
$routes->get('/type', STUDENT.'DefaultController::fetchTypeList');
$routes->get('/subject', STUDENT.'DefaultController::fetchSubjectList');
$routes->post('/register-details', STUDENT.'DefaultController::addStudentDetails');
$routes->post('/sign-in', STUDENT.'DefaultController::verifyStudentLogin');
$routes->get('/dashboard', STUDENT.'DefaultController::loadDashboardPage',['filter'=>'studentAuth']);
$routes->get('/dashboard/(:any)', STUDENT.'DefaultController::loadDashboardPage/$1',['filter'=>'studentAuth']);
$routes->post('/add-to-cart', STUDENT.'DefaultController::addToCartItem');
$routes->get('/fetch-active-cartitems', STUDENT.'DefaultController::getCartItemsArray',['filter'=>'studentAuth']);
$routes->get('/payment/free-payable-product',STUDENT.'DefaultController::addFreeProductByItsPromoCode');

$routes->post('/remove-cart-items', STUDENT.'DefaultController::removeCartItems',['filter'=>'studentAuth']);
$routes->post('/checkout-cart-items', STUDENT.'DefaultController::checkoutPayments',['filter'=>'studentAuth']);
$routes->post('/apply-promocode',STUDENT.'DefaultController::applyPromocode',['filter'=>'studentAuth']);
$routes->post('/promo/remove-promocode',STUDENT.'DefaultController::removePromocode',['filter'=>'studentAuth']);

$routes->get('/purchase-status',STUDENT.'DefaultController::purchaseStatus',['filter'=>'studentAuth']);
$routes->get('/logout',STUDENT.'DefaultController::logOutUser',['filter'=>'studentAuth']);
$routes->post('/fetch-level-list',STUDENT.'DefaultController::fetchLevelListInfo');
$routes->get('/blog',STUDENT.'DefaultController::displayBlogDetails');
$routes->get('/blog-list',STUDENT.'DefaultController::loadBlogListPage');

$routes->get('/terms-and-condition',STUDENT.'DefaultController::loadTermsAndConditionPage');
$routes->get('/cancel-and-refund',STUDENT.'DefaultController::loadCancelAndRefundPage');
$routes->get('/privacy-policy',STUDENT.'DefaultController::loadPrivacyPolicy');
$routes->get('/shipping-and-dlivery',STUDENT.'DefaultController::loadShippingDelivery');
$routes->get('/about-us',STUDENT.'DefaultController::loadAboutUs');
$routes->get('/why-us',STUDENT.'DefaultController::loadWhyUs');
$routes->get('/disclaimer',STUDENT.'DefaultController::loadDisclaimer');

// forgot password
$routes->get('/forgot-password',STUDENT.'DefaultController::loadForgotPassword');
$routes->post('/forgot-pass-email',STUDENT.'DefaultController::forgotPassEmail');
$routes->post('/verify-otp',STUDENT.'DefaultController::verifyOTP');
$routes->post('/set-new-password',STUDENT.'DefaultController::setNewPassword');
$routes->get('/set-password',STUDENT.'DefaultController::loadSetPasswordPage');

// my-resources
$routes->get('/my-resources/subject',STUDENT.'DefaultController::loadMyResourceSubjectPage',['filter'=>'studentAuth']);
$routes->get('/my-resources/paper',STUDENT.'DefaultController::loadPaperListPage',['filter'=>'studentAuth']);

$routes->get('/my-resources/notes/subject-list',STUDENT.'DefaultController::loadNotesSubjectListPage',['filter'=>'studentAuth']);
$routes->get('/my-resources/notes/notes-list',STUDENT.'DefaultController::loadNotesListPage',['filter'=>'studentAuth']);

// free
$routes->get('/my-resources/paper/(:any)',STUDENT.'DefaultController::loadPaperListPage/$1',['filter'=>'studentAuth']);
$routes->get('/my-resources/notes/notes-list/(:any)',STUDENT.'DefaultController::loadNotesListPage/$1',['filter'=>'studentAuth']);
$routes->get('/my-resources/notes/subject-list/(:any)',STUDENT.'DefaultController::loadNotesSubjectListPage/$1',['filter'=>'studentAuth']);
$routes->get('/my-resources/subject/(:any)',STUDENT.'DefaultController::loadMyResourceSubjectPage/$1',['filter'=>'studentAuth']);



$routes->get('/my-resources/amendment/subject-list',STUDENT.'DefaultController::loadAmendmentSubjectList',['filter'=>'studentAuth']);
$routes->get('/amendment/amendment-list',STUDENT.'DefaultController::loadAmendmentList',['filter'=>'studentAuth']);

$routes->get('/my-resources/qbank/subject-list',STUDENT.'DefaultController::loadQbankSubjectList',['filter'=>'studentAuth']);
$routes->get('/qbank/qbank-list',STUDENT.'DefaultController::loadQbankList',['filter'=>'studentAuth']);

$routes->get('/invoice',STUDENT.'DefaultController::loadInvoicePage',['filter'=>'studentAuth']);
$routes->get('/profile',STUDENT.'DefaultController::loadProfilePage',['filter'=>'studentAuth']);
$routes->get('/download-invoice',STUDENT.'DefaultController::downloadInvoice',['filter'=>'studentAuth']);

// my resourse paper
$routes->get('/fetch-assignment-status',STUDENT.'DefaultController::fetchAssignmentStatus',['filter'=>'studentAuth']);
$routes->post('/upload/assignment-file',STUDENT.'DefaultController::uploadAssignmentFile',['filter'=>'studentAuth']);

$routes->post('/newsletter/add-newsletter',STUDENT.'DefaultController::addNewsLetter');

// student profile
$routes->post('/update/user-profile',STUDENT.'DefaultController::updateUserProfile',['filter'=>'studentAuth']);


// ADMIN
$routes->get('/login', ADMIN.'LoginController::loadLoginPage');
$routes->post('/verify/adminlogin', ADMIN.'LoginController::verifyAdminLogin');
$routes->get('/admin/logout',ADMIN.'LoginController::logoutAdmin');
$routes->get('/page/access-denied',ADMIN.'LoginController::loadAccessDenied');
$routes->get('/admin_panel',ADMIN.'DashboardController::loadAdminPanel',['filter'=>'authGuard']);
// Category 
$routes->get('/admin/add-category',ADMIN.'DashboardController::loadAddCategoryPage',['filter'=>'authGuard']);
$routes->get('/admin/add-category/(:any)',ADMIN.'DashboardController::loadAddCategoryPage/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-category',ADMIN.'DashboardController::addCategory',['filter'=>'authGuard']);
$routes->get('/admin/category-list',ADMIN.'DashboardController::loadCategoryListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-category-list',ADMIN.'DashboardController::fetchCatgoryListPage',['filter'=>'authGuard']);
$routes->post('/admin/category-status',ADMIN.'DashboardController::updateCategoryStatus',['filter'=>'authGuard']);
$routes->post('/admin/delete-category',ADMIN.'DashboardController::deleteCategory',['filter'=>'authGuard']);



// level routes
$routes->get('/admin/add-level',ADMIN.'DashboardController::loadAddLevelPage',['filter'=>'authGuard']);
$routes->get('/admin/add-level/(:any)',ADMIN.'DashboardController::loadAddLevelPage/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-level',ADMIN.'DashboardController::addLevel',['filter'=>'authGuard']);
$routes->get('/admin/level-list',ADMIN.'DashboardController::loadLevelListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-level-list',ADMIN.'DashboardController::fetchLevelListPage');
// type routes
$routes->get('/admin/add-type',ADMIN.'DashboardController::loadAddTypePage',['filter'=>'authGuard']);
$routes->get('/admin/add-type/(:any)',ADMIN.'DashboardController::loadAddTypePage/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-type',ADMIN.'DashboardController::addType',['filter'=>'authGuard']);
$routes->get('/admin/type-list',ADMIN.'DashboardController::loadTypeListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-type-list',ADMIN.'DashboardController::fetchTypeListPage',['filter'=>'authGuard']);

// subject routes
$routes->get('/admin/add-subject',ADMIN.'DashboardController::loadAddSubjectPage',['filter'=>'authGuard']);
$routes->get('/admin/add-subject/(:any)',ADMIN.'DashboardController::loadAddSubjectPage/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-subject',ADMIN.'DashboardController::addSubject',['filter'=>'authGuard']);
$routes->post('/admin/get-type-list',ADMIN.'DashboardController::getTypeInfo',['filter'=>'authGuard']);
$routes->get('/admin/subject-list',ADMIN.'DashboardController::loadSubjectListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-subject-list',ADMIN.'DashboardController::fetchSubjectListPage',['filter'=>'authGuard']);

// paper routes
$routes->get('/admin/add-paper',ADMIN.'DashboardController::loadAddPaperPage',['filter'=>'authGuard']);
$routes->get('/admin/add-paper/(:any)',ADMIN.'DashboardController::loadAddPaperPage/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-paper',ADMIN.'DashboardController::addPaper',['filter'=>'authGuard']);
$routes->post('/admin/get-subject-list',ADMIN.'DashboardController::getSubjectInfo',['filter'=>'authGuard']);
$routes->post('/admin/update-paper-status',ADMIN.'DashboardController::updatePaperStatus',['filter'=>'authGuard']);
$routes->post('/admin/delete-paper',ADMIN.'DashboardController::deletePaper',['filter'=>'authGuard']);
$routes->get('/admin/paper-list',ADMIN.'DashboardController::loadPaperListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-paper',ADMIN.'DashboardController::fetchedPaperList',['filter'=>'authGuard']);

// promocodes
$routes->get('/admin/add-promocode',ADMIN.'DashboardController::loadAddPromocodePage',['filter'=>'authGuard']);
$routes->get('/admin/add-promocode/(:any)',ADMIN.'DashboardController::loadAddPromocodePage/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-promocode',ADMIN.'DashboardController::addPromoCode',['filter'=>'authGuard']);
$routes->get('/admin/promocode-list',ADMIN.'DashboardController::loadPromocodeListPage',['filter'=>'authGuard']);
$routes->post('/admin/delete-promocode',ADMIN.'DashboardController::deletePromocode',['filter'=>'authGuard']);
$routes->post('/admin/fetch-prmocodes',ADMIN.'DashboardController::fetchPromocodes',['filter'=>'authGuard']);

// notice
$routes->get('/admin/add-notice',ADMIN.'DashboardController::loadAddNotice',['filter'=>'authGuard']);
$routes->get('/admin/add-notice/(:any)',ADMIN.'DashboardController::loadAddNotice/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-notice',ADMIN.'DashboardController::addNotice',['filter'=>'authGuard']);
$routes->get('/admin/notice-list',ADMIN.'DashboardController::loadNoticeListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-notice-list',ADMIN.'DashboardController::fetchNoticeList',['filter'=>'authGuard']);
$routes->post('/admin/delete-notice',ADMIN.'DashboardController::deleteNotice',['filter'=>'authGuard']);

// student /admin
$routes->get('/admin/student-list',ADMIN.'DashboardController::loadStudentListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-student-list',ADMIN.'DashboardController::fetchStudentList',['filter'=>'authGuard']);
$routes->post('/admin/change-block-status',ADMIN.'DashboardController::changeStudentBlockStatus',['filter'=>'authGuard']);
$routes->get('/admin/student-export',ADMIN.'DashboardController::exportStudentDetails',['filter'=>'authGuard']);
$routes->post('/admin/subject-list',ADMIN.'DashboardController::getSubjectList',['filter'=>'authGuard']);
$routes->post('/admin/change-subject-visibility',ADMIN.'DashboardController::changeSubVisibility',['filter'=>'authGuard']);

$routes->post('/admin/fetch-purchase-history',ADMIN.'DashboardController::fetchPurchaseHistory',['filter'=>'authGuard']);
$routes->post('/admin/fetch-active-course',ADMIN.'DashboardController::fetchActiveCourse',['filter'=>'authGuard']);
$routes->post('/admin/fetch-de-active-course',ADMIN.'DashboardController::fetchDeactiveCourse',['filter'=>'authGuard']);
$routes->post('/admin/update-cart-items-status',ADMIN.'DashboardController::updateCartItemsStatus',['filter'=>'authGuard']);

// assignment
$routes->get('/admin/assignment-level-list',ADMIN.'DashboardController::loadAssignmentLevelListPage');
$routes->post('/admin/fetch-assignment-level-list',ADMIN.'DashboardController::fetchAssignmentLevelList');

$routes->get('/admin/assignment-list/(:any)',ADMIN.'DashboardController::loadAssignmentListPage/$1');
$routes->post('/admin/fetch-assignment-list',ADMIN.'DashboardController::fetchAssignmentList');
$routes->get('/admin/upload-recheck/export',ADMIN.'DashboardController::exportPaperDetails');
$routes->post('/admin/upload-rechek/papers',ADMIN.'DashboardController::updateRecheckAssignment');

// examinar
$routes->get('/admin/add-examinar',ADMIN.'DashboardController::loadAddExaminarPage',['filter'=>'authGuard']);
$routes->get('/admin/add-examinar/(:any)',ADMIN.'DashboardController::loadAddExaminarPage/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-examinar',ADMIN.'DashboardController::addExaminar',['filter'=>'authGuard']);
$routes->get('/admin/examinar-list',ADMIN.'DashboardController::loadExaminarListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-examinar-list',ADMIN.'DashboardController::getExaminarList',['filter'=>'authGuard']);
$routes->post('/admin/examinar-status-change',ADMIN.'DashboardController::changeExaminarBlockedStatus',['filter'=>'authGuard']);


$routes->get('admin/examinar/assign-examinar/(:any)',ADMIN.'DashboardController::loadAssignExaminar/$1',['filter'=>'authGuard']);
$routes->post('admin/examinar/assign-examinar',ADMIN.'DashboardController::assignExaminar',['filter'=>'authGuard']);

$routes->get('admin/examinar/assign-subjects/(:any)',ADMIN.'DashboardController::loadAssignSubjects/$1',['filter'=>'authGuard']);

$routes->post('admin/fetch-assign-sub-list',ADMIN.'DashboardController::fetchAssignSubList',['filter'=>'authGuard']);
$routes->post('admin/delete-assign-subject',ADMIN.'DashboardController::deleteAssignSubject',['filter'=>'authGuard']);

// newsletter
$routes->get('admin/newsletter-list',ADMIN.'DashboardController::loadNewsletterList',['filter'=>'authGuard']);
$routes->post('/admin/fetch-newsletter-list',ADMIN.'DashboardController::fetchNewsLetter',['filter'=>'authGuard']);
$routes->post('/admin/newsletter/active',ADMIN.'DashboardController::changeNewsletterStatus',['filter'=>'authGuard']);
$routes->post('/admin/send-newsletter',ADMIN.'DashboardController::sendnewsLetter',['filter'=>'authGuard']);

// blog
$routes->get('/admin/add-blog',ADMIN.'DashboardController::loadAddBlogPage',['filter'=>'authGuard']);
$routes->get('/admin/add-blog/(:any)',ADMIN.'DashboardController::loadAddBlogPage/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-blog',ADMIN.'DashboardController::addBlogDetails',['filter'=>'authGuard']);
$routes->get('/admin/blog-list',ADMIN.'DashboardController::loadBlogListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-blog-list',ADMIN.'DashboardController::fetchBlogList',['filter'=>'authGuard']);
$routes->post('/admin/delete-blog',ADMIN.'DashboardController::deleteBlogItem',['filter'=>'authGuard']);
$routes->post('/admin/blog-status',ADMIN.'DashboardController::changeBlogStatus',['filter'=>'authGuard']);

// notes
$routes->get('/admin/add-notes',ADMIN.'DashboardController::loadAddNotesPage',['filter'=>'authGuard']);
$routes->get('/admin/add-notes/(:any)',ADMIN.'DashboardController::loadAddNotesPage/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-notes',ADMIN.'DashboardController::addNotes',['filter'=>'authGuard']);
$routes->get('/admin/notes-list',ADMIN.'DashboardController::loadNoteListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-notes',ADMIN.'DashboardController::fetchNotesDetails',['filter'=>'authGuard']);
$routes->post('/admin/notes/status-update',ADMIN.'DashboardController::statusUpdate',['filter'=>'authGuard']);
$routes->post('/admin/notes/delete',ADMIN.'DashboardController::deleteNotes',['filter'=>'authGuard']);

// amendment
$routes->get('/admin/add-amendment',ADMIN.'DashboardController::loadAddAmendmentPage',['filter'=>'authGuard']);
$routes->get('/admin/add-amendment/(:any)',ADMIN.'DashboardController::loadAddAmendmentPage/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-amendment',ADMIN.'DashboardController::addAmendment',['filter'=>'authGuard']);
$routes->get('/admin/amendment-list',ADMIN.'DashboardController::loadAmendmentListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-amendment',ADMIN.'DashboardController::fetchAmendmentList',['filter'=>'authGuard']);
$routes->post('/admin/amendment-status',ADMIN.'DashboardController::updateAmendmentStatus',['filter'=>'authGuard']);
$routes->post('/admin/delete-amendment',ADMIN.'DashboardController::deleteAmendment',['filter'=>'authGuard']);

// 	questionbank
$routes->get('/admin/add-qbank',ADMIN.'DashboardController::loadAddQbankPage',['filter'=>'authGuard']);
$routes->get('/admin/add-qbank/(:any)',ADMIN.'DashboardController::loadAddQbankPage/$1',['filter'=>'authGuard']);
$routes->post('/admin/add-qbank',ADMIN.'DashboardController::addQbank',['filter'=>'authGuard']);
$routes->get('/admin/qbank-list',ADMIN.'DashboardController::loadQbankListPage',['filter'=>'authGuard']);
$routes->post('/admin/fetch-qbank',ADMIN.'DashboardController::fetchQbankList',['filter'=>'authGuard']);
$routes->post('/admin/qbank-status',ADMIN.'DashboardController::updateQbankStatus',['filter'=>'authGuard']);
$routes->post('/admin/delete-qbank',ADMIN.'DashboardController::deleteQbank',['filter'=>'authGuard']);

// examinar routes
 $routes->post('/verify/examinarlogin', ADMIN.'LoginController::verifyEaxminarLogin');

// sales
$routes->get('/admin/view-sales',ADMIN.'DashboardController::loadViewSales',['filter'=>'authGuard']);
$routes->post('/admin/get-sales',ADMIN.'DashboardController::fetchSales',['filter'=>'authGuard']);

// validity control
$routes->get('/admin/control-validity',ADMIN.'DashboardController::loadControlValidity',['filter'=>'authGuard']);
$routes->post('/admin/close-validity',ADMIN.'DashboardController::closeValidity',['filter'=>'authGuard']);

// change-password
$routes->get('/admin/change-password',ADMIN.'DashboardController::loadChangePasswordPage',['filter'=>'authGuard']);
$routes->post('/admin/change-password',ADMIN.'DashboardController::changePassword',['filter'=>'authGuard']);