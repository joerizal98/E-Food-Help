<?php
session_start();
$_SESSION['userName'];
$userName = $_SESSION['userName'];

// initializing variables
$foodName = "";
$foodCategory = "";
$quantity ="";
$foodPrice ="";
$errors = array();

// connect to the database
$db = mysqli_connect("localhost", "root", "", "efood");


// REGISTER USER
if (isset($_POST['insert_donate'])) 
{
  // receive all input values from the form
  //$fullName = mysqli_real_escape_string($db, $_POST['fullName']);
  $foodName = mysqli_real_escape_string($db, $_POST['name']);
  $foodCategory = mysqli_real_escape_string($db, $_POST['foodCategory']);
  $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  $foodPrice = mysqli_real_escape_string($db, $_POST['foodPrice']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($fullName)) { array_push($errors, "Full Name is required"); }
  if (empty($foodName)) { array_push($errors, "Food Name is required"); }
  if (empty($foodCategory)) { array_push($errors, "Food Categories is required"); }
  if (empty($quantity)) { array_push($errors, "Quantity is required"); }
  if (empty($foodPrice)) { array_push($errors, "Food Price is required"); }
  if ($quantity <= 0) {
  array_push($errors, "Quantity more than 0");
  }
  

  // first check the database to make sure
  // a user does not already exist with the same username and/or email


  // Finally, register user if there are no errors in the form

 if (count($errors) == 0) {

 $query1 = "SELECT id FROM user1 WHERE userName ='$userName'";
 $result = $db->query($query1);
 if ($result->num_rows == 1){
        // OUTPUT DATA OF EACH ROW
  while($row = $result->fetch_assoc())
  {
    $id = $row['id'];
     $query = "INSERT INTO food (id, foodCategory, foodName, estimatedPrice, quantity)VALUES
            ('$id','$foodCategory', '$foodName', '$foodPrice', '$quantity')";
       $stmt =$db->prepare($query);   
    //mysqli_query($db, $query);
      $stmt->execute();
    echo "<script>alert('Thank You For your donation! Total price is RM' + '$foodPrice');</script>";
     echo "<script>window.location='indexal.php'</script>";
   }
 }
}
  else
  {
      echo "<script>alert('Wrong Input!');</script>";
      echo "<script>window.location='insert_donate.php'</script>";
  }

}?>
