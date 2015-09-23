<?php

session_start();

if(isset($_SESSION["puppies"])){
    $puppies = $_SESSION["puppies"];
}
else {
    $puppies = [];    
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $puppyName = $_POST["puppyName"];
    $puppies[] = $puppyName;

    $_SESSION["puppies"] = $puppies;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Name: <input type="input" name="puppyName">
        <button>Submit</button>

        <ul>
            <?php foreach($puppies as $puppy){?>
                <li class="puppy"><span><?= $puppy ?></span> <a href="#">Remove</a></li>
            <?php } ?>
        </ul>
    </form>
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        $(function(){

            console.log("REady");

            $(".puppy a").on("click", function(e){
                var li = $(this).closest("li");

                var puppyName = $("span", li).text();
                
                li.remove();

                $.post("api.php", {puppyName: puppyName}, function(data){
                    console.dir(data);
                });
            });
        });
    </script>
</body>
</html>