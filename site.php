<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<header>
<Section class="grid">
<h1>Section 1</h1>
<h1>Section 2</h1>
<h1>Section 3</h1>

</Section>

</header>
<?php require("rendering.php");
 $renderer = new rendering();
 $Setter = !empty($_POST["Fname"]) ? $_POST["Fname"] : null;
 $HouseNo = !empty($_POST["PostNo"]) ? $_POST["PostNo"] : null;
 $MobileNumber =!empty($_POST["MobileNumber"]) ? $_POST["MobileNumber"] : null;


 if(!empty($_POST['submitted']) && $_POST['submitted']== "true") {
   if(empty($_POST["Fname"])) {
       echo "<p>please enter your first name</p</br>";
   } else {
       $FName1 = $_POST["Fname"];
   }
   if(empty($_POST["LName"])) {
      echo "<p>please enter your Surname </p></br>";
   } else {
      $LName = $_POST["LName"];
   }
   if(empty($_POST["DOB"])) {
   echo "<p>please enter your Date of Birth </p></br>";
   } else {
      $DOB = $_POST["DOB"];
   }
   if(empty($_POST["Time"])) {
      echo "<p>please enter the Time </p></br>";
      } else {
         $Time = $_POST["Time"];
}
    }

//form validation has been been met for the first section of the input page, 
//however following the method above, all required entries would be visible to the user
//from the first section.


//if criteria is met, will navigation will switch to functions set in rendering.php 
 if($Setter && $Time && $DOB && $LName !== null) {
    $renderer->setPageId(4);
 } 
   if($HouseNo !== null) {
      $renderer->setPageId(8);
   }  if($MobileNumber !=null) {
      $renderer->setPageId(10);
   }
   echo $renderer->render();

   $FName1 = $_POST["FName"];
   $LName1 = $_POST["LName"];
   $DOB1 = $_POST["DOB"];
   $Time1 = $_POST["Time"];
   $$Gender =$_POST["Gender"];
   $TInsurance1 = $_POST["insurance"];
   $HouseNo1 = $_POST["HouseNo"];
   $PostCode1 = $_POST["PostNo"];
   $MobileNo1 = $_POST["MobileNumber"];
   $LandLine1 = $_POST["LandLine"];
   $Gender1 = $_POST["Gender"];
   $RandomNo1 = $_POST["R1"];
   $RandomNo2 = $_POST["R2"];
   $RandomNo3 = $_POST["R3"];
//include "rendering.php"

//in an ideal world, by storing these values in those variables above followed by a 
//include "rendering.php" would have populated the summary page with the users inputted
//information, unfortunately that hasn't been the case.



?>

<?php

?>
<body>
</body>
</html> 

