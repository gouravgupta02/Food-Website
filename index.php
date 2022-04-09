<?php
  session_start();
  if(isset($_SESSION['unique id']))
  {
    header("location: ../foodwebsite.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudFlare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
</head>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Food Website</header>
      <h3>Sign Up</h3>
      <form action="#" enctype="multipart/form-data" autocomplete="off">
      <!-- multipart form data is used for encoding input type="file" -->
      <!-- each value is sent as a block of data ("body part"), with a user agent-defined delimiter ("boundary")
       separating each part. The keys are given in the Content-Disposition header of each part. -->
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First Name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" required>
          </div>
        </div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter new password" required>
          </div>
          <div class="field button">
            <input type="submit" value="Hopp In">
          </div>
      </form>
      <div class="link">
        Already Signed Up?
        <a href="login.php">Login Now</a>
      </div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
</body>
</html>