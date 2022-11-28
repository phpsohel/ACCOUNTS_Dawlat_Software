<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//eshop website routes 
//home page
Route::get('/eshop', 'WebsiteController@index')->name('eshop');

//category
Route::get('/eshop/category', 'WebsiteController@category')->name('eshop-category');
//product detail
Route::get('/eshop/detail/{id}', 'WebsiteController@detail')->name('eshop-detail');

//cart add
Route::post('/eshop/cart/{id}', 'WebsiteController@add_to_cart')->name('add-to-cart');
//view cart
Route::get('/eshop/cart-page', 'WebsiteController@cart_page')->name('cart-page');
// cart add from detail with quantity
Route::post('/add-cart-quantity/{id}', 'WebsiteController@add_cart_quantity')->name('add-cart-quantity');
//cart quantity update
Route::post('/cart-quantity-update/{id}', 'WebsiteController@cart_quantity_update')->name('cart-quantity-update');
//cart destroy
Route::get('/cart-destroy/{id}', 'WebsiteController@cart_destroy')->name('cart-destroy');
//cart destroy
Route::get('/cart-destroy-master/{id}', 'WebsiteController@cart_destroy_master')->name('cart-destroy-master');
//category products
Route::get('/eshop/all-categories/{id}', 'WebsiteController@category')->name('all-categories');
//category page
Route::get('/eshop/categories/', 'WebsiteController@category_page')->name('eshop-category-page');
//checkout page
Route::post('/eshop/checkout/{user_ip}', 'WebsiteController@checkout')->name('checkout');

//order place
Route::post('/place-order', 'WebsiteController@place_order')->name('place-order');

//confirmation
Route::get('/eshop/confirmation/', 'WebsiteController@confirmation')->name('confirmation');
//contact
Route::get('/eshop/contact/', 'WebsiteController@contact')->name('contact');
Route::post('/post-contact', 'WebsiteController@post_contact')->name('post-contact');
//login
Route::get('/eshop/login/', 'WebsiteController@login')->name('eshop-login');
Route::post('/eshop/login/', 'LoginController@login')->name('eshop-post-login');
//logout
Route::post('/eshop/logout', 'WebsiteController@logout')->name('customer-logout');
//register
Route::post('/eshop/register/', 'RegisterController@register')->name('eshop-post-register');
//brands
Route::get('/eshop/brands/{id}/{category_id}', 'WebsiteController@brands')->name('eshop-brands');
Route::get('/eshop/brands-product/{id}/', 'WebsiteController@brands_product')->name('brands-product');

//offer
Route::get('/eshop/offer/', 'WebsiteController@offer')->name('eshop-offer');
//search
Route::post('/eshop/search/', 'WebsiteController@search')->name('search');
//newsletter
Route::post('/eshop/newsletter/', 'WebsiteController@newsletter')->name('newsletter');

//cart clear
Route::get('/eshop/clear-cart/', 'WebsiteController@clear_cart')->name('clear-cart');
//blog post
Route::get('/eshop/blog-post/{id}/', 'WebsiteController@blog_post')->name('blog-post');
Route::get('/eshop/blogs/', 'WebsiteController@blogs')->name('eshop-blogs');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
	Route::get('/dashboard', 'HomeController@dashboard');
	//expire date
	Route::get('/expire', 'HomeController@expire')->name('expire-date');

	//profile
	Route::get('/eshop/profile/', 'WebsiteController@profile')->name('eshop-profile');
	Route::get('/edit-profile/{id}', 'WebsiteController@edit_profile')->name('edit-profile');
	Route::post('/update-profile/', 'WebsiteController@update_profile')->name('update-profile');
	Route::post('/update-password/', 'WebsiteController@update_password')->name('update-password');
	Route::get('/eshop/orders/', 'WebsiteController@orders')->name('orders');
});

