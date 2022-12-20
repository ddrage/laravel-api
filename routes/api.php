<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// api routes that need auth

Route::middleware(['auth:api'])->group(function () {


});

Route::get('home', 'HomeController@index');


/* routes for Accountgroup Controller  */	
	Route::get('accountgroup', 'AccountgroupController@index');
	Route::get('accountgroup/index', 'AccountgroupController@index');
	Route::get('accountgroup/index/{filter?}/{filtervalue?}', 'AccountgroupController@index');	
	Route::get('accountgroup/view/{rec_id}', 'AccountgroupController@view');	
	Route::post('accountgroup/add', 'AccountgroupController@add');	
	Route::any('accountgroup/edit/{rec_id}', 'AccountgroupController@edit');	
	Route::any('accountgroup/delete/{rec_id}', 'AccountgroupController@delete');

/* routes for Accounts Controller  */	
	Route::get('accounts', 'AccountsController@index');
	Route::get('accounts/index', 'AccountsController@index');
	Route::get('accounts/index/{filter?}/{filtervalue?}', 'AccountsController@index');	
	Route::get('accounts/view/{rec_id}', 'AccountsController@view');	
	Route::post('accounts/add', 'AccountsController@add');	
	Route::any('accounts/edit/{rec_id}', 'AccountsController@edit');	
	Route::any('accounts/delete/{rec_id}', 'AccountsController@delete');

/* routes for Accounts1 Controller  */	
	Route::get('accounts1', 'Accounts1Controller@index');
	Route::get('accounts1/index', 'Accounts1Controller@index');
	Route::get('accounts1/index/{filter?}/{filtervalue?}', 'Accounts1Controller@index');

/* routes for Accountstaxes Controller  */	
	Route::get('accountstaxes', 'AccountstaxesController@index');
	Route::get('accountstaxes/index', 'AccountstaxesController@index');
	Route::get('accountstaxes/index/{filter?}/{filtervalue?}', 'AccountstaxesController@index');	
	Route::get('accountstaxes/view/{rec_id}', 'AccountstaxesController@view');	
	Route::post('accountstaxes/add', 'AccountstaxesController@add');	
	Route::any('accountstaxes/edit/{rec_id}', 'AccountstaxesController@edit');	
	Route::any('accountstaxes/delete/{rec_id}', 'AccountstaxesController@delete');

/* routes for Acctprod Controller  */	
	Route::get('acctprod', 'AcctprodController@index');
	Route::get('acctprod/index', 'AcctprodController@index');
	Route::get('acctprod/index/{filter?}/{filtervalue?}', 'AcctprodController@index');	
	Route::get('acctprod/view/{rec_id}', 'AcctprodController@view');	
	Route::post('acctprod/add', 'AcctprodController@add');	
	Route::any('acctprod/edit/{rec_id}', 'AcctprodController@edit');	
	Route::any('acctprod/delete/{rec_id}', 'AcctprodController@delete');

/* routes for Areacode Controller  */	
	Route::get('areacode', 'AreacodeController@index');
	Route::get('areacode/index', 'AreacodeController@index');
	Route::get('areacode/index/{filter?}/{filtervalue?}', 'AreacodeController@index');	
	Route::get('areacode/view/{rec_id}', 'AreacodeController@view');	
	Route::post('areacode/add', 'AreacodeController@add');	
	Route::any('areacode/edit/{rec_id}', 'AreacodeController@edit');	
	Route::any('areacode/delete/{rec_id}', 'AreacodeController@delete');

/* routes for Branches Controller  */	
	Route::get('branches', 'BranchesController@index');
	Route::get('branches/index', 'BranchesController@index');
	Route::get('branches/index/{filter?}/{filtervalue?}', 'BranchesController@index');	
	Route::get('branches/view/{rec_id}', 'BranchesController@view');	
	Route::post('branches/add', 'BranchesController@add');	
	Route::any('branches/edit/{rec_id}', 'BranchesController@edit');	
	Route::any('branches/delete/{rec_id}', 'BranchesController@delete');

