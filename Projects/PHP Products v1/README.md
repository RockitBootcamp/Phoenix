# PHP Products v1

## Project Background and Description

Create a simple business website that consists of the following pages: Home, Contact, Browse, and View. From each page, there will be a header and a footer. The footer will include a copyright with '2015', and the header will include a 'logo' that reads 'Business Site' along with links the user will be able to click on to navigate between the different pages. The home page will consist of a message to welcome the user, as well as a smaller message asking if the user would like to browse products, with the word 'products' being a link to the browse page. From the browse page, the user will see three links of products he/she can click on. Once clicked, the user will be provided a message that reads "You chose the {{product name}}". The contact page will include a name, phone number, and email for the user to contact the business. 

## Project Scope

Follow the provided graphic design to accomplish the site's HTML and CSS. The header and footer page are created once for the project and included onto each of the three pages. The background image should come from http://subtlepatterns.com. Separate the HTML and PHP as much as possible (with php logic at the top, HTML below with php echoed where appropriate).

## Requirements

Your project must include the following:

### Files

- `header.php`
- `footer.php`
- `index.php`
- `contact.php`
  - Just make up basic contact info
- `browse.php`
  - Three product links: "Mac", "Ubuntu", "Windows"
  - Each product link will have an `id` variable indicating its ID (1, 2, 3).
    - the ID variable will be passed to the `view.php` page via `GET` request. 
    - Use 1 for Mac, 2 for Ubuntu, and 3 for Windows.
- `product.php`
  - Use `if` and `else-if` statements to determine which product was clicked.
  - An output should be displayed to show the name of the product clicked.
  - You also need to include a statement to handle any product ID other than 1, 2, 3. For example, if the user were to enter "0" or "4" or "123", a message should be output to read something like "Your entry is not valid, please try again."
- `css/styles.css`
  - Use the graphic design provided to accomplish the HTML & CSS.
- `images/background.png`
  - taken from http://subtlepatterns.com 

### Tips

While sometimes a file might only hold HTML even though it's extension is `.php`, many times your PHP files will have logical sections to them. For good "separation of concerns", it's best to place the main PHP logic at the top (and away from) the HTML. Then the PHP can create variables to place into the HTML:

```php
<?php

if ($_GET['foo'] == 'foo') {
  $output = 'Hello Foo';
} else {
  $output = 'Hello Bar';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php echo $output; ?>
	
</body>
</html>
```

Notice the PHP logic on top creates a variable to be "echoed" into the correct place below. We can't fully separate HTML from PHP but this is good enough for now. 

Spacing makes things easier to read. Be sure to use spaces around your PHP tags for legibility:

```php
<?php
// Logic
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php require_once('header.php'); ?>
	
	<main>
	</main>
	
</body>
</html>
```

Notice how we can see the difference between HTML and PHP section more easily when we use spaces to make gaps.