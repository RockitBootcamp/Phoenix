<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Validator;
use Request;
use Redirect;

class CustomerController extends Controller {
	
	/**
	 * List Customers
	 */
	public function listCustomers() {
		$customers_collection = Customer::all();
		return view('customers.list', ['customers' => $customers_collection->getArray()]);
	}

	/**
	 * Add or Edit Form
	 */
	public function form() {
		
		// Validation Rules
		$validator = Validator::make(Request::all(), [
			'customer_id' => 'integer'
		]);

		// Start View Settings
		$viewSettings = [];

		// If Validation Fails
		if ($validator->fails()) {
			$messages = $validator->errors();
			return view('customers.form', ['errors' => $messages]);
		}

		// If the User ID is present, add user to viewSettings
		if (!$validator->fails() && !empty(Request::input('customer_id'))) {
			$customer = new Customer(Request::input('customer_id'));
			$viewSettings['customer'] = $customer->getData();
		}

		// Return View
		return view('customers.form', $viewSettings);

	}

	/**
	 * Process Form
	 */
	public function processForm() {

		// If the Customer ID isn't present, then we're in Add Mode. If it
		// is present, then we're in Update Mode

		// Validation Rules
		$validator = Validator::make(Request::all(), [
			'customer_id' => 'integer',
			'first_name' => 'required|max:50',
			'last_name' => 'required|max:50',
			'email' => 'required|email|max:255',
			'gender' => 'required|in:m,f|max:1'
		]);
		
		// If Validation Failed
		if ($validator->fails()) {
			return redirect('/customer/form')->withErrors($validator->messages()->toArray());
		}
		
		// Customer Model. May be empty of the customer_id isn't
		// available. That's fine because the save method on the
		// customer model can save or update depending on if the
		// model already exists
		$customer = new Customer(Request::input('customer_id'));
		
		// Edit Properties
		$customer->first_name = Request::input('first_name');
		$customer->last_name  = Request::input('last_name');
		$customer->email      = Request::input('email');
		$customer->gender     = Request::input('gender');
		$customer_id          = $customer->save();
		
		// Redirect to the user's profile page
		return redirect('/customers');

	}

	/**
	 * Add or Edit Form
	 */
	public function remove($customer_id) {
		
		// Validation Rules
		$validator = Validator::make(['customer_id' => $customer_id], [
			'customer_id' => 'integer'
		]);

		// If Validation Fails
		if ($validator->fails()) {
			return redirect('/customers')->withErrors($validator->messages()->toArray());
		}

		// Remove Customer
		$customer = new Customer($customer_id);
		$customer->remove();

		// Return a redirect
		return redirect('/customers');

	}

}