<?php
    include_once('../../../config/connect.php');

    // create data
    if (isset($_POST['create_company'])){
        $id = $_POST['id'];
        $name = $_POST['company_name'];
        $province = $_POST['province'];
        $phone = $_POST['company_phone'];
        $desc = $_POST['description'];

        if (empty($id) || empty($name) || empty($province) || empty($phone)){
            $error = "Field is required !";
        }elseif(!empty($id) && !empty($name) &&!empty($province) &&!empty($phone)){
            $query = "INSERT INTO companies (user_id,company_name,province,phone,description) VALUES ('$id','$name','$province','$phone','$desc')";
            if (mysqli_query($conn,$query)){
                header("location: manage_company.php");
            } else{
                header("location: manage_company.php");
                echo 'query error: ' .mysqli_error($conn);
            }
        }
    }

    $id ='';
    //delete user
    if (isset($_GET['delete'])){
       $id = $_GET['delete'];
       $conn->query("delete from companies where user_id=$id");
       header("location: manage_company.php");
    }

    //edit user
    //catch user
    if (isset($_GET['edit'])){
       $id = $_GET['edit'];
       $result = $conn->query("select * from companies where user_id=$id");
          $row = $result->fetch_array();
          $id = $row['user_id'];
          $name = $row['company_name'];
          $province = $row['province'];
          $phone = $row['phone'];
          $desc = $row['description'];
          echo $desc;
    }
    // update user
    if (isset($_POST['update_company'])){
       $id = $_POST['user_id'];
       $name = $_POST['name'];
       $province = $_POST['province'];
       $phone = $_POST['phone'];
       $desc = $_POST['description'];
       $conn->query("update companies set company_name='$name',province='$province',phone='$phone', description='$desc' where user_id=$id");
       header("location:manage_company.php");
    }