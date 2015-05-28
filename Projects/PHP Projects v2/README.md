# Milestone 2: Project Outline

## Project Background and Description
This project will build upon the previous business website you created by making it more complex with your enhanced PHP and CSS skills. Use the background image provided for the background of each page. The header and footer for each page will include the same information with a slight change to the header (see requirements below). The home page will include the same messages to the user with the same link to the browse page. The browse page will now have a drop down for the user to select a product, along with an input field for the user to enter the number of products he/she would like. The view page will have additional logic to output the appropriate message as outlined in the requirements below. You will need to create one additional php file (products.php) that stores your product inventory as an indexed array. 

## Project Scope
Use the background.jpg for the background. The font needs to be `Lobster` for the logo and `Lato` for everything else. `Normalize.css` needs to be incorporated. A form should be created for the browse page, and a new file should be created and include an indexed array that stores the inventory of products. A user cannot order more than 7 Macs, and an output message should be displayed with the product and quantity being dynamically built. 

## Requirements
####CSS

- Use the background.jpg image provided for the background of the business website
- Use `background-size: cover` for the background image.
- The logo 'Business Site' should be black and should not change color when clicked on 
- Import and use `Lobster` and `Lato` fonts from Google fonts
- Incorporate `Normalize.css`

####PHP

- header.php
  - change the logo 'Business Site' to be a link that points to the home page and does not change color when hovered or clicked on
- products.php
  - this is an addition from the last milestone and should include an indexed array that stores the product inventory
- browse.php
  - use a form with a dropdown field that has options for products and an input field for quantity
- view.php
  - instead of `if-else` statements for every product, use the GET variable from the form to determine the product name to output
  - the output message should include the product selected and the quantity the user input
  - example of message: 'Your order includes {{quantity}} {{product}}'
  - additional logic: if the user orders more than 7 Macs, the user should be presented with the message 'You can't order over 7 Mac'
  - if the view.php page is accessed without either or both inputs (product & quantity) there should NOT be any errors
  - if the view.php page is given an invalid product_id, there should be a message like "This product does not exist"

### Tips

You should only be making changes to the header.php, browse.php, view.php, and css/styles.css pages. You should be adding only one php file, titled products.php that includes only an indexed array. You will still use `if-else` statements to output messages from the view.php page, but you need to use GET variables to pull the data from the browse page. 


