<?php
    include_once('../../../config/connect.php');

    // create data
    if (isset($_POST['submit'])){
        $Sid = $_POST['size_id'];
        $Sname = $_POST['size_name'];
        $desc = $_POST['description'];

        if (empty($Sid) || empty($Sname)){
            $error = "Field is required !";
        }elseif(!empty($Sid) && !empty($Sname)){
            $query = "INSERT INTO size (size_id,name,description) VALUES ('$Sid','$Sname','$desc')";
            if (mysqli_query($conn,$query)){
                header("location: manage_size.php");
            } else{
                echo 'query error: ' .mysqli_error($conn);
            }
        }
    }

    $Sid ='';
    //delete user
    if (isset($_GET['delete'])){
       $Sid = $_GET['delete'];
       $conn->query("delete from size where size_id=$Sid");
       header("location: manage_size.php");
    }

    //edit user
    //catch user
    if (isset($_GET['edit'])){
       $Sid = $_GET['edit'];
       $result = $conn->query("select * from size where size_id=$Sid");
          $row = $result->fetch_array();
          $Sid = $row['size_id'];
          $Sname = $row['name'];
          $desc = $row['description'];
    }
    //update user
    if (isset($_POST['update'])){
       $Sid = $_POST['size_id'];
      //  $user_id = $_POST['user_id'];
       $Sname = $_POST['name'];
       $desc = $_POST['description'];
       $conn->query("update size set name='$Sname', description='$desc' where size_id=$Sid");
       header("location:manage_size.php");
    }
    $conn->close();