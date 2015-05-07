<!DOCTYPE html> 
<html>

<head>
  <title></title>
 
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="handlebars-v1.3.0.js"></script>
  <script type="text/javascript" src="default_companies.js"></script>
  
  <script src="company.js"></script>

  <link rel="stylesheet" href="company.css">
</head>
<body>

<header>
	<h1 class="company">Companies</h1>

</header>

<main>
	
	<div class="masterCat">

  <script id="catalog" type="text/x-hendalbars-template">
  {{#each this}}
    <div class="Products">
    
      <div class="{{name}}">
        <div class="name">{{name}}</div>
        <div class="industry">{{industry}}</div>
        <a href="{{website}}"> {{website}} </a><br><br><hr style="border: 1px solid #000;" />
      </div>
    </div>
  {{/each}}

      


  </script>
  </div>
              
	
</main>

</body>
</html>