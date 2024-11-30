<?php

$success = 0;
$user = 0;

check
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include 'connect.php';



  $username = $_POST['username'];
  $password = $_POST['password'];

  // $sql = "insert into registration(username,password) values('$username','$password')";

  // $result = $conn->query($sql);

  // if (!$result) {
  //   die("connection Failed" . $conn->error);
  // } else {
  //   echo "Sign Up Successfully";
  // }


  $sql = "Select * from registration where username = '$username'";
  $result = $conn->query($sql);

  if($result){
    $num = mysqli_num_rows($result);
    if($num >  0){
      $user = 1;
    }
    else{
    
  $sql = "insert into registration(username,password) values('$username','$password')";

  $result = $conn->query($sql);

  if (!$result) {
    die("connection Failed" . $conn->error);
  } else {
        $success = 1;
  }
    }
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Signup</title>

</head>

<body>

<?php
if($user){
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry</strong> Account already exists
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
 }
?>


<?php
if($success){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hurray !!</strong> Successfully Signed Up
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>




<div class="container mt-5">
    <h1 class="text-center m-5">Sign Up Page</h1>
    <form action="signup.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control " name="username">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control " name="password">
      </div>

      <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>

  </div>

</body>

</html>