<?php
$insert= false;
if(isset($_POST['first_name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection failed to connect due to".mysqli_connect_error());
    }
    
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $city= $_POST['city'];
    $state= $_POST['state'];
    $zipcode= $_POST['zipcode'];

    $sql = "INSERT INTO  `kc`.`form` (`first_name`, `last_name`, `email`, `password`, `city`, `state`, `zipcode`) VALUES ('$first_name', '$last_name', '$email', '$password', '$city', '$state', '$zipcode')";
  
    if($con->query($sql)== true){
        $insert = true;
    }
    else{
        echo "error: $sql <br> $con->error";
    }
    $con->close();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/sign-in.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <?php
    if($insert == true){
      echo "<p style=\"color:green; opacity: 1; text-align: center;width: 20%; margin-left: 40vw; margin-top: 2vh; border: 5px solid #00bfb6;
    padding: 10px 0px;
    border-radius: 10%\">Form submitted successfully!</p>";
    echo "<script>
    setTimeout(function(){window.location.href = \"../html/home.html\";
     }, 2000);
    </script>";
  }
    ?>

<div class="main-container" id="cont">
 <form class="needs-validation" method="post" action="sign.php" novalidate >
    <h1>Sign-in Form</h1>
  <div class="form-row" >
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" name="first_name" class="form-control" id="validationCustom01" value="Mark" required >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" name="last_name" class="form-control" id="validationCustom02" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" name="city" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <select class="custom-select" name="state" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        
           <option> Gujarat</option>
           <option>  Haryana </option>
           <option>  Himachal Pradesh </option>
           <option>  Jharkhand</option>
           <option>  Karnataka </option>
           <option>  Kerala </option>
           <option>  Madhya Pradesh</option>
           <option>  Maharashtra</option>
           <option>  Tamil-Nadu</option>

        
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip-Code</label>
      <input type="number" name="zipcode" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        
        form.classList.add('was-validated');
      }, false);
      
    });
  }, false);
})();
</script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script src="../js/index.js"></script>
  </body>
</html>