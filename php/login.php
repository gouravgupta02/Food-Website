<?php
  session_start();
  include_once "config.php";
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  
  if(!empty($email)&&!empty($password))
  {
    $sql=mysqli_query($conn,"SELECT * from users WHERE email='{$email}' AND password='{$password}'");
    if(mysqli_num_rows($sql)>0)
    {
      $row=mysqli_fetch_assoc($sql);
      if($sql)
      {
        $_SESSION['unique_id']=$row['unique_id'];        //using this session we used user unique id in other php files
        echo "success";
      }
    }
    else
    {
      echo "Either Email or Password is incorrect";
    }
  }
  else
  {
    echo "All input fields are required";
  }
?>