/* routes for Breakdwn Controller  */	
	Route::get('breakdwn', 'BreakdwnController@index');
	Route::get('breakdwn/index', 'BreakdwnController@index');
	Route::get('breakdwn/index/{filter?}/{filtervalue?}', 'BreakdwnController@index');	
	Route::get('breakdwn/view/{rec_id}', 'BreakdwnController@view');	
	Route::post('breakdwn/add', 'BreakdwnController@add');	
	Route::any('breakdwn/edit/{rec_id}', 'BreakdwnController@edit');	
	Route::any('breakdwn/delete/{rec_id}', 'BreakdwnController@delete');

/* routes for Bustype Controller  */	
	Route::get('bustype', 'BustypeController@index');
	Route::get('bustype/index', 'BustypeController@index');
	Route::get('bustype/index/{filter?}/{filtervalue?}', 'BustypeController@index');	
	Route::get('bustype/view/{rec_id}', 'BustypeController@view');	
	Route::post('bustype/add', 'BustypeController@add');	
	Route::any('bustype/edit/{rec_id}', 'BustypeController@edit');	
	Route::any('bustype/delete/{rec_id}', 'BustypeController@delete');

/* routes for Checks Controller  */	
	Route::get('checks', 'ChecksController@index');
	Route::get('checks/index', 'ChecksController@index');
	Route::get('checks/index/{filter?}/{filtervalue?}', 'ChecksController@index');	
	Route::get('checks/view/{rec_id}', 'ChecksController@view');	
	Route::post('checks/add', 'ChecksController@add');	
	Route::any('checks/edit/{rec_id}', 'ChecksController@edit');	
	Route::any('checks/delete/{rec_id}', 'ChecksController@delete');

/* routes for Company Controller  */	
	Route::get('company', 'CompanyController@index');
	Route::get('company/index', 'CompanyController@index');
	Route::get('company/index/{filter?}/{filtervalue?}', 'CompanyController@index');	
	Route::get('company/view/{rec_id}', 'CompanyController@view');	
	Route::post('company/add', 'CompanyController@add');	
	Route::any('company/edit/{rec_id}', 'CompanyController@edit');	
	Route::any('company/delete/{rec_id}', 'CompanyController@delete');

/* routes for Creditnote Controller  */	
	Route::get('creditnote', 'CreditnoteController@index');
	Route::get('creditnote/index', 'CreditnoteController@index');
	Route::get('creditnote/index/{filter?}/{filtervalue?}', 'CreditnoteController@index');	
	Route::get('creditnote/view/{rec_id}', 'CreditnoteController@view');	
	Route::post('creditnote/add', 'CreditnoteController@add');	
	Route::any('creditnote/edit/{rec_id}', 'CreditnoteController@edit');	
	Route::any('creditnote/delete/{rec_id}', 'CreditnoteController@delete');

/* routes for Cstprice Controller  */	
	Route::get('cstprice', 'CstpriceController@index');
	Route::get('cstprice/index', 'CstpriceController@index');
	Route::get('cstprice/index/{filter?}/{filtervalue?}', 'CstpriceController@index');	
	Route::get('cstprice/view/{rec_id}', 'CstpriceController@view');	
	Route::post('cstprice/add', 'CstpriceController@add');	
	Route::any('cstprice/edit/{rec_id}', 'CstpriceController@edit');	
	Route::any('cstprice/delete/{rec_id}', 'CstpriceController@delete');

/* routes for Dailysales Controller  */	
	Route::get('dailysales', 'DailysalesController@index');
	Route::get('dailysales/index', 'DailysalesController@index');
	Route::get('dailysales/index/{filter?}/{filtervalue?}', 'DailysalesController@index');	
	Route::get('dailysales/view/{rec_id}', 'DailysalesController@view');	
	Route::post('dailysales/add', 'DailysalesController@add');	
	Route::any('dailysales/edit/{rec_id}', 'DailysalesController@edit');	
	Route::any('dailysales/delete/{rec_id}', 'DailysalesController@delete');

/* routes for Gldatesummary Controller  */	
	Route::get('gldatesummary', 'GldatesummaryController@index');
	Route::get('gldatesummary/index', 'GldatesummaryController@index');
	Route::get('gldatesummary/index/{filter?}/{filtervalue?}', 'GldatesummaryController@index');

/* routes for Glheader Controller  */	
	Route::get('glheader', 'GlheaderController@index');
	Route::get('glheader/index', 'GlheaderController@index');
	Route::get('glheader/index/{filter?}/{filtervalue?}', 'GlheaderController@index');	
	Route::get('glheader/view/{rec_id}', 'GlheaderController@view');	
	Route::post('glheader/add', 'GlheaderController@add');	
	Route::any('glheader/edit/{rec_id}', 'GlheaderController@edit');	
	Route::any('glheader/delete/{rec_id}', 'GlheaderController@delete');

