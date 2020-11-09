<?php
   include_once 'dbConfig.php';

    if(isset($_POST['submit'])){
      $sql = "INSERT INTO `user` ( `username`, `FirstName`, `LastName`, `PhoneNumber`, `Email`, `Pass`, `Gander`, `city`, `zipCode`, `Street`, `flor`, `Creditnumber`)
      VALUES ('".$_POST["usern"]."','".$_POST["Firstname"]."','".$_POST["Lasttname"].
      $_POST["Phone"]."','".$_POST["user-email"]."','".$_POST["userpassword        "].
      $_POST["gender"]."','".$_POST["city"]."','".$_POST["zipcode"].
      $_POST["Floor"]."','".$_POST["street"]."','".$_POST["CreditNumber"]."')";
      






  }

  ?>
?>