Route::group(['middleware' => ['auth', 'active']], function() {

	

	Route::get('/', 'HomeController@index');
	Route::get('/dashboard-filter/{start_date}/{end_date}', 'HomeController@dashboardFilter');

	Route::get('language_switch/{locale}', 'LanguageController@switchLanguage');

	Route::get('role/permission/{id}', 'RoleController@permission')->name('role.permission');
	Route::post('role/set_permission', 'RoleController@setPermission')->name('role.setPermission');
	Route::resource('role', 'RoleController');

	Route::post('importunit', 'UnitController@importUnit')->name('unit.import');
	Route::post('unit/deletebyselection', 'UnitController@deleteBySelection');
	Route::get('unit/lims_unit_search', 'UnitController@limsUnitSearch')->name('unit.search');
	Route::resource('unit', 'UnitController');

	Route::post('category/import', 'CategoryController@import')->name('category.import');
	Route::post('category/deletebyselection', 'CategoryController@deleteBySelection');
	Route::post('category/category-data', 'CategoryController@categoryData');
	Route::resource('category', 'CategoryController');

	Route::post('importbrand', 'BrandController@importBrand')->name('brand.import');
	Route::post('brand/deletebyselection', 'BrandController@deleteBySelection');
	Route::get('brand/lims_brand_search', 'BrandController@limsBrandSearch')->name('brand.search');
	Route::resource('brand', 'BrandController');

	Route::post('importsupplier', 'SupplierController@importSupplier')->name('supplier.import');
	Route::post('supplier/deletebyselection', 'SupplierController@deleteBySelection');
	Route::get('supplier/lims_supplier_search', 'SupplierController@limsSupplierSearch')->name('supplier.search');
	Route::resource('supplier', 'SupplierController');

	Route::post('importwarehouse', 'WarehouseController@importWarehouse')->name('warehouse.import');
	Route::post('warehouse/deletebyselection', 'WarehouseController@deleteBySelection');
	Route::get('warehouse/lims_warehouse_search', 'WarehouseController@limsWarehouseSearch')->name('warehouse.search');
	Route::resource('warehouse', 'WarehouseController');

	Route::post('importtax', 'TaxController@importTax')->name('tax.import');
	Route::post('tax/deletebyselection', 'TaxController@deleteBySelection');
	Route::get('tax/lims_tax_search', 'TaxController@limsTaxSearch')->name('tax.search');
	Route::resource('tax', 'TaxController');

	//color
	Route::get('add-color', 'ColorController@add_color')->name('add-color');
	Route::post('save-color', 'ColorController@save_color')->name('save-color');
	Route::get('edit-color/{id}', 'ColorController@edit_color')->name('edit-color');
	Route::post('update-color', 'ColorController@update_color')->name('update-color');
	Route::get('delete-color/{id}', 'ColorController@delete_color')->name('delete-color');

	//product detail
	Route::get('product-detail/{id}', 'ProductController@product_detail')->name('product-detail');

	//Route::get('products/getbarcode', 'ProductController@getBarcode');
	Route::post('products/product-data', 'ProductController@productData');
	Route::get('products/gencode', 'ProductController@generateCode');
	Route::get('products/search', 'ProductController@search');
	Route::get('products/saleunit/{id}', 'ProductController@saleUnit');
	Route::get('products/getdata/{id}', 'ProductController@getData');
	Route::get('products/product_warehouse/{id}', 'ProductController@productWarehouseData');
	Route::post('importproduct', 'ProductController@importProduct')->name('product.import');
	Route::post('exportproduct', 'ProductController@exportProduct')->name('product.export');
	Route::get('products/print_barcode','ProductController@printBarcode')->name('product.printBarcode');
	
	Route::get('products/lims_product_search', 'ProductController@limsProductSearch')->name('product.search');
	Route::post('products/deletebyselection', 'ProductController@deleteBySelection');
	Route::post('products/update', 'ProductController@updateProduct');
	Route::resource('products', 'ProductController');

	Route::post('importcustomer_group', 'CustomerGroupController@importCustomerGroup')->name('customer_group.import');
	Route::post('customer_group/deletebyselection', 'CustomerGroupController@deleteBySelection');
	Route::get('customer_group/lims_customer_group_search', 'CustomerGroupController@limsCustomerGroupSearch')->name('customer_group.search');
	Route::resource('customer_group', 'CustomerGroupController');

	Route::post('importcustomer', 'CustomerController@importCustomer')->name('customer.import');
	Route::get('customer/getDeposit/{id}', 'CustomerController@getDeposit');
	Route::post('customer/add_deposit', 'CustomerController@addDeposit')->name('customer.addDeposit');
	Route::post('customer/update_deposit', 'CustomerController@updateDeposit')->name('customer.updateDeposit');
	Route::post('customer/deleteDeposit', 'CustomerController@deleteDeposit')->name('customer.deleteDeposit');
	Route::post('customer/deletebyselection', 'CustomerController@deleteBySelection');
	Route::get('customer/lims_customer_search', 'CustomerController@limsCustomerSearch')->name('customer.search');
	Route::resource('customer', 'CustomerController');

	Route::post('importbiller', 'BillerController@importBiller')->name('biller.import');
	Route::post('biller/deletebyselection', 'BillerController@deleteBySelection');
	Route::get('biller/lims_biller_search', 'BillerController@limsBillerSearch')->name('biller.search');
	Route::resource('biller', 'BillerController');

	// Mazharul Created Route
	Route::resource('deliveryperson', 'DeliveryPersonController');
	Route::resource('salesperson', 'SalesPersonController');
	Route::resource('challaninfo', 'ChallanInfoController');
	Route::resource('billinfo', 'BillInfoController');
	Route::resource('voucherinfo', 'VoucharInfoController');
	Route::resource('ledgerinfo', 'LedgerController');

	Route::get('voucherinfo/create-voucher/get-invoice','VoucharInfoController@getInvoiceByAjax')->name('getInvoiceByAjax');
	Route::get('voucherinfo/voucher/details','VoucharInfoController@voucherDetailsShow')->name('voucherDetailsShow');
	Route::get('voucherinfo/voucher-pdf/{id}','VoucharInfoController@voucherPdfInvoice')->name('voucherPdfInvoice');


	Route::get('billinfo/voucher-detail/bill','BillInfoController@billWiseVoucherDetails')->name('billWiseVoucherDetails');
	Route::get('billinfo/bill-pdf/{id}','BillInfoController@billPdfInvoice')->name('billPdfInvoice');
	Route::get('billinfo/approved/challan/getchanno','BillInfoController@getApprovedChallanDetails')->name('getApprovedChallanDetails');
	Route::get('billinfo/bill/details','BillInfoController@billDetailsShow')->name('billDetailsShow');

	Route::get('challaninfo/approved/challan-list','ChallanInfoController@approvedChallanList')->name('approvedChallanList');

	Route::get('challaninfo/getvendor/salesperson','ChallanInfoController@getVendorSalesPerson')->name('getVendorSalesPerson');
	Route::get('challaninfo/pending/challan','ChallanInfoController@pendingChallan')->name('pendingChallan');
	Route::post('challaninfo/approved-challan/{id}','ChallanInfoController@approvedChallan')->name('approvedChallan');
	Route::get('challaninfo/challan/details','ChallanInfoController@challanDetailsShow')->name('challanDetailsShow');
	Route::get('challaninfo/challan-pdf/{id}','ChallanInfoController@Challanpdf')->name('Challanpdf');

	// end created by Mazharul

	Route::post('sales/sale-data', 'SaleController@saleData');
	Route::post('sales/sendmail', 'SaleController@sendMail')->name('sale.sendmail');
	Route::get('sales/sale_by_csv', 'SaleController@saleByCsv');
	Route::get('sales/product_sale/{id}','SaleController@productSaleData');
	Route::post('importsale', 'SaleController@importSale')->name('sale.import');
	Route::get('pos', 'SaleController@posSale')->name('sale.pos');
	Route::get('sales/lims_sale_search', 'SaleController@limsSaleSearch')->name('sale.search');
	Route::get('sales/lims_product_search', 'SaleController@limsProductSearch')->name('product_sale.search');
	Route::get('sales/getcustomergroup/{id}', 'SaleController@getCustomerGroup')->name('sale.getcustomergroup');
	Route::get('sales/getproduct/{id}', 'SaleController@getProduct')->name('sale.getproduct');
	Route::get('sales/getproduct/{category_id}/{brand_id}', 'SaleController@getProductByFilter');
	Route::get('sales/getfeatured', 'SaleController@getFeatured');
	Route::get('sales/get_gift_card', 'SaleController@getGiftCard');
	Route::get('sales/paypalSuccess', 'SaleController@paypalSuccess');
	Route::get('sales/paypalPaymentSuccess/{id}', 'SaleController@paypalPaymentSuccess');
	Route::get('sales/gen_invoice/{id}', 'SaleController@genInvoice')->name('sale.invoice');
	Route::post('sales/add_payment', 'SaleController@addPayment')->name('sale.add-payment');
	Route::get('sales/getpayment/{id}', 'SaleController@getPayment')->name('sale.get-payment');
	Route::post('sales/updatepayment', 'SaleController@updatePayment')->name('sale.update-payment');
	Route::post('sales/deletepayment', 'SaleController@deletePayment')->name('sale.delete-payment');
	Route::get('sales/{id}/create', 'SaleController@createSale');
	Route::post('sales/deletebyselection', 'SaleController@deleteBySelection');
	Route::get('sales/print-last-reciept', 'SaleController@printLastReciept')->name('sales.printLastReciept');
	Route::get('sales/today-sale', 'SaleController@todaySale');
	Route::get('sales/today-profit/{warehouse_id}', 'SaleController@todayProfit');
	Route::resource('sales', 'SaleController');

	Route::get('delivery', 'DeliveryController@index')->name('delivery.index');
	Route::get('delivery/product_delivery/{id}','DeliveryController@productDeliveryData');
	Route::get('delivery/create/{id}', 'DeliveryController@create');
	Route::post('delivery/store', 'DeliveryController@store')->name('delivery.store');
	Route::post('delivery/sendmail', 'DeliveryController@sendMail')->name('delivery.sendMail');
	Route::get('delivery/{id}/edit', 'DeliveryController@edit');
	Route::post('delivery/update', 'DeliveryController@update')->name('delivery.update');
	Route::post('delivery/deletebyselection', 'DeliveryController@deleteBySelection');
	Route::post('delivery/delete/{id}', 'DeliveryController@delete')->name('delivery.delete');

	
	Route::get('quotations/product_quotation/{id}','QuotationController@productQuotationData');
	Route::get('quotations/product-quotation/challan','QuotationController@challanwithquationshow')->name('challanwithquationshow');
	Route::get('quotations/lims_product_search', 'QuotationController@limsProductSearch')->name('product_quotation.search');
	Route::get('quotations/getcustomergroup/{id}', 'QuotationController@getCustomerGroup')->name('quotation.getcustomergroup');
	Route::get('quotations/getproduct/{id}', 'QuotationController@getProduct')->name('quotation.getproduct');
	Route::get('quotations/{id}/create_sale', 'QuotationController@createSale')->name('quotation.create_sale');
	Route::get('quotations/{id}/create_purchase', 'QuotationController@createPurchase')->name('quotation.create_purchase');
	Route::post('quotations/sendmail', 'QuotationController@sendMail')->name('quotation.sendmail');
	Route::post('quotations/deletebyselection', 'QuotationController@deleteBySelection');
	Route::resource('quotations', 'QuotationController');

	Route::post('purchases/purchase-data', 'PurchaseController@purchaseData');
	Route::get('purchases/product_purchase/{id}','PurchaseController@productPurchaseData');
	Route::get('purchases/lims_product_search', 'PurchaseController@limsProductSearch')->name('product_purchase.search');
	Route::post('purchases/add_payment', 'PurchaseController@addPayment')->name('purchase.add-payment');
	Route::get('purchases/getpayment/{id}', 'PurchaseController@getPayment')->name('purchase.get-payment');
	Route::post('purchases/updatepayment', 'PurchaseController@updatePayment')->name('purchase.update-payment');
	Route::post('purchases/deletepayment', 'PurchaseController@deletePayment')->name('purchase.delete-payment');
	Route::get('purchases/purchase_by_csv', 'PurchaseController@purchaseByCsv');
	Route::post('importpurchase', 'PurchaseController@importPurchase')->name('purchase.import');
	Route::post('purchases/deletebyselection', 'PurchaseController@deleteBySelection');
	Route::resource('purchases', 'PurchaseController');

	Route::get('transfers/product_transfer/{id}','TransferController@productTransferData');
	Route::get('transfers/transfer_by_csv', 'TransferController@transferByCsv');
	Route::post('importtransfer', 'TransferController@importTransfer')->name('transfer.import');
	Route::get('transfers/getproduct/{id}', 'TransferController@getProduct')->name('transfer.getproduct');
	Route::get('transfers/lims_product_search', 'TransferController@limsProductSearch')->name('product_transfer.search');
	Route::post('transfers/deletebyselection', 'TransferController@deleteBySelection');
	Route::resource('transfers', 'TransferController');

	Route::get('qty_adjustment/getproduct/{id}', 'AdjustmentController@getProduct')->name('adjustment.getproduct');
	Route::get('qty_adjustment/lims_product_search', 'AdjustmentController@limsProductSearch')->name('product_adjustment.search');
	Route::post('qty_adjustment/deletebyselection', 'AdjustmentController@deleteBySelection');
	Route::resource('qty_adjustment', 'AdjustmentController');

	Route::get('return-sale/getcustomergroup/{id}', 'ReturnController@getCustomerGroup')->name('return-sale.getcustomergroup');
	Route::post('return-sale/sendmail', 'ReturnController@sendMail')->name('return-sale.sendmail');
	Route::get('return-sale/getproduct/{id}', 'ReturnController@getProduct')->name('return-sale.getproduct');
	Route::get('return-sale/lims_product_search', 'ReturnController@limsProductSearch')->name('product_return-sale.search');
	Route::get('return-sale/product_return/{id}','ReturnController@productReturnData');
	Route::post('return-sale/deletebyselection', 'ReturnController@deleteBySelection');
	Route::resource('return-sale', 'ReturnController');

	Route::get('return-purchase/getcustomergroup/{id}', 'ReturnPurchaseController@getCustomerGroup')->name('return-purchase.getcustomergroup');
	Route::post('return-purchase/sendmail', 'ReturnPurchaseController@sendMail')->name('return-purchase.sendmail');
	Route::get('return-purchase/getproduct/{id}', 'ReturnPurchaseController@getProduct')->name('return-purchase.getproduct');
	Route::get('return-purchase/lims_product_search', 'ReturnPurchaseController@limsProductSearch')->name('product_return-purchase.search');
	Route::get('return-purchase/product_return/{id}','ReturnPurchaseController@productReturnData');
	Route::post('return-purchase/deletebyselection', 'ReturnPurchaseController@deleteBySelection');
	Route::resource('return-purchase', 'ReturnPurchaseController');

	Route::get('report/product_quantity_alert', 'ReportController@productQuantityAlert')->name('report.qtyAlert');
	Route::get('report/warehouse_stock', 'ReportController@warehouseStock')->name('report.warehouseStock');
	Route::post('report/warehouse_stock', 'ReportController@warehouseStockById')->name('report.warehouseStock');
	Route::get('report/daily_sale/{year}/{month}', 'ReportController@dailySale');
	Route::post('report/daily_sale/{year}/{month}', 'ReportController@dailySaleByWarehouse')->name('report.dailySaleByWarehouse');
	Route::get('report/monthly_sale/{year}', 'ReportController@monthlySale');
	Route::post('report/monthly_sale/{year}', 'ReportController@monthlySaleByWarehouse')->name('report.monthlySaleByWarehouse');
	Route::get('report/daily_purchase/{year}/{month}', 'ReportController@dailyPurchase');
	Route::post('report/daily_purchase/{year}/{month}', 'ReportController@dailyPurchaseByWarehouse')->name('report.dailyPurchaseByWarehouse');
	Route::get('report/monthly_purchase/{year}', 'ReportController@monthlyPurchase');
	Route::post('report/monthly_purchase/{year}', 'ReportController@monthlyPurchaseByWarehouse')->name('report.monthlyPurchaseByWarehouse');
	Route::get('report/best_seller', 'ReportController@bestSeller');
	Route::post('report/best_seller', 'ReportController@bestSellerByWarehouse')->name('report.bestSellerByWarehouse');
	Route::post('report/profit_loss', 'ReportController@profitLoss')->name('report.profitLoss');

	//pdf report summary
	Route::get('export-pdf/{start_date}/{end_date}', 'ReportController@export_pdf')->name('export-pdf');
	//pdf daily sale
	Route::get('daily-sale-pdf/{year}/{month}', 'ReportController@daily_sale_pdf')->name('daily-sale-pdf');
	//pdf monthly sale
	Route::get('monthly-sale-pdf/{year}', 'ReportController@monthly_sale_pdf')->name('monthly-sale-pdf');
	//pdf daily purchase 
	Route::get('daily-purchase-pdf/{year}/{month}', 'ReportController@daily_purchase_pdf')->name('daily-purchase-pdf');
	//pdf monthly purchase
	Route::get('monthly-purchase-pdf/{year}', 'ReportController@monthly_purchase_pdf')->name('monthly-purchase-pdf');

	//print monthly purchase
	Route::get('monthly-purchase-print/{year}', 'ReportController@monthly_purchase_print')->name('monthly-purchase-print');

	//print monthly sale
	Route::get('monthly-sale-print/{year}', 'ReportController@monthly_sale_print')->name('monthly-sale-print'); 

	//print daily purchase 
	Route::get('daily-purchase-print/{year}/{month}', 'ReportController@daily_purchase_print')->name('daily-purchase-print');

	//print daily sale
	Route::get('daily-sale-print/{year}/{month}', 'ReportController@daily_sale_print')->name('daily-sale-print');

	//print report summary
	Route::get('summary-print/{start_date}/{end_date}', 'ReportController@summary_print')->name('summary-print');

	//customers message
	Route::get('customers-message', 'ReportController@customers_message')->name('customers-message');

	//newsletter view
	Route::get('view-newsletter', 'ReportController@view_newsletter')->name('view-newsletter');

	//expire report
	Route::get('expire-report', 'ReportController@expire_report')->name('expire-report');

	//expire date filter
	Route::post('expire-report-filter', 'ReportController@expire_date_filter')->name('expire-date-filter');

	Route::post('report/product_report', 'ReportController@productReport')->name('report.product');
	Route::post('report/purchase', 'ReportController@purchaseReport')->name('report.purchase');
	Route::post('report/sale_report', 'ReportController@saleReport')->name('report.sale');
	Route::post('report/payment_report_by_date', 'ReportController@paymentReportByDate')->name('report.paymentByDate');
	Route::post('report/warehouse_report', 'ReportController@warehouseReport')->name('report.warehouse');
	Route::post('report/user_report', 'ReportController@userReport')->name('report.user');
	Route::post('report/customer_report', 'ReportController@customerReport')->name('report.customer');
	Route::post('report/supplier', 'ReportController@supplierReport')->name('report.supplier');
	Route::post('report/due_report_by_date', 'ReportController@dueReportByDate')->name('report.dueByDate');

	Route::get('user/profile/{id}', 'UserController@profile')->name('user.profile');
	Route::put('user/update_profile/{id}', 'UserController@profileUpdate')->name('user.profileUpdate');
	Route::put('user/changepass/{id}', 'UserController@changePassword')->name('user.password');
	Route::get('user/genpass', 'UserController@generatePassword');
	Route::post('user/deletebyselection', 'UserController@deleteBySelection');
	Route::resource('user','UserController');

	Route::get('setting/general_setting', 'SettingController@generalSetting')->name('setting.general');
	Route::post('setting/general_setting_store', 'SettingController@generalSettingStore')->name('setting.generalStore');

	//report setting
	Route::get('setting/report_setting', 'SettingController@report_setting')->name('setting.report');
	Route::post('setting/report_setting_store', 'SettingController@report_setting_store')->name('report-setting-store');


	Route::get('backup', 'SettingController@backup')->name('setting.backup');
	Route::get('setting/general_setting/change-theme/{theme}', 'SettingController@changeTheme');
	Route::get('setting/mail_setting', 'SettingController@mailSetting')->name('setting.mail');
	Route::get('setting/sms_setting', 'SettingController@smsSetting')->name('setting.sms');
	Route::get('setting/createsms', 'SettingController@createSms')->name('setting.createSms');
	Route::post('setting/sendsms', 'SettingController@sendSms')->name('setting.sendSms');
	Route::get('setting/hrm_setting', 'SettingController@hrmSetting')->name('setting.hrm');
	Route::post('setting/hrm_setting_store', 'SettingController@hrmSettingStore')->name('setting.hrmStore');
	Route::post('setting/mail_setting_store', 'SettingController@mailSettingStore')->name('setting.mailStore');
	Route::post('setting/sms_setting_store', 'SettingController@smsSettingStore')->name('setting.smsStore');
	Route::get('setting/pos_setting', 'SettingController@posSetting')->name('setting.pos');
	Route::post('setting/pos_setting_store', 'SettingController@posSettingStore')->name('setting.posStore');
	Route::get('setting/empty-database', 'SettingController@emptyDatabase')->name('setting.emptyDatabase');

	Route::get('expense_categories/gencode', 'ExpenseCategoryController@generateCode');
	Route::post('expense_categories/import', 'ExpenseCategoryController@import')->name('expense_category.import');
	Route::post('expense_categories/deletebyselection', 'ExpenseCategoryController@deleteBySelection');
	Route::resource('expense_categories', 'ExpenseCategoryController');

	Route::post('expenses/deletebyselection', 'ExpenseController@deleteBySelection');
	Route::resource('expenses', 'ExpenseController');

	Route::get('gift_cards/gencode', 'GiftCardController@generateCode');
	Route::post('gift_cards/recharge/{id}', 'GiftCardController@recharge')->name('gift_cards.recharge');
	Route::post('gift_cards/deletebyselection', 'GiftCardController@deleteBySelection');
	Route::resource('gift_cards', 'GiftCardController');

	Route::get('coupons/gencode', 'CouponController@generateCode');
	Route::post('coupons/deletebyselection', 'CouponController@deleteBySelection');
	Route::resource('coupons', 'CouponController');
	//accounting routes
	Route::get('accounts/make-default/{id}', 'AccountsController@makeDefault');
	Route::get('accounts/balancesheet', 'AccountsController@balanceSheet')->name('accounts.balancesheet');
	Route::post('accounts/account-statement', 'AccountsController@accountStatement')->name('accounts.statement');
	Route::resource('accounts', 'AccountsController');
	Route::resource('money-transfers', 'MoneyTransferController');
	//HRM routes
	Route::post('departments/deletebyselection', 'DepartmentController@deleteBySelection');
	Route::resource('departments', 'DepartmentController');

	Route::post('employees/deletebyselection', 'EmployeeController@deleteBySelection');
	Route::resource('employees', 'EmployeeController');

	Route::post('payroll/deletebyselection', 'PayrollController@deleteBySelection');
	Route::resource('payroll', 'PayrollController');

	Route::post('attendance/deletebyselection', 'AttendanceController@deleteBySelection');
	Route::resource('attendance', 'AttendanceController');

	Route::resource('stock-count', 'StockCountController');
	Route::post('stock-count/finalize', 'StockCountController@finalize')->name('stock-count.finalize');
	Route::get('stock-count/stockdif/{id}', 'StockCountController@stockDif');
	Route::get('stock-count/{id}/qty_adjustment', 'StockCountController@qtyAdjustment')->name('stock-count.adjustment');

	Route::post('holidays/deletebyselection', 'HolidayController@deleteBySelection');
	Route::get('approve-holiday/{id}', 'HolidayController@approveHoliday')->name('approveHoliday');
	Route::get('holidays/my-holiday/{year}/{month}', 'HolidayController@myHoliday')->name('myHoliday');
	Route::resource('holidays', 'HolidayController');

	Route::get('cash-register', 'CashRegisterController@index')->name('cashRegister.index');
	Route::get('cash-register/check-availability/{warehouse_id}', 'CashRegisterController@checkAvailability')->name('cashRegister.checkAvailability');
	Route::post('cash-register/store', 'CashRegisterController@store')->name('cashRegister.store');
	Route::get('cash-register/getDetails/{id}', 'CashRegisterController@getDetails');
	Route::get('cash-register/showDetails/{warehouse_id}', 'CashRegisterController@showDetails');
	Route::post('cash-register/close', 'CashRegisterController@close')->name('cashRegister.close');

	Route::post('notifications/store', 'NotificationController@store')->name('notifications.store');
	Route::get('notifications/mark-as-read', 'NotificationController@markAsRead');

	Route::resource('currency', 'CurrencyController');

	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('my-transactions/{year}/{month}', 'HomeController@myTransaction');


	//blog roures
	 Route::get('/blog', 'HomeController@add_blog')->name('add-blog');
	 Route::post('/save-blog', 'HomeController@save_blog')->name('save-blog');
	 Route::get('/blog-list', 'HomeController@blog_list')->name('blog-list');
	 Route::get('/edit-blog/{id}', 'HomeController@edit_blog')->name('edit-blog');
	 Route::post('/update-blog', 'HomeController@update_blog')->name('update-blog');
	 Route::get('/delete-blog/{id}', 'HomeController@delete_blog')->name('delete-blog');
});