/* routes for Hositeterminals Controller  */	
	Route::get('hositeterminals', 'HositeterminalsController@index');
	Route::get('hositeterminals/index', 'HositeterminalsController@index');
	Route::get('hositeterminals/index/{filter?}/{filtervalue?}', 'HositeterminalsController@index');	
	Route::get('hositeterminals/view/{rec_id}', 'HositeterminalsController@view');	
	Route::post('hositeterminals/add', 'HositeterminalsController@add');	
	Route::any('hositeterminals/edit/{rec_id}', 'HositeterminalsController@edit');	
	Route::any('hositeterminals/delete/{rec_id}', 'HositeterminalsController@delete');

/* routes for Invdet Controller  */	
	Route::get('invdet', 'InvdetController@index');
	Route::get('invdet/index', 'InvdetController@index');
	Route::get('invdet/index/{filter?}/{filtervalue?}', 'InvdetController@index');	
	Route::get('invdet/view/{rec_id}', 'InvdetController@view');	
	Route::post('invdet/add', 'InvdetController@add');	
	Route::any('invdet/edit/{rec_id}', 'InvdetController@edit');	
	Route::any('invdet/delete/{rec_id}', 'InvdetController@delete');

/* routes for Invoice Controller  */	
	Route::get('invoice', 'InvoiceController@index');
	Route::get('invoice/index', 'InvoiceController@index');
	Route::get('invoice/index/{filter?}/{filtervalue?}', 'InvoiceController@index');	
	Route::get('invoice/view/{rec_id}', 'InvoiceController@view');	
	Route::post('invoice/add', 'InvoiceController@add');	
	Route::any('invoice/edit/{rec_id}', 'InvoiceController@edit');	
	Route::any('invoice/delete/{rec_id}', 'InvoiceController@delete');

/* routes for Invtaxes Controller  */	
	Route::get('invtaxes', 'InvtaxesController@index');
	Route::get('invtaxes/index', 'InvtaxesController@index');
	Route::get('invtaxes/index/{filter?}/{filtervalue?}', 'InvtaxesController@index');	
	Route::get('invtaxes/view/{rec_id}', 'InvtaxesController@view');	
	Route::post('invtaxes/add', 'InvtaxesController@add');	
	Route::any('invtaxes/edit/{rec_id}', 'InvtaxesController@edit');	
	Route::any('invtaxes/delete/{rec_id}', 'InvtaxesController@delete');

/* routes for Mop Controller  */	
	Route::get('mop', 'MopController@index');
	Route::get('mop/index', 'MopController@index');
	Route::get('mop/index/{filter?}/{filtervalue?}', 'MopController@index');	
	Route::get('mop/view/{rec_id}', 'MopController@view');	
	Route::post('mop/add', 'MopController@add');	
	Route::any('mop/edit/{rec_id}', 'MopController@edit');	
	Route::any('mop/delete/{rec_id}', 'MopController@delete');

/* routes for Mysqlfile Controller  */	
	Route::get('mysqlfile', 'MysqlfileController@index');
	Route::get('mysqlfile/index', 'MysqlfileController@index');
	Route::get('mysqlfile/index/{filter?}/{filtervalue?}', 'MysqlfileController@index');

/* routes for Ortaxes Controller  */	
	Route::get('ortaxes', 'OrtaxesController@index');
	Route::get('ortaxes/index', 'OrtaxesController@index');
	Route::get('ortaxes/index/{filter?}/{filtervalue?}', 'OrtaxesController@index');	
	Route::get('ortaxes/view/{rec_id}', 'OrtaxesController@view');	
	Route::post('ortaxes/add', 'OrtaxesController@add');	
	Route::any('ortaxes/edit/{rec_id}', 'OrtaxesController@edit');	
	Route::any('ortaxes/delete/{rec_id}', 'OrtaxesController@delete');

