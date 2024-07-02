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
$routes->get('/dashboard', STUDENT.'DefaultController::loadDashboardPage');
$routes->post('/add-to-cart', STUDENT.'DefaultController::addToCartItem');
$routes->get('/fetch-active-cartitems', STUDENT.'DefaultController::getCartItemsArray');
$routes->post('/remove-cart-items', STUDENT.'DefaultController::removeCartItems');
$routes->post('/checkout-cart-items', STUDENT.'DefaultController::checkoutPayments');
$routes->post('/apply-promocode',STUDENT.'DefaultController::applyPromocode');
$routes->post('/promo/remove-promocode',STUDENT.'DefaultController::removePromocode');

$routes->get('/purchase-status',STUDENT.'DefaultController::purchaseStatus');
$routes->get('/logout',STUDENT.'DefaultController::logOutUser');
$routes->post('/fetch-level-list',STUDENT.'DefaultController::fetchLevelListInfo');
$routes->get('/blog',STUDENT.'DefaultController::displayBlogDetails');
$routes->get('/blog-list',STUDENT.'DefaultController::loadBlogListPage');

$routes->get('/terms-and-condition',STUDENT.'DefaultController::loadTermsAndConditionPage');
$routes->get('/cancel-and-refund',STUDENT.'DefaultController::loadCancelAndRefundPage');
$routes->get('/privacy-policy',STUDENT.'DefaultController::loadPrivacyPolicy');
$routes->get('/shipping-and-dlivery',STUDENT.'DefaultController::loadShippingDelivery');
$routes->get('/about-us',STUDENT.'DefaultController::loadAboutUs');
$routes->get('/disclaimer',STUDENT.'DefaultController::loadDisclaimer');

// my-resources
$routes->get('/my-resources/subject',STUDENT.'DefaultController::loadMyResourceSubjectPage');
$routes->get('/my-resources/paper',STUDENT.'DefaultController::loadPaperListPage');
$routes->get('/my-resources/notes/subject-list',STUDENT.'DefaultController::loadNotesSubjectListPage');
$routes->get('/my-resources/notes/notes-list',STUDENT.'DefaultController::loadNotesListPage');
$routes->get('/my-resources/amendment/subject-list',STUDENT.'DefaultController::loadAmendmentSubjectList');
$routes->get('/amendment/amendment-list',STUDENT.'DefaultController::loadAmendmentList');

$routes->get('/my-resources/qbank/subject-list',STUDENT.'DefaultController::loadQbankSubjectList');
$routes->get('/qbank/qbank-list',STUDENT.'DefaultController::loadQbankList');

$routes->get('/invoice',STUDENT.'DefaultController::loadInvoicePage');
$routes->get('/download-invoice',STUDENT.'DefaultController::downloadInvoice');
// my resourse paper
$routes->get('/fetch-assignment-status',STUDENT.'DefaultController::fetchAssignmentStatus');
$routes->post('/upload/assignment-file',STUDENT.'DefaultController::uploadAssignmentFile');



// ADMIN
$routes->get('/login', ADMIN.'LoginController::loadLoginPage');
$routes->post('/verify/adminlogin', ADMIN.'LoginController::verifyAdminLogin');
$routes->get('/admin/logout',ADMIN.'LoginController::logoutAdmin');
$routes->get('/page/access-denied',ADMIN.'LoginController::loadAccessDenied');
$routes->get('/admin_panel',ADMIN.'DashboardController::loadAdminPanel');
// Category 
$routes->get('/admin/add-category',ADMIN.'DashboardController::loadAddCategoryPage');
$routes->get('/admin/add-category/(:any)',ADMIN.'DashboardController::loadAddCategoryPage/$1');
$routes->post('/admin/add-category',ADMIN.'DashboardController::addCategory');
$routes->get('/admin/category-list',ADMIN.'DashboardController::loadCategoryListPage');
$routes->post('/admin/fetch-category-list',ADMIN.'DashboardController::fetchCatgoryListPage');
$routes->post('/admin/category-status',ADMIN.'DashboardController::updateCategoryStatus');
$routes->post('/admin/delete-category',ADMIN.'DashboardController::deleteCategory');



// level routes
$routes->get('/admin/add-level',ADMIN.'DashboardController::loadAddLevelPage');
$routes->get('/admin/add-level/(:any)',ADMIN.'DashboardController::loadAddLevelPage/$1');
$routes->post('/admin/add-level',ADMIN.'DashboardController::addLevel');
$routes->get('/admin/level-list',ADMIN.'DashboardController::loadLevelListPage');
$routes->post('/admin/fetch-level-list',ADMIN.'DashboardController::fetchLevelListPage');
// type routes
$routes->get('/admin/add-type',ADMIN.'DashboardController::loadAddTypePage');
$routes->get('/admin/add-type/(:any)',ADMIN.'DashboardController::loadAddTypePage/$1');
$routes->post('/admin/add-type',ADMIN.'DashboardController::addType');
$routes->get('/admin/type-list',ADMIN.'DashboardController::loadTypeListPage');
$routes->post('/admin/fetch-type-list',ADMIN.'DashboardController::fetchTypeListPage');

