<?php
    include_once('../../../config/connect.php');

    // create data
    if (isset($_POST['create_promotion'])){
        $id = $_POST['promotion_id'];
        $name = $_POST['product_name'];
        $cid = $_POST['category_id'];
        $bid = $_POST['brand_id'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $desc = $_POST['description'];
        $sid = $_POST['size_id'];
        $companyid = $_POST['user_id'];
        $location = $_POST['location'];
        $phone = $_POST['phone'];

        if (empty($id) ||
            empty($name) || 
            empty($cid) || 
            empty($bid)|| 
            empty($price) ||
            empty($discount) || 
            empty($desc) || 
            empty($sid) || 
            empty($companyid) || 
            empty($location) || 
            empty($phone)){
            $error = "Field is required !";

        }elseif(!empty($id) && 
                !empty($name) && 
                !empty($cid) && 
                !empty($bid) && 
                !empty($price) && 
                !empty($discount) &&
                !empty($desc) &&
                !empty($sid) &&
                !empty($companyid) &&
                !empty($location) &&
                !empty($phone)){
            $query = "INSERT INTO manage_promotion 
                     (promotion_id,
                      product_name,
                      category_id,
                      brand_id,
                      price,
                      discount,
                      description,
                      size_id,
                      user_id,
                      location,
                      phone) 
                      VALUES ('$id',
                              '$name',
                              '$cid',
                              '$bid',
                              '$price',
                              '$discount',
                              '$desc',
                              '$sid',
                              '$companyid',
                              '$location',
                              '$phone')";
            if (mysqli_query($conn,$query)){
                header("location: manage_promotion.php");
            } else{
                header("location: manage_promotion.php");
                echo 'query error: ' .mysqli_error($conn);
            }
        }
    }

    $id ='';
    //delete user
    if (isset($_GET['delete'])){
       $id = $_GET['delete'];
       $conn->query("delete from manage_promotion where promotion_id=$id");
       header("location: manage_promotion.php");
    }

    //edit user
    //catch user
    if (isset($_GET['edit'])){
       $id = $_GET['edit'];
       $result = $conn->query("select * from manage_promotion where promotion_id=$id");
          $row = $result->fetch_array();
          $id = $row['promotion_id'];
          $name = $row['product_name'];
          $cid = $row['category_id'];
          $bid = $row['brand_id'];
          $price = $row['price'];
          $discount = $row['discount'];
          $desc = $row['description'];
          $sid = $row['size_id'];
          $uid = $row['user_id'];
          $location = $row['location'];
          $phone = $row['phone'];
    }
    // update user
    if (isset($_POST['update_promotion'])){
        $id = $_POST['promotion_id'];
        $name = $_POST['product_name'];
        $cid = $_POST['category_id'];
        $bid = $_POST['brand_id'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $desc = $_POST['description'];
        $sid = $_POST['size_id'];
        $uid = $_POST['user_id'];
        $location = $_POST['location'];
        $phone = $_POST['phone'];
       $conn->query("update manage_promotion set product_name='$name',category_id='$cid',brand_id='$bid',
       price='$price',discount='$discount', description='$desc', size_id='$sid',user_id='$uid', location='$location',phone='$phone' where promotion_id=$id");
       header("location:manage_promotion.php");
    }