/* routes for Purchase Controller  */	
	Route::get('purchase', 'PurchaseController@index');
	Route::get('purchase/index', 'PurchaseController@index');
	Route::get('purchase/index/{filter?}/{filtervalue?}', 'PurchaseController@index');	
	Route::get('purchase/view/{rec_id}', 'PurchaseController@view');	
	Route::post('purchase/add', 'PurchaseController@add');	
	Route::any('purchase/edit/{rec_id}', 'PurchaseController@edit');	
	Route::any('purchase/delete/{rec_id}', 'PurchaseController@delete');

/* routes for Puritems Controller  */	
	Route::get('puritems', 'PuritemsController@index');
	Route::get('puritems/index', 'PuritemsController@index');
	Route::get('puritems/index/{filter?}/{filtervalue?}', 'PuritemsController@index');	
	Route::get('puritems/view/{rec_id}', 'PuritemsController@view');	
	Route::post('puritems/add', 'PuritemsController@add');	
	Route::any('puritems/edit/{rec_id}', 'PuritemsController@edit');	
	Route::any('puritems/delete/{rec_id}', 'PuritemsController@delete');

/* routes for Recacct Controller  */	
	Route::get('recacct', 'RecacctController@index');
	Route::get('recacct/index', 'RecacctController@index');
	Route::get('recacct/index/{filter?}/{filtervalue?}', 'RecacctController@index');

/* routes for Receive Controller  */	
	Route::get('receive', 'ReceiveController@index');
	Route::get('receive/index', 'ReceiveController@index');
	Route::get('receive/index/{filter?}/{filtervalue?}', 'ReceiveController@index');	
	Route::get('receive/view/{rec_id}', 'ReceiveController@view');	
	Route::post('receive/add', 'ReceiveController@add');	
	Route::any('receive/edit/{rec_id}', 'ReceiveController@edit');	
	Route::any('receive/delete/{rec_id}', 'ReceiveController@delete');

/* routes for Refacct Controller  */	
	Route::get('refacct', 'RefacctController@index');
	Route::get('refacct/index', 'RefacctController@index');
	Route::get('refacct/index/{filter?}/{filtervalue?}', 'RefacctController@index');

/* routes for Salesord Controller  */	
	Route::get('salesord', 'SalesordController@index');
	Route::get('salesord/index', 'SalesordController@index');
	Route::get('salesord/index/{filter?}/{filtervalue?}', 'SalesordController@index');	
	Route::get('salesord/view/{rec_id}', 'SalesordController@view');	
	Route::post('salesord/add', 'SalesordController@add');	
	Route::any('salesord/edit/{rec_id}', 'SalesordController@edit');	
	Route::any('salesord/delete/{rec_id}', 'SalesordController@delete');

/* routes for Secwin_Access Controller  */	
	Route::get('secwin_access', 'Secwin_AccessController@index');
	Route::get('secwin_access/index', 'Secwin_AccessController@index');
	Route::get('secwin_access/index/{filter?}/{filtervalue?}', 'Secwin_AccessController@index');	
	Route::get('secwin_access/view/{rec_id}', 'Secwin_AccessController@view');	
	Route::post('secwin_access/add', 'Secwin_AccessController@add');	
	Route::any('secwin_access/edit/{rec_id}', 'Secwin_AccessController@edit');	
	Route::any('secwin_access/delete/{rec_id}', 'Secwin_AccessController@delete');

/* routes for Secwin_Counters Controller  */	
	Route::get('secwin_counters', 'Secwin_CountersController@index');
	Route::get('secwin_counters/index', 'Secwin_CountersController@index');
	Route::get('secwin_counters/index/{filter?}/{filtervalue?}', 'Secwin_CountersController@index');	
	Route::get('secwin_counters/view/{rec_id}', 'Secwin_CountersController@view');	
	Route::post('secwin_counters/add', 'Secwin_CountersController@add');	
	Route::any('secwin_counters/edit/{rec_id}', 'Secwin_CountersController@edit');	
	Route::any('secwin_counters/delete/{rec_id}', 'Secwin_CountersController@delete');

/* routes for Secwin_Licence4 Controller  */	
	Route::get('secwin_licence4', 'Secwin_Licence4Controller@index');
	Route::get('secwin_licence4/index', 'Secwin_Licence4Controller@index');
	Route::get('secwin_licence4/index/{filter?}/{filtervalue?}', 'Secwin_Licence4Controller@index');	
	Route::get('secwin_licence4/view/{rec_id}', 'Secwin_Licence4Controller@view');	
	Route::post('secwin_licence4/add', 'Secwin_Licence4Controller@add');	
	Route::any('secwin_licence4/edit/{rec_id}', 'Secwin_Licence4Controller@edit');	
	Route::any('secwin_licence4/delete/{rec_id}', 'Secwin_Licence4Controller@delete');

