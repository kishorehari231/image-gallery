<?php
session_start();
if(isset($_POST['email'])){
$conn = mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($conn,"kc") or die(mysqli_error());
$s = "select * from form";
$email= $_POST['email'];
$password= $_POST['password'];
$result = mysqli_query($conn,$s);
$rowcount = mysqli_num_rows($result);
if ($rowcount>0)
{
  while($row=mysqli_fetch_assoc($result)){
  if($email== $row['email'] && $password==$row['password']) {
        echo "success";
        header('location: ../html/home2.html');
    }
  }
}
  else {
    echo "No Results Found!!";
   
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>Login</title>
</head>
<body>
 
  <form class="login" id="login" action="login.php" method="POST">
      <h2> LOGIN </h2>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>