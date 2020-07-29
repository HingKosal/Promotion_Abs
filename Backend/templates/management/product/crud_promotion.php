<?php
    include_once('../../../config/connect.php');

    // create data
    $image_name = "";
    $published = "";
    if (isset($_POST['create_promotion'])){
        $image_name = time().'_'. $_FILES['image']['name'];
        $destination = "../../../images/".$image_name;
        $resultimage = move_uploaded_file($_FILES['image']['tmp_name'],$destination);

        // if($resultimage){
        //     echo $_POST['image'] = $image_name;
        // }else{
        //     echo 'Failed to upload image';
        // }
        $name = $_POST['product_name'];
        $cid = $_POST['category_id'];
        $bid = $_POST['brand_id'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $desc = $_POST['description'];
        $sid = $_POST['size_id'];
        $company_id = $_POST['user_id'];
        $location = $_POST['location'];
        $phone = $_POST['phone'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $published = $_POST['published'];

        if (empty($name) || 
            empty($cid) || 
            empty($bid)|| 
            empty($price) ||
            empty($discount) || 
            empty($desc) ||
            empty($sid) || 
            empty($company_id) ||
            empty($location) || 
            empty($phone)){
            $error = "Field is required !";

        }elseif(!empty($name) && 
                !empty($cid) && 
                !empty($bid) && 
                !empty($price) && 
                !empty($discount) &&
                !empty($desc) &&
                !empty($sid) &&
                !empty($company_id) &&
                !empty($location) &&
                !empty($phone)){
            $query = "INSERT INTO manage_promotion 
                     (product_name,
                      category_id,
                      brand_id,
                      price,
                      discount,
                      description,
                      image,
                      size_id,
                      user_id,
                      location,
                      phone,
                      published) 
                      VALUES ('$name',
                              '$cid',
                              '$bid',
                              '$price',
                              '$discount',
                              '$desc',
                              '$image_name',
                              '$sid',
                              '$company_id',
                              '$location',
                              '$phone',
                              '$published')";
            if (mysqli_query($conn,$query)){
                header("location: manage_promotion.php");
            } else{
//                header("location: manage_promotion.php");
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

    // view promotion
    if (isset($_GET['view'])){
        $id = $_GET['view'];
        $result = $conn->query("select * from manage_promotion where promotion_id=$id");
        $row = $result->fetch_array();
        $id = $row['promotion_id'];
        $name = $row['product_name'];
        $cid = $row['category_id'];
        $bid = $row['brand_id'];
        $image_name1 = $row['image'];
        $resulbrand = $conn->query("select * from brands where brand_id=$bid");
        $rowbrand = $resulbrand->fetch_array();
        $bname = $rowbrand['brand_name'];
        $price = $row['price'];
        $discount = $row['discount'];
        $desc = $row['description'];
        $sid = $row['size_id'];
        $resultsize = $conn->query("select * from size where size_id=$sid");
        $rowsize = $resultsize->fetch_array();
        $sizename = $rowsize['name'];
        $uid = $row['user_id'];
        $resultcompany = $conn->query("select * from companies where user_id=$uid");
        $rowcompany = $resultcompany->fetch_array();
        $companyname = $rowcompany['company_name'];
        $location = $row['location'];
        $phone = $row['phone'];
  }