/* routes for Secwin_Namecodes Controller  */	
	Route::get('secwin_namecodes', 'Secwin_NamecodesController@index');
	Route::get('secwin_namecodes/index', 'Secwin_NamecodesController@index');
	Route::get('secwin_namecodes/index/{filter?}/{filtervalue?}', 'Secwin_NamecodesController@index');	
	Route::get('secwin_namecodes/view/{rec_id}', 'Secwin_NamecodesController@view');	
	Route::post('secwin_namecodes/add', 'Secwin_NamecodesController@add');	
	Route::any('secwin_namecodes/edit/{rec_id}', 'Secwin_NamecodesController@edit');	
	Route::any('secwin_namecodes/delete/{rec_id}', 'Secwin_NamecodesController@delete');

/* routes for Secwin_Operators5 Controller  */	
	Route::get('secwin_operators5', 'Secwin_Operators5Controller@index');
	Route::get('secwin_operators5/index', 'Secwin_Operators5Controller@index');
	Route::get('secwin_operators5/index/{filter?}/{filtervalue?}', 'Secwin_Operators5Controller@index');	
	Route::get('secwin_operators5/view/{rec_id}', 'Secwin_Operators5Controller@view');	
	Route::post('secwin_operators5/add', 'Secwin_Operators5Controller@add');	
	Route::any('secwin_operators5/edit/{rec_id}', 'Secwin_Operators5Controller@edit');	
	Route::any('secwin_operators5/delete/{rec_id}', 'Secwin_Operators5Controller@delete');

/* routes for Secwin_Operatorsusergroups Controller  */	
	Route::get('secwin_operatorsusergroups', 'Secwin_OperatorsusergroupsController@index');
	Route::get('secwin_operatorsusergroups/index', 'Secwin_OperatorsusergroupsController@index');
	Route::get('secwin_operatorsusergroups/index/{filter?}/{filtervalue?}', 'Secwin_OperatorsusergroupsController@index');	
	Route::get('secwin_operatorsusergroups/view/{rec_id}', 'Secwin_OperatorsusergroupsController@view');	
	Route::post('secwin_operatorsusergroups/add', 'Secwin_OperatorsusergroupsController@add');	
	Route::any('secwin_operatorsusergroups/edit/{rec_id}', 'Secwin_OperatorsusergroupsController@edit');	
	Route::any('secwin_operatorsusergroups/delete/{rec_id}', 'Secwin_OperatorsusergroupsController@delete');

/* routes for Secwin_Querytable Controller  */	
	Route::get('secwin_querytable', 'Secwin_QuerytableController@index');
	Route::get('secwin_querytable/index', 'Secwin_QuerytableController@index');
	Route::get('secwin_querytable/index/{filter?}/{filtervalue?}', 'Secwin_QuerytableController@index');	
	Route::get('secwin_querytable/view/{rec_id}', 'Secwin_QuerytableController@view');	
	Route::post('secwin_querytable/add', 'Secwin_QuerytableController@add');	
	Route::any('secwin_querytable/edit/{rec_id}', 'Secwin_QuerytableController@edit');	
	Route::any('secwin_querytable/delete/{rec_id}', 'Secwin_QuerytableController@delete');

/* routes for Sordet Controller  */	
	Route::get('sordet', 'SordetController@index');
	Route::get('sordet/index', 'SordetController@index');
	Route::get('sordet/index/{filter?}/{filtervalue?}', 'SordetController@index');	
	Route::get('sordet/view/{rec_id}', 'SordetController@view');	
	Route::post('sordet/add', 'SordetController@add');	
	Route::any('sordet/edit/{rec_id}', 'SordetController@edit');	
	Route::any('sordet/delete/{rec_id}', 'SordetController@delete');

/* routes for Speriod Controller  */	
	Route::get('speriod', 'SperiodController@index');
	Route::get('speriod/index', 'SperiodController@index');
	Route::get('speriod/index/{filter?}/{filtervalue?}', 'SperiodController@index');	
	Route::get('speriod/view/{rec_id}', 'SperiodController@view');	
	Route::post('speriod/add', 'SperiodController@add');	
	Route::any('speriod/edit/{rec_id}', 'SperiodController@edit');	
	Route::any('speriod/delete/{rec_id}', 'SperiodController@delete');

