<?php
include_once('../config/connect.php');
// Define variables and initialize with empty values
$user_id = $company_name = $province = $phone = $description = "";
$user_id_err = $company_name_err = $province_err = $phone_err = $description_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["user_id"]) && !empty($_POST["user_id"])){
    // Get hidden input value
    $user_id = $_POST["user_id"];
    
    // Validate company_name
    $input_companyname = trim($_POST["company_name"]);
    if(empty($input_companyname)){
        $company_name_err = "Please enter a company name.";
    } elseif(!filter_var($input_companyname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $company_name_err = "Please enter a valid company name.";
    } else{
        $company_name = $input_companyname;
    }
    
    // Validate location
    $input_province = trim($_POST["province"]);
    if(empty($input_province)){
        $province_err = "Please enter an province.";     
    } else{
        $province = $input_province;
    }
    
    // Validate phone number
    $input_phone = trim($_POST["phone"]);
    if(empty($input_phone)){
        $phone_err = "Please enter phone number.";     
    } else{
        $phone = $input_phone;
    }

    // Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter description.";     
    } else{
        $description = $input_description;
    }

    
    
    // Check input errors before inserting in database
    if(empty($company_name_err) && empty($province_err) && empty($phone_err)&& empty($description_err)){
        // Prepare an update statement
        $sql = "UPDATE companies SET comapny_name=?, province=?, phone=? ,description=? WHERE user_id=?";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_companyname, $param_province, $param_phone, $param_user_id, $param_description);
            
            // Set parameters
            $param_companyname = $company_name;
            $param_province = $province;
            $param_phone = $phone;
            $param_description = $description;
            $param_user_id = $user_id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: home.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["user_id"]) && !empty(trim($_GET["user_id"]))){
        // Get URL parameter
        $user_id =  trim($_GET["user_id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM companies WHERE user_id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_user_id);
            
            // Set parameters
            $param_user_id = $user_id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $company_name = $row["company_name"];
                    $province = $row["province"];
                    $phone = $row["phone"];
                    $description = $row["description"];

                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conn);
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($company_name_err)) ? 'has-error' : ''; ?>">
                            <label>Company Name</label>
                            <input type="text" name="company_name" class="form-control" value="<?php echo $company_name; ?>">
                            <span class="help-block"><?php echo $company_name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($province_err)) ? 'has-error' : ''; ?>">
                            <label>Province</label>
                            <textarea name="province" class="form-control"><?php echo $province; ?></textarea>
                            <span class="help-block"><?php echo $province_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                            <label>Phone Number</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                            <span class="help-block"><?php echo $phone_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $description; ?>">
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../home/home.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
