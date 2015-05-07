<?php

$el_dir = "up"; // up or down
$desired_dir = "up";
$message = '';

if($el_dir == "up"){
    if($desired_dir == "up") {
        $message = "pick me up, going up";
    } else {
        $message = "skip me, going up";
    }
} else { // $el_dir is equal to "down"
    if($desired_dir == "up") {
        $message = "skip me";
    } else {
        $message = "pick me up";
    }    
}

$class = preg_match('/^pick/', $message) ? "pickup" : "skip";

?>

<html>
    <style>
        .pickup { background-color: green; }
        .skip { background-color: red; }
    </style>
    <body>
        <div class="<?php echo($class); ?>">            
        <?php echo($message); ?>
        </div>
    </body>
</html>