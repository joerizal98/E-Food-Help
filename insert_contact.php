<?php  require_once "config.php";
session_start();
$_SESSION['userName'];
$userName = $_SESSION['userName'];

// initializing variables
$feedbackType = "CN";
$errors = array();

// connect to the database
$db = mysqli_connect("localhost", "root", "", "efood");


// REGISTER USER
if (isset($_POST['insert_contact'])) 
{
  // receive all input values from the form
  //$fullName = mysqli_real_escape_string($db, $_POST['fullName']);
  $title = "NULL";
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $msg = mysqli_real_escape_string($db, $_POST['msg']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($fullName)) { array_push($errors, "Full Name is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($msg)) { array_push($errors, "Message is required"); }
  

  // first check the database to make sure
  // a user does not already exist with the same username and/or email


  // Finally, register user if there are no errors in the form

if (count($errors) == 0) {
     if(!isset($_SESSION['userName']))
     { 
      $userName1 = "anonymous";
      $query1 = "SELECT id FROM user1 WHERE userName ='$userName1'";
      $result = $db->query($query1);
      if ($result->num_rows == 1){
        // OUTPUT DATA OF EACH ROW
       while($row = $result->fetch_assoc())
       {
        $userID = $row['id'];
        $query = "INSERT INTO feedback (id,feedbackType, title, email, message, name)
          VALUES('$userID','$feedbackType', '$title', '$email', '$msg', '$userName1')";
        $stmt =$db->prepare($query);   
    //mysqli_query($db, $query);
        $stmt->execute();
      echo "<script>alert('Thank You For your Contact Us!');</script>";
      echo "<script>window.location='news.php'</script>";
        }
      }
    }
   
    if(isset($_SESSION['userName']))
    {
      $query1 = "SELECT id FROM user1 WHERE userName ='$userName'";
      $result = $db->query($query1);
      if ($result->num_rows == 1){
        // OUTPUT DATA OF EACH ROW
       while($row = $result->fetch_assoc())
       {
        $userID = $row['id'];
        $query = "INSERT INTO feedback (id,feedbackType, title, email, message, name)
          VALUES('$userID', '$feedbackType', '$title', '$email', '$msg', '$userName')";
        $stmt =$db->prepare($query);   
    //mysqli_query($db, $query);
        $stmt->execute();
      echo "<script>alert('Thank You For your Contact Us!');</script>";
      echo "<script>window.location='indexal.php'</script>";
        }
      }
    }
    else
  {
    echo "<script>alert('Opps Something Wrong.!');</script>";
  }
 
  }
  else
  {
    echo "<script>alert('Opps Something Wrong!');</script>";
  }


}?>
