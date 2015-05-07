<!-- 
Demonstrate validating a form using
    An object created to validate forms
    Try / Catch Statements
    Regular Expressions


Demonstrate form filling for forms with errors using a recursive form submission technique
   
 -->
<?php

    class ValidationException extends Exception{

    }

    class Validator{

        public function validate($value, $rule){

            if($rule == "text"){
                $this->validateText($value);
            } elseif ($rule == "email"){
                $this->validateEmail($value);
            }
            return true;
        }

        private function validateText($value){
          
            if(preg_match("/^[A-Za-z]+$/", $value)==0){
                throw new ValidationException("Please enter a string");
            }
        }

        private function validateEmail($value){
            if(preg_match("/^[A-Za-z]+@[A-Za-z]+\.[A-Za-z]+$/", $value)==0){
                throw new ValidationException("Please enter an email");
            }
        }


    }

    $message = "OK";

    $firstName = "";
    $lastName = "";
    $email = "";
    $age = "";
    $password = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        
        try{
            $validator = new Validator();

            $validator->validate($firstName, "text");
            $validator->validate($lastName, "text");
            $validator->validate($email, "email");
            $validator->validate($age, "age");
            
        }
        catch(ValidationException $e){
            $message = $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        input{
            display:block;
        }
    </style>
</head>
<body>
    <?= $message?>
    <form method="post">
        FirstName: <input type="text" name="firstName" value="<?= $firstName ?>" />
        LastName: <input type="text" name="lastName" value="<?=$lastName ?>" />
        Email: <input type="text" name="email" value="<?=$email ?>" />
        Age: <input type="text" name="age" value="<?=$age ?>" />
        Password: <input type="text" name="password" value="<?=$password ?>" />
        <input type="submit" />
    </form>
</body>
</html>
