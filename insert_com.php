<?php require_once "config.php";
session_start();
$_SESSION['userName'];
$userName = $_SESSION['userName'];

// initializing variables
$feedbackType = "CM";
$errors = array();

// connect to the database
$db = mysqli_connect("localhost", "root", "", "efood");

if (isset($_POST['insert_com'])) {
  // receive all input values from the form\
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $msg = mysqli_real_escape_string($db, $_POST['msg']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($msg)) { array_push($errors, "Message is required"); }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  /*$user_check_query = "SELECT * FROM user1 WHERE userName= '$userName' OR phoneNum='$phoneNum' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['fullName'] === $fullName) {
      array_push($errors, "Name already exists");
    }
    if ($user['userName'] === $userName) {
      array_push($errors, "Username already exists");
    }

    if ($user['phoneNum'] === $phoneNum) {
      array_push($errors, "Phone Number already exists");
    }
  }  */

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
      echo "<script>alert('Thank You For your feedback!');</script>";
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
      echo "<script>alert('Thank You For your feedback!');</script>";
      echo "<script>window.location='news.php'</script>";
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
}
?>