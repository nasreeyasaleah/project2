<?php include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_name=$_REQUEST['fname'];
$get_type=$_REQUEST['ftype'];
$get_model=$_REQUEST['fmodel'];
$get_color=$_REQUEST['fcolor'];
$get_price=$_REQUEST['fprice'];
$get_user=$_REQUEST['fuser'];
$filename = $_FILES["fimg"]["name"];

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fimg"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fimg"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fimg"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fimg"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fimg"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
 
 
 
try{
      
    $sql_update = "UPDATE product_shop 
            SET product_name='$get_name',
                product_type='$get_type',
                product_model='$get_model',
                product_color='$get_color',
                product_price='$get_price',
                user_name='$get_user',
                product_img='$filename'
            WHERE product_id='$get_update_id' ";
  
    $stmt = $conn->prepare($sql_update);
    $stmt->execute();
  
    echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";      
    echo "<script>window.location.href='product_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>

