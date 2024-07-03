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
$routes->get('/dashboard', STUDENT.'DefaultController::loadDashboardPage',['filters'=>'studentAuth']);
$routes->post('/add-to-cart', STUDENT.'DefaultController::addToCartItem');
$routes->get('/fetch-active-cartitems', STUDENT.'DefaultController::getCartItemsArray',['filters'=>'studentAuth']);
$routes->post('/remove-cart-items', STUDENT.'DefaultController::removeCartItems',['filters'=>'studentAuth']);
$routes->post('/checkout-cart-items', STUDENT.'DefaultController::checkoutPayments',['filters'=>'studentAuth']);
$routes->post('/apply-promocode',STUDENT.'DefaultController::applyPromocode',['filters'=>'studentAuth']);
$routes->post('/promo/remove-promocode',STUDENT.'DefaultController::removePromocode',['filters'=>'studentAuth']);

$routes->get('/purchase-status',STUDENT.'DefaultController::purchaseStatus',['filters'=>'studentAuth']);
$routes->get('/logout',STUDENT.'DefaultController::logOutUser',['filters'=>'studentAuth']);
$routes->post('/fetch-level-list',STUDENT.'DefaultController::fetchLevelListInfo',['filters'=>'studentAuth']);
$routes->get('/blog',STUDENT.'DefaultController::displayBlogDetails',['filters'=>'studentAuth']);
$routes->get('/blog-list',STUDENT.'DefaultController::loadBlogListPage',['filters'=>'studentAuth']);

$routes->get('/terms-and-condition',STUDENT.'DefaultController::loadTermsAndConditionPage');
$routes->get('/cancel-and-refund',STUDENT.'DefaultController::loadCancelAndRefundPage');
$routes->get('/privacy-policy',STUDENT.'DefaultController::loadPrivacyPolicy');
$routes->get('/shipping-and-dlivery',STUDENT.'DefaultController::loadShippingDelivery');
$routes->get('/about-us',STUDENT.'DefaultController::loadAboutUs');
$routes->get('/disclaimer',STUDENT.'DefaultController::loadDisclaimer');

// my-resources
$routes->get('/my-resources/subject',STUDENT.'DefaultController::loadMyResourceSubjectPage',['filters'=>'studentAuth']);
$routes->get('/my-resources/paper',STUDENT.'DefaultController::loadPaperListPage',['filters'=>'studentAuth']);
$routes->get('/my-resources/notes/subject-list',STUDENT.'DefaultController::loadNotesSubjectListPage',['filters'=>'studentAuth']);
$routes->get('/my-resources/notes/notes-list',STUDENT.'DefaultController::loadNotesListPage',['filters'=>'studentAuth']);
$routes->get('/my-resources/amendment/subject-list',STUDENT.'DefaultController::loadAmendmentSubjectList',['filters'=>'studentAuth']);
$routes->get('/amendment/amendment-list',STUDENT.'DefaultController::loadAmendmentList',['filters'=>'studentAuth']);

$routes->get('/my-resources/qbank/subject-list',STUDENT.'DefaultController::loadQbankSubjectList',['filters'=>'studentAuth']);
$routes->get('/qbank/qbank-list',STUDENT.'DefaultController::loadQbankList',['filters'=>'studentAuth']);

$routes->get('/invoice',STUDENT.'DefaultController::loadInvoicePage',['filters'=>'studentAuth']);
$routes->get('/download-invoice',STUDENT.'DefaultController::downloadInvoice',['filters'=>'studentAuth']);
// my resourse paper
$routes->get('/fetch-assignment-status',STUDENT.'DefaultController::fetchAssignmentStatus',['filters'=>'studentAuth']);
$routes->post('/upload/assignment-file',STUDENT.'DefaultController::uploadAssignmentFile',['filters'=>'studentAuth']);

$routes->post('/newsletter/add-newsletter',STUDENT.'DefaultController::addNewsLetter');


