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

<?php require("Rendering.php");
 $renderer = new Rendering();
 require("FormData.php");
 $FormData = new FormData();
//  $FirstName = !empty($_POST["Fname"]) ? $_POST["Fname"] : null;
//  $HouseNo = !empty($_POST["PostNo"]) ? $_POST["PostNo"] : null;
//  $MobileNumber =!empty($_POST["MobileNumber"]) ? $_POST["MobileNumber"] : null;
// //

//  if(!empty($_POST['submitted']) && $_POST['submitted']== "true") {
//    if(empty($_POST["Fname"])) {
//        echo "<p>please enter your first name</p</br>";
//    } else {
//        $FName1 = $_POST["Fname"];
//    }
//    if(empty($_POST["LName"])) {
//       echo "<p>please enter your Surname </p></br>";
//    } else {
//       $LName = $_POST["LName"];
//    }
//    if(empty($_POST["DOB"])) {
//    echo "<p>please enter your Date of Birth </p></br>";
//    } else {
//       $DOB = $_POST["DOB"];
//    }
//    if(empty($_POST["Time"])) {
//       echo "<p>please enter the Time </p></br>";
//       } else {
//          $Time = $_POST["Time"];
// }
   //  }
   //  $FirstName !==null && $Time !==null && $DOB !==null && $LName !== null
$FormData->setData($_POST);
var_dump($FormData->PageOneValid());
 if($FormData->PageOneValid()) {
    $renderer->setPageId(4);
 } 
   if($HouseNo !== null) {
      $renderer->setPageId(8);
   }  if($MobileNumber !=null) {
      $renderer->setPageId(10);
   }

   echo $renderer->render($FormData);


?>

<?php

?>
<body>
</body>
</html> 