// subject routes
$routes->get('/admin/add-subject',ADMIN.'DashboardController::loadAddSubjectPage');
$routes->get('/admin/add-subject/(:any)',ADMIN.'DashboardController::loadAddSubjectPage/$1');
$routes->post('/admin/add-subject',ADMIN.'DashboardController::addSubject');
$routes->post('/admin/get-type-list',ADMIN.'DashboardController::getTypeInfo');
$routes->get('/admin/subject-list',ADMIN.'DashboardController::loadSubjectListPage');
$routes->post('/admin/fetch-subject-list',ADMIN.'DashboardController::fetchSubjectListPage');

// paper routes
$routes->get('/admin/add-paper',ADMIN.'DashboardController::loadAddPaperPage');
$routes->get('/admin/add-paper/(:any)',ADMIN.'DashboardController::loadAddPaperPage/$1');
$routes->post('/admin/add-paper',ADMIN.'DashboardController::addPaper');
$routes->post('/admin/get-subject-list',ADMIN.'DashboardController::getSubjectInfo');
$routes->post('/admin/update-paper-status',ADMIN.'DashboardController::updatePaperStatus');
$routes->post('/admin/delete-paper',ADMIN.'DashboardController::deletePaper');
$routes->get('/admin/paper-list',ADMIN.'DashboardController::loadPaperListPage');
$routes->post('/admin/fetch-paper',ADMIN.'DashboardController::fetchedPaperList');

// promocodes
$routes->get('/admin/add-promocode',ADMIN.'DashboardController::loadAddPromocodePage');
$routes->get('/admin/add-promocode/(:any)',ADMIN.'DashboardController::loadAddPromocodePage/$1');
$routes->post('/admin/add-promocode',ADMIN.'DashboardController::addPromoCode');
$routes->get('/admin/promocode-list',ADMIN.'DashboardController::loadPromocodeListPage');
$routes->post('/admin/delete-promocode',ADMIN.'DashboardController::deletePromocode');
$routes->post('/admin/fetch-prmocodes',ADMIN.'DashboardController::fetchPromocodes');

// notice
$routes->get('/admin/add-notice',ADMIN.'DashboardController::loadAddNotice');
$routes->get('/admin/add-notice/(:any)',ADMIN.'DashboardController::loadAddNotice/$1');
$routes->post('/admin/add-notice',ADMIN.'DashboardController::addNotice');
$routes->get('/admin/notice-list',ADMIN.'DashboardController::loadNoticeListPage');
$routes->post('/admin/fetch-notice-list',ADMIN.'DashboardController::fetchNoticeList');
$routes->post('/admin/delete-notice',ADMIN.'DashboardController::deleteNotice');

// student /admin
$routes->get('/admin/student-list',ADMIN.'DashboardController::loadStudentListPage');
$routes->post('/admin/fetch-student-list',ADMIN.'DashboardController::fetchStudentList');
$routes->post('/admin/change-block-status',ADMIN.'DashboardController::changeStudentBlockStatus');
$routes->get('/admin/student-export',ADMIN.'DashboardController::exportStudentDetails');
$routes->post('/admin/subject-list',ADMIN.'DashboardController::getSubjectList');
$routes->post('/admin/change-subject-visibility',ADMIN.'DashboardController::changeSubVisibility');

$routes->post('/admin/fetch-purchase-history',ADMIN.'DashboardController::fetchPurchaseHistory');

// assignment
$routes->get('/admin/assignment-level-list',ADMIN.'DashboardController::loadAssignmentLevelListPage');
$routes->post('/admin/fetch-assignment-level-list',ADMIN.'DashboardController::fetchAssignmentLevelList');

$routes->get('/admin/assignment-list/(:any)',ADMIN.'DashboardController::loadAssignmentListPage/$1');
$routes->post('/admin/fetch-assignment-list',ADMIN.'DashboardController::fetchAssignmentList');
$routes->get('/admin/upload-recheck/export',ADMIN.'DashboardController::exportPaperDetails');
$routes->post('/admin/upload-rechek/papers',ADMIN.'DashboardController::updateRecheckAssignment');

