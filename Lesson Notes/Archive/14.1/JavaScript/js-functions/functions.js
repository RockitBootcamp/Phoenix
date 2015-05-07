
// 

High-Quality Routines pg 161 in Code Complete.

1. Good Reason...
2. Can I split the routine apart.
3. Good Name. Verb + Object   
4. Does the name say everything
5. Nameing Conventions
6. Cohesion
7. Loose Coupling. 
8. Length
9. 



// A routine does something. (Also known as function, procedure)

function isPositiveNumber(a){	
	return a >0;
}

function addTwoNumbers(a, b) {
	return a+b;
}

answer = addTwoNumbers(4,5);



// Use a naming convention
function isValidCustomer(customer)

	// Do stuff here
	return // something
	
}

// This breaks the nameing convention
function Is_Valid_Customer_At_Night(customer){

	// Do stuff here

	return // something

}


// We can call routines from other routines.

function printReceipt(customer, isValidCustomer){

	onPrintReceipt(customer);

	if(isValidCustomer(customer)){
		//.. do something
	}
	else
	{
		//.. do something else
	}

	afterPrintReceipt(customer, result);

}

function onPrintReceipt(customer){

}

function afterPrintReceipt(customer, result){

}


// Pass in a dependency to a routine
function closeStore(customer){

	if(afterTenPM){
		printReceipt(printReceipt, isValidCustomerAtNight);
	}
	else
	{
		printReceipt(printReceipt, isValidCustomer);
	}
}






