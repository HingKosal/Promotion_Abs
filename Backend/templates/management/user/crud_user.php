<?php
    include_once('../../../config/connect.php');

    $user_id ='';
    //delete user
    if (isset($_GET['delete'])){
       $user_id = $_GET['delete'];
       $conn->query("delete from manage_user where user_id=$user_id");
       header("location:customers.php");
    //    echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    }

    //edit user
    //catch user
    if (isset($_GET['edit'])){
       $user_id = $_GET['edit'];
       $result = $conn->query("select * from manage_user where user_id=$user_id");
          $row = $result->fetch_array();
          $user_id = $row['user_id'];
          $firstname = $row['first_name'];
          $lastname = $row['last_name'];
          $username = $row['username'];
          $email = $row['email'];
          $password = $row['password'];
    }
    //update user
    if (isset($_POST['update_user'])){
       $id = $_POST['id'];
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $conn->query("update manage_user set first_name='$firstname', last_name='$lastname', username='$username', email='$email', password='$password' where user_id=$id");
       header("location:customers.php");
    }
    $conn->close();