/* routes for Stkcard Controller  */	
	Route::get('stkcard', 'StkcardController@index');
	Route::get('stkcard/index', 'StkcardController@index');
	Route::get('stkcard/index/{filter?}/{filtervalue?}', 'StkcardController@index');	
	Route::get('stkcard/view/{rec_id}', 'StkcardController@view');	
	Route::post('stkcard/add', 'StkcardController@add');	
	Route::any('stkcard/edit/{rec_id}', 'StkcardController@edit');	
	Route::any('stkcard/delete/{rec_id}', 'StkcardController@delete');

/* routes for Stkheader Controller  */	
	Route::get('stkheader', 'StkheaderController@index');
	Route::get('stkheader/index', 'StkheaderController@index');
	Route::get('stkheader/index/{filter?}/{filtervalue?}', 'StkheaderController@index');	
	Route::get('stkheader/view/{rec_id}', 'StkheaderController@view');	
	Route::post('stkheader/add', 'StkheaderController@add');	
	Route::any('stkheader/edit/{rec_id}', 'StkheaderController@edit');	
	Route::any('stkheader/delete/{rec_id}', 'StkheaderController@delete');

/* routes for Taxcodes Controller  */	
	Route::get('taxcodes', 'TaxcodesController@index');
	Route::get('taxcodes/index', 'TaxcodesController@index');
	Route::get('taxcodes/index/{filter?}/{filtervalue?}', 'TaxcodesController@index');	
	Route::get('taxcodes/view/{rec_id}', 'TaxcodesController@view');	
	Route::post('taxcodes/add', 'TaxcodesController@add');	
	Route::any('taxcodes/edit/{rec_id}', 'TaxcodesController@edit');	
	Route::any('taxcodes/delete/{rec_id}', 'TaxcodesController@delete');

/* routes for Taxes Controller  */	
	Route::get('taxes', 'TaxesController@index');
	Route::get('taxes/index', 'TaxesController@index');
	Route::get('taxes/index/{filter?}/{filtervalue?}', 'TaxesController@index');	
	Route::get('taxes/view/{rec_id}', 'TaxesController@view');	
	Route::post('taxes/add', 'TaxesController@add');	
	Route::any('taxes/edit/{rec_id}', 'TaxesController@edit');	
	Route::any('taxes/delete/{rec_id}', 'TaxesController@delete');

/* routes for Trancode Controller  */	
	Route::get('trancode', 'TrancodeController@index');
	Route::get('trancode/index', 'TrancodeController@index');
	Route::get('trancode/index/{filter?}/{filtervalue?}', 'TrancodeController@index');

/* routes for Userdevices Controller  */	
	Route::get('userdevices', 'UserdevicesController@index');
	Route::get('userdevices/index', 'UserdevicesController@index');
	Route::get('userdevices/index/{filter?}/{filtervalue?}', 'UserdevicesController@index');	
	Route::get('userdevices/view/{rec_id}', 'UserdevicesController@view');	
	Route::post('userdevices/add', 'UserdevicesController@add');	
	Route::any('userdevices/edit/{rec_id}', 'UserdevicesController@edit');	
	Route::any('userdevices/delete/{rec_id}', 'UserdevicesController@delete');

/* routes for Usersite Controller  */	
	Route::get('usersite', 'UsersiteController@index');
	Route::get('usersite/index', 'UsersiteController@index');
	Route::get('usersite/index/{filter?}/{filtervalue?}', 'UsersiteController@index');	
	Route::get('usersite/view/{rec_id}', 'UsersiteController@view');	
	Route::post('usersite/add', 'UsersiteController@add');	
	Route::any('usersite/edit/{rec_id}', 'UsersiteController@edit');	
	Route::any('usersite/delete/{rec_id}', 'UsersiteController@delete');



/* routes for FileUpload Controller  */	
Route::post('fileuploader/upload/{fieldname}', 'FileUploaderController@upload');
Route::post('fileuploader/s3upload/{fieldname}', 'FileUploaderController@s3upload');
Route::post('fileuploader/remove_temp_file', 'FileUploaderController@remove_temp_file');