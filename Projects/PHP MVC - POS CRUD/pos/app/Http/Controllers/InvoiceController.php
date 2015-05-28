<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Item;
use Validator;
use Request;

class InvoiceController extends Controller {
	
	/**
	 * List Invoices
	 */
	public function listInvoices() {
		return "You'll need to program this area. It should be a list of all invoices. Each invoice should list the customer name and a link to the invoice profile.";
	}

	/**
	 * Add Invoice
	 */
	public function addInvoice($customer_id) {

		// Validation Rules
		$validator = Validator::make([
			'customer_id' => $customer_id
		], [
			'customer_id' => 'integer'
		]);

		// If Validation Fails
		if ($validator->fails()) {
			return redirect('/customers')->withErrors($validator->messages()->toArray());
		}

		// Start a new invoice model
		$invoice = new invoice();
		
		// Edit Properties
		$invoice->customer_id = $customer_id;
		$invoice_id = $invoice->save();

		// Redirect to the invoice profile
		return redirect('/invoice/' . $invoice_id);

	}

	/**
	 * Add or Edit Form
	 */
	public function invoiceProfile($invoice_id) {
		
		// Validation Rules
		$validator = Validator::make([
			'invoice_id' => $invoice_id
		], [
			'invoice_id' => 'integer'
		]);

		// If Validation Fails
		if ($validator->fails()) {
			return redirect('/customers')->withErrors($validator->messages()->toArray());
		}

		// Get the invoice model
		$invoice = new Invoice($invoice_id);

		// Invoice Items as an array
		$items= $invoice->getItems();

		// All Items Collection
		$all_items = Item::all();

		// Return the Invoice Profile View
		return view('invoices.profile', [
			'invoice' => $invoice,
			'items' => $items->getArray(),
			'all_items' => $all_items->getArray()
			]);

	}

}