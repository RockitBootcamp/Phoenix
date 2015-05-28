# Milestone 4: PHP Project
###A POS System

## Project Background and Description
For this milestone, a point-of-sale (POS) system that a retailer might use to track of customers, invoices, and the items that are for sale is partially created. You will finish the system by adding the invoice piece to include CRUD (Create, Retrieve, Update, Delete). There are bonus tasks that you can do once you have **fully** met the acceptance criteria.

##Acceptance Criteria
- use the database tables.sql file provided to create the POS database, tables, and content on your local environment
- **Home page**
	- add a link to your invoices page
- **Invoices page**
  - include a header that reads *Invoices*, a link to the home page, and a table that has five columns: Invoice #, Customer Name, Total (which is the total sum of the invoice), the invoice creation date, and a link that reads *Details*
  - this page will allow the user to view a list of invoices with the appropriate customer name and total for that invoice retrieved from the database
  - when the *Details* link is clicked, it should take the user to a new page where he/she can view the details of that invoice (see *Invoice Details* page information below)
- **New Invoice file**
  - this file should simply be an INSERT statement that creates a new invoice in the database for the appropriate customer, then grabs the last inserted invoice id and passes that invoice id to the invoice details page.
  - the user does not actually see this as a page
- **Invoice Details page**
  - include a header that reads *Invoice #`{{invoice_id}}`*, a link to take the user back to the invoices page, a link to return the user to the home page, a table that has five columns: Quantity, Item, Cost, Sub-Total (item * cost), and a link that reads *Remove*
  - also include two input fields and a link that reads *Add* below the table that allows the user to add a certain number of items to the invoice
  - the first input field should be for the number of items the customer wants to buys, and the second input field should be a drop down box that has a list of items from the database (it would also match the list of items on the items page)
  - an invoice *cannot* have the same item more than once. If the user adds an item that already exists in the invoice, the existing invoice_item record should be updated to reflect the new quantity