// examinar
$routes->get('/admin/add-examinar',ADMIN.'DashboardController::loadAddExaminarPage');
$routes->get('/admin/add-examinar/(:any)',ADMIN.'DashboardController::loadAddExaminarPage/$1');
$routes->post('/admin/add-examinar',ADMIN.'DashboardController::addExaminar');
$routes->get('/admin/examinar-list',ADMIN.'DashboardController::loadExaminarListPage');
$routes->post('/admin/fetch-examinar-list',ADMIN.'DashboardController::getExaminarList');
$routes->post('/admin/examinar-status-change',ADMIN.'DashboardController::changeExaminarBlockedStatus');


$routes->get('admin/examinar/assign-examinar/(:any)',ADMIN.'DashboardController::loadAssignExaminar/$1');
$routes->post('admin/examinar/assign-examinar',ADMIN.'DashboardController::assignExaminar');

$routes->get('admin/examinar/assign-subjects/(:any)',ADMIN.'DashboardController::loadAssignSubjects/$1');

$routes->post('admin/fetch-assign-sub-list',ADMIN.'DashboardController::fetchAssignSubList');
$routes->post('admin/delete-assign-subject',ADMIN.'DashboardController::deleteAssignSubject');

// newsletter
$routes->get('admin/newsletter-list',ADMIN.'DashboardController::loadNewsletterList');
$routes->post('/admin/fetch-newsletter-list',ADMIN.'DashboardController::fetchNewsLetter');
$routes->post('/admin/newsletter/active',ADMIN.'DashboardController::changeNewsletterStatus');
$routes->post('/admin/send-newsletter',ADMIN.'DashboardController::sendnewsLetter');

// blog
$routes->get('/admin/add-blog',ADMIN.'DashboardController::loadAddBlogPage');
$routes->get('/admin/add-blog/(:any)',ADMIN.'DashboardController::loadAddBlogPage/$1');
$routes->post('/admin/add-blog',ADMIN.'DashboardController::addBlogDetails');
$routes->get('/admin/blog-list',ADMIN.'DashboardController::loadBlogListPage');
$routes->post('/admin/fetch-blog-list',ADMIN.'DashboardController::fetchBlogList');
$routes->post('/admin/delete-blog',ADMIN.'DashboardController::deleteBlogItem');
$routes->post('/admin/blog-status',ADMIN.'DashboardController::changeBlogStatus');

// notes
$routes->get('/admin/add-notes',ADMIN.'DashboardController::loadAddNotesPage');
$routes->get('/admin/add-notes/(:any)',ADMIN.'DashboardController::loadAddNotesPage/$1');
$routes->post('/admin/add-notes',ADMIN.'DashboardController::addNotes');
$routes->get('/admin/notes-list',ADMIN.'DashboardController::loadNoteListPage');
$routes->post('/admin/fetch-notes',ADMIN.'DashboardController::fetchNotesDetails');
$routes->post('/admin/notes/status-update',ADMIN.'DashboardController::statusUpdate');
$routes->post('/admin/notes/delete',ADMIN.'DashboardController::deleteNotes');

// amendment
$routes->get('/admin/add-amendment',ADMIN.'DashboardController::loadAddAmendmentPage');
$routes->get('/admin/add-amendment/(:any)',ADMIN.'DashboardController::loadAddAmendmentPage/$1');
$routes->post('/admin/add-amendment',ADMIN.'DashboardController::addAmendment');
$routes->get('/admin/amendment-list',ADMIN.'DashboardController::loadAmendmentListPage');
$routes->post('/admin/fetch-amendment',ADMIN.'DashboardController::fetchAmendmentList');
$routes->post('/admin/amendment-status',ADMIN.'DashboardController::updateAmendmentStatus');
$routes->post('/admin/delete-amendment',ADMIN.'DashboardController::deleteAmendment');

// 	questionbank
$routes->get('/admin/add-qbank',ADMIN.'DashboardController::loadAddQbankPage');
$routes->get('/admin/add-qbank/(:any)',ADMIN.'DashboardController::loadAddQbankPage/$1');
$routes->post('/admin/add-qbank',ADMIN.'DashboardController::addQbank');
$routes->get('/admin/qbank-list',ADMIN.'DashboardController::loadQbankListPage');
$routes->post('/admin/fetch-qbank',ADMIN.'DashboardController::fetchQbankList');
$routes->post('/admin/qbank-status',ADMIN.'DashboardController::updateQbankStatus');
$routes->post('/admin/delete-qbank',ADMIN.'DashboardController::deleteQbank');

// examinar routes
 $routes->post('/verify/examinarlogin', 'LoginController::verifyEaxminarLogin');

// sales
$routes->get('/admin/view-sales',ADMIN.'DashboardController::loadViewSales');
$routes->post('/admin/get-sales',ADMIN.'DashboardController::fetchSales');

// validity control

$routes->get('/admin/control-validity',ADMIN.'DashboardController::loadControlValidity');