<?php
    include_once('../../../config/connect.php');

    // create data
    if (isset($_POST['create'])){
        $id = $_POST['category_id'];
        $title = $_POST['title'];
        $desc = $_POST['description'];

        if (empty($id) || empty($title)){
            $error = "Field is required !";
        }elseif(!empty($id) && !empty($title)){
            $query = "INSERT INTO categories (category_id,title,description) VALUES ('$id','$title','$desc')";
            if (mysqli_query($conn,$query)){
                header("location: categories.php");
            } else{
                echo 'query error: ' .mysqli_error($conn);
            }
        }
    }

    $id ='';
    //delete user
    if (isset($_GET['delete'])){
       $id = $_GET['delete'];
       $conn->query("delete from categories where category_id=$id");
       header("location: categories.php");
    }

    //edit user
    //catch user
    if (isset($_GET['edit'])){
       $id = $_GET['edit'];
       $result = $conn->query("select * from categories where category_id=$id");
          $row = $result->fetch_array();
          $id = $row['category_id'];
          $title = $row['title'];
          $description = $row['description'];
    }
    //update user
    if (isset($_POST['update_category'])){
       $id = $_POST['category_id'];
       $title = $_POST['title'];
       $description = $_POST['description'];
       $conn->query("update categories set title='$title', description='$description' where category_id=$id");
       header("location:categories.php");
    }
    $conn->close();