// ADMIN
$routes->get('/login', ADMIN.'LoginController::loadLoginPage');
$routes->post('/verify/adminlogin', ADMIN.'LoginController::verifyAdminLogin');
$routes->get('/admin/logout',ADMIN.'LoginController::logoutAdmin');
$routes->get('/page/access-denied',ADMIN.'LoginController::loadAccessDenied');
$routes->get('/admin_panel',ADMIN.'DashboardController::loadAdminPanel',['filters'=>'authGuard']);
// Category 
$routes->get('/admin/add-category',ADMIN.'DashboardController::loadAddCategoryPage',['filters'=>'authGuard']);
$routes->get('/admin/add-category/(:any)',ADMIN.'DashboardController::loadAddCategoryPage/$1',['filters'=>'authGuard']);
$routes->post('/admin/add-category',ADMIN.'DashboardController::addCategory',['filters'=>'authGuard']);
$routes->get('/admin/category-list',ADMIN.'DashboardController::loadCategoryListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-category-list',ADMIN.'DashboardController::fetchCatgoryListPage',['filters'=>'authGuard']);
$routes->post('/admin/category-status',ADMIN.'DashboardController::updateCategoryStatus',['filters'=>'authGuard']);
$routes->post('/admin/delete-category',ADMIN.'DashboardController::deleteCategory',['filters'=>'authGuard']);



// level routes
$routes->get('/admin/add-level',ADMIN.'DashboardController::loadAddLevelPage',['filters'=>'authGuard']);
$routes->get('/admin/add-level/(:any)',ADMIN.'DashboardController::loadAddLevelPage/$1',['filters'=>'authGuard']);
$routes->post('/admin/add-level',ADMIN.'DashboardController::addLevel',['filters'=>'authGuard']);
$routes->get('/admin/level-list',ADMIN.'DashboardController::loadLevelListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-level-list',ADMIN.'DashboardController::fetchLevelListPage',['filters'=>'authGuard']);
// type routes
$routes->get('/admin/add-type',ADMIN.'DashboardController::loadAddTypePage',['filters'=>'authGuard']);
$routes->get('/admin/add-type/(:any)',ADMIN.'DashboardController::loadAddTypePage/$1',['filters'=>'authGuard']);
$routes->post('/admin/add-type',ADMIN.'DashboardController::addType',['filters'=>'authGuard']);
$routes->get('/admin/type-list',ADMIN.'DashboardController::loadTypeListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-type-list',ADMIN.'DashboardController::fetchTypeListPage',['filters'=>'authGuard']);

// subject routes
$routes->get('/admin/add-subject',ADMIN.'DashboardController::loadAddSubjectPage',['filters'=>'authGuard'],['filters'=>'authGuard']);
$routes->get('/admin/add-subject/(:any)',ADMIN.'DashboardController::loadAddSubjectPage/$1',['filters'=>'authGuard'],['filters'=>'authGuard']);
$routes->post('/admin/add-subject',ADMIN.'DashboardController::addSubject',['filters'=>'authGuard'],['filters'=>'authGuard']);
$routes->post('/admin/get-type-list',ADMIN.'DashboardController::getTypeInfo',['filters'=>'authGuard'],['filters'=>'authGuard']);
$routes->get('/admin/subject-list',ADMIN.'DashboardController::loadSubjectListPage',['filters'=>'authGuard'],['filters'=>'authGuard']);
$routes->post('/admin/fetch-subject-list',ADMIN.'DashboardController::fetchSubjectListPage',['filters'=>'authGuard'],['filters'=>'authGuard']);

// paper routes
$routes->get('/admin/add-paper',ADMIN.'DashboardController::loadAddPaperPage',['filters'=>'authGuard']);
$routes->get('/admin/add-paper/(:any)',ADMIN.'DashboardController::loadAddPaperPage/$1',['filters'=>'authGuard']);
$routes->post('/admin/add-paper',ADMIN.'DashboardController::addPaper',['filters'=>'authGuard']);
$routes->post('/admin/get-subject-list',ADMIN.'DashboardController::getSubjectInfo',['filters'=>'authGuard']);
$routes->post('/admin/update-paper-status',ADMIN.'DashboardController::updatePaperStatus',['filters'=>'authGuard']);
$routes->post('/admin/delete-paper',ADMIN.'DashboardController::deletePaper',['filters'=>'authGuard']);
$routes->get('/admin/paper-list',ADMIN.'DashboardController::loadPaperListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-paper',ADMIN.'DashboardController::fetchedPaperList',['filters'=>'authGuard']);

// promocodes
$routes->get('/admin/add-promocode',ADMIN.'DashboardController::loadAddPromocodePage',['filters'=>'authGuard']);
$routes->get('/admin/add-promocode/(:any)',ADMIN.'DashboardController::loadAddPromocodePage/$1',['filters'=>'authGuard']);
$routes->post('/admin/add-promocode',ADMIN.'DashboardController::addPromoCode',['filters'=>'authGuard']);
$routes->get('/admin/promocode-list',ADMIN.'DashboardController::loadPromocodeListPage',['filters'=>'authGuard']);
$routes->post('/admin/delete-promocode',ADMIN.'DashboardController::deletePromocode',['filters'=>'authGuard']);
$routes->post('/admin/fetch-prmocodes',ADMIN.'DashboardController::fetchPromocodes',['filters'=>'authGuard']);

