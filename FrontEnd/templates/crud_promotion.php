<?php
    include_once('../config/connect.php');

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