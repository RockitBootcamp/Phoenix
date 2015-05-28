<?php

// Home Page
Route::get('/', 'HomeController@index');

/****************************************
  Customers
*****************************************/

// List Customers
Route::get('/customers', 'CustomerController@listCustomers');

// Customer Form
Route::get('/customer/form', 'CustomerController@form');
Route::post('/customer/process-form', 'CustomerController@processForm');

// Remove a Customer
Route::get('/customer/remove/{customer_id}', 'CustomerController@remove');


/****************************************
  Invoices
*****************************************/

// List Invoices
Route::get('/invoices', 'InvoiceController@listInvoices');

// Add A new customer invoice
Route::get('/customer/{customer_id}/add-invoice/', 'InvoiceController@addInvoice');

// Invoice Profile
Route::get('/invoice/{invoice_id}', 'InvoiceController@invoiceProfile');


/****************************************
  Items
*****************************************/

// List Items
Route::get('/items', function() {
    return 'You\'ll need to code the entire CRUD for items. Including setting up a controller instead of using this callback function';
});