// notice
$routes->get('/admin/add-notice',ADMIN.'DashboardController::loadAddNotice',['filters'=>'authGuard']);
$routes->get('/admin/add-notice/(:any)',ADMIN.'DashboardController::loadAddNotice/$1',['filters'=>'authGuard']);
$routes->post('/admin/add-notice',ADMIN.'DashboardController::addNotice',['filters'=>'authGuard']);
$routes->get('/admin/notice-list',ADMIN.'DashboardController::loadNoticeListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-notice-list',ADMIN.'DashboardController::fetchNoticeList',['filters'=>'authGuard']);
$routes->post('/admin/delete-notice',ADMIN.'DashboardController::deleteNotice',['filters'=>'authGuard']);

// student /admin
$routes->get('/admin/student-list',ADMIN.'DashboardController::loadStudentListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-student-list',ADMIN.'DashboardController::fetchStudentList',['filters'=>'authGuard']);
$routes->post('/admin/change-block-status',ADMIN.'DashboardController::changeStudentBlockStatus',['filters'=>'authGuard']);
$routes->get('/admin/student-export',ADMIN.'DashboardController::exportStudentDetails',['filters'=>'authGuard']);
$routes->post('/admin/subject-list',ADMIN.'DashboardController::getSubjectList',['filters'=>'authGuard']);
$routes->post('/admin/change-subject-visibility',ADMIN.'DashboardController::changeSubVisibility',['filters'=>'authGuard']);

$routes->post('/admin/fetch-purchase-history',ADMIN.'DashboardController::fetchPurchaseHistory',['filters'=>'authGuard']);

// assignment
$routes->get('/admin/assignment-level-list',ADMIN.'DashboardController::loadAssignmentLevelListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-assignment-level-list',ADMIN.'DashboardController::fetchAssignmentLevelList',['filters'=>'authGuard']);

$routes->get('/admin/assignment-list/(:any)',ADMIN.'DashboardController::loadAssignmentListPage/$1',['filters'=>'authGuard']);
$routes->post('/admin/fetch-assignment-list',ADMIN.'DashboardController::fetchAssignmentList',['filters'=>'authGuard']);
$routes->get('/admin/upload-recheck/export',ADMIN.'DashboardController::exportPaperDetails',['filters'=>'authGuard']);
$routes->post('/admin/upload-rechek/papers',ADMIN.'DashboardController::updateRecheckAssignment',['filters'=>'authGuard']);

// examinar
$routes->get('/admin/add-examinar',ADMIN.'DashboardController::loadAddExaminarPage',['filters'=>'authGuard']);
$routes->get('/admin/add-examinar/(:any)',ADMIN.'DashboardController::loadAddExaminarPage/$1',['filters'=>'authGuard']);
$routes->post('/admin/add-examinar',ADMIN.'DashboardController::addExaminar',['filters'=>'authGuard']);
$routes->get('/admin/examinar-list',ADMIN.'DashboardController::loadExaminarListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-examinar-list',ADMIN.'DashboardController::getExaminarList',['filters'=>'authGuard']);
$routes->post('/admin/examinar-status-change',ADMIN.'DashboardController::changeExaminarBlockedStatus',['filters'=>'authGuard']);


$routes->get('admin/examinar/assign-examinar/(:any)',ADMIN.'DashboardController::loadAssignExaminar/$1',['filters'=>'authGuard']);
$routes->post('admin/examinar/assign-examinar',ADMIN.'DashboardController::assignExaminar',['filters'=>'authGuard']);

$routes->get('admin/examinar/assign-subjects/(:any)',ADMIN.'DashboardController::loadAssignSubjects/$1',['filters'=>'authGuard']);

$routes->post('admin/fetch-assign-sub-list',ADMIN.'DashboardController::fetchAssignSubList',['filters'=>'authGuard']);
$routes->post('admin/delete-assign-subject',ADMIN.'DashboardController::deleteAssignSubject',['filters'=>'authGuard']);

