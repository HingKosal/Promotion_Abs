<?php
    include_once('../../../config/connect.php');

    // create data
    if (isset($_POST['create'])){
        $id = $_POST['province_id'];
        $title = $_POST['title'];
//        $desc = $_POST['description'];

        if (empty($id) || empty($title)){
            $error = "Field is required !";
        }elseif(!empty($id) && !empty($title)){
            $query = "INSERT INTO provinces (province_id,province_name) VALUES ('$id','$title')";
            if (mysqli_query($conn,$query)){
                header("location: provinces.php");
            } else{
                echo 'query error: ' .mysqli_error($conn);
            }
        }
    }

    $id ='';
    //delete user
    if (isset($_GET['delete'])){
       $id = $_GET['delete'];
       $conn->query("delete from provinces where province_id=$id");
       header("location: provinces.php");
    }

    //edit user
    //catch user
    if (isset($_GET['edit'])){
       $id = $_GET['edit'];
       $result = $conn->query("select * from provinces where province_id=$id");
          $row = $result->fetch_array();
          $id = $row['province_id'];
          $title = $row['province_name'];
    }
    //update user
    if (isset($_POST['update_province'])){
       $id = $_POST['province_id'];
       $title = $_POST['title'];
       $conn->query("update provinces set province_name='$title' where province_id=$id");
       header("location: provinces.php");
    }
