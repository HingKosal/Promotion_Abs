<?php
    include_once('../../../config/connect.php');

    // create data
    if (isset($_POST['create'])){
        $id = $_POST['brand_id'];
        $title = $_POST['title'];
        $desc = $_POST['description'];

        if (empty($id) || empty($title)){
            $error = "Field is required !";
        }elseif(!empty($id) && !empty($title)){
            $query = "INSERT INTO brands (brand_id,brand_name,description) VALUES ('$id','$title','$desc')";
            if (mysqli_query($conn,$query)){
                header("location: manage_brand.php");
            } else{
                echo 'query error: ' .mysqli_error($conn);
            }
        }
    }

    $Sid ='';
    //delete user
    if (isset($_GET['delete'])){
       $id = $_GET['delete'];
       $conn->query("delete from brands where brand_id=$id");
       header("location: manage_brand.php");
    }

    //edit user
    //catch user
    if (isset($_GET['edit'])){
       $id = $_GET['edit'];
       $result = $conn->query("select * from brands where brand_id=$id");
          $row = $result->fetch_array();
          $id = $row['brand_id'];
          $title = $row['brand_name'];
          $desc = $row['description'];
    }
    //update user
    if (isset($_POST['update'])){
       $id = $_POST['brand_id'];
       $title = $_POST['title'];
       $desc = $_POST['description'];
       $conn->query("update brands set brand_name='$title', description='$desc' where brand_id=$id");
       header("location:manage_brand.php");
    }
    $conn->close();
