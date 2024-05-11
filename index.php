<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "appointment";

  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if($conn)
  {
    //echo "connection ok";
  }
  else
  {
    echo "connection failed";
  }

  if(isset($_POST['submit']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age   = $_POST['age'];
    $email   = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $specialist = $_POST['specialist'];
    $date = $_POST['date'];
    $comment = $_POST['comment'];


    $sql_query = "Insert into aadi (fname, lname, age, email, number, gender, specialist, date, comment)
    values ('$fname', '$lname', '$age', '$email', '$number', '$gender', '$specialist', '$date', '$comment')";

    if (mysqli_query($conn, $sql_query))
    {
      echo "New data inserted";
    }
    else
    {
     echo "error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }
?>