// newsletter
$routes->get('admin/newsletter-list',ADMIN.'DashboardController::loadNewsletterList',['filters'=>'authGuard']);
$routes->post('/admin/fetch-newsletter-list',ADMIN.'DashboardController::fetchNewsLetter',['filters'=>'authGuard']);
$routes->post('/admin/newsletter/active',ADMIN.'DashboardController::changeNewsletterStatus',['filters'=>'authGuard']);
$routes->post('/admin/send-newsletter',ADMIN.'DashboardController::sendnewsLetter',['filters'=>'authGuard']);

// blog
$routes->get('/admin/add-blog',ADMIN.'DashboardController::loadAddBlogPage',['filters'=>'authGuard']);
$routes->get('/admin/add-blog/(:any)',ADMIN.'DashboardController::loadAddBlogPage/$1',['filters'=>'authGuard']);
$routes->post('/admin/add-blog',ADMIN.'DashboardController::addBlogDetails',['filters'=>'authGuard']);
$routes->get('/admin/blog-list',ADMIN.'DashboardController::loadBlogListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-blog-list',ADMIN.'DashboardController::fetchBlogList',['filters'=>'authGuard']);
$routes->post('/admin/delete-blog',ADMIN.'DashboardController::deleteBlogItem',['filters'=>'authGuard']);
$routes->post('/admin/blog-status',ADMIN.'DashboardController::changeBlogStatus',['filters'=>'authGuard']);

// notes
$routes->get('/admin/add-notes',ADMIN.'DashboardController::loadAddNotesPage',['filters'=>'authGuard']);
$routes->get('/admin/add-notes/(:any)',ADMIN.'DashboardController::loadAddNotesPage/$1',['filters'=>'authGuard']);
$routes->post('/admin/add-notes',ADMIN.'DashboardController::addNotes',['filters'=>'authGuard']);
$routes->get('/admin/notes-list',ADMIN.'DashboardController::loadNoteListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-notes',ADMIN.'DashboardController::fetchNotesDetails',['filters'=>'authGuard']);
$routes->post('/admin/notes/status-update',ADMIN.'DashboardController::statusUpdate',['filters'=>'authGuard']);
$routes->post('/admin/notes/delete',ADMIN.'DashboardController::deleteNotes',['filters'=>'authGuard']);

// amendment
$routes->get('/admin/add-amendment',ADMIN.'DashboardController::loadAddAmendmentPage',['filters'=>'authGuard']);
$routes->get('/admin/add-amendment/(:any)',ADMIN.'DashboardController::loadAddAmendmentPage/$1',['filters'=>'authGuard']);
$routes->post('/admin/add-amendment',ADMIN.'DashboardController::addAmendment',['filters'=>'authGuard']);
$routes->get('/admin/amendment-list',ADMIN.'DashboardController::loadAmendmentListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-amendment',ADMIN.'DashboardController::fetchAmendmentList',['filters'=>'authGuard']);
$routes->post('/admin/amendment-status',ADMIN.'DashboardController::updateAmendmentStatus',['filters'=>'authGuard']);
$routes->post('/admin/delete-amendment',ADMIN.'DashboardController::deleteAmendment',['filters'=>'authGuard']);

// 	questionbank
$routes->get('/admin/add-qbank',ADMIN.'DashboardController::loadAddQbankPage',['filters'=>'authGuard']);
$routes->get('/admin/add-qbank/(:any)',ADMIN.'DashboardController::loadAddQbankPage/$1',['filters'=>'authGuard']);
$routes->post('/admin/add-qbank',ADMIN.'DashboardController::addQbank',['filters'=>'authGuard']);
$routes->get('/admin/qbank-list',ADMIN.'DashboardController::loadQbankListPage',['filters'=>'authGuard']);
$routes->post('/admin/fetch-qbank',ADMIN.'DashboardController::fetchQbankList',['filters'=>'authGuard']);
$routes->post('/admin/qbank-status',ADMIN.'DashboardController::updateQbankStatus',['filters'=>'authGuard']);
$routes->post('/admin/delete-qbank',ADMIN.'DashboardController::deleteQbank',['filters'=>'authGuard']);

// examinar routes
 $routes->post('/verify/examinarlogin', 'LoginController::verifyEaxminarLogin',['filters'=>'authGuard']);

// sales
$routes->get('/admin/view-sales',ADMIN.'DashboardController::loadViewSales',['filters'=>'authGuard']);
$routes->post('/admin/get-sales',ADMIN.'DashboardController::fetchSales',['filters'=>'authGuard']);

// validity control

$routes->get('/admin/control-validity',ADMIN.'DashboardController::loadControlValidity',['filters'=>'authGuard']);