<?php
  session_start();                              //to store some data (current username and password) available on every page
  include_once "config.php";                    //include_once is used to fetch the code from specified file only once
  $fname=mysqli_real_escape_string($conn,$_POST['fname']);        //mysqli_real_escape_string escapes the special character
  $lname=mysqli_real_escape_string($conn,$_POST['lname']);        //$_POST is used to fetch the data when data is send through http request
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);

  if(!empty($fname)&&!empty($lname)&&!empty($email)&&!empty($password))
  {
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {                                    //used to check email is valid or not
      $sql=mysqli_query($conn,"SELECT email from users where email='{$email}'");     //mysqli_query is used to make specified changes in database
      if(mysqli_num_rows($sql)>0)                                                    //if valid then email already exist or not
      {
        echo "$email - This email already exists";
      }
      else
      {
          //insert all user data inside table
          $random_id=rand(time(),10000000);
          $sql2=mysqli_query($conn,"INSERT INTO users(unique_id,fname,lname,email,password)
                              VALUES('{$random_id}','{$fname}','{$lname}','{$email}','{$password}')");
          if($sql2)
          {
            $sql3=mysqli_query($conn,"SELECT * FROM users where email='{$email}'");
            if(mysqli_num_rows($sql3)>0)
            {
              $row=mysqli_fetch_assoc($sql3);//fetch result row as associative array(key value pair)
              $_SESSION['unique_id']=$row['unique_id'];//using this session we used user unique id in other php files
              echo "success";
            }
          }
          else
          {
            echo "Something went wrong";
          }
        }
    }
    else{
      echo "$email - This is not a valid email";
    }
  }
  else{
    echo "all input fields are required";
  }
?>
