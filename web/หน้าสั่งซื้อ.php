<?php include "../connect/connect_db.php"; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 
  <style>
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
.input-oder{
  width: 90px;
  height: 40px;
  border-radius:25px;
  background:red;
  color:white;
  border:none;
}
.input-oder:hover{
  background:white;
  color:red;
}

    </style>
  
</head>
<body  style="background-color:#E4C49B" >
 

  <div class="row" style="background-color:white" ><!-- เริ่มต้น Banner -->
  
    <div class="col-md-9"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLIBWKVwA1ezC9ix7P4jDbUxeFBKG33S2JTg&usqp=CAU" width="130px"></div>   
    <div class="col-md-3">
      <form action="/action_page.php"><br><br><br>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"> </i></button>
      

    </form>
                </div>
              
</div><!-- สิ้นสุด Banner -->

<center>
  <div class="row"style="background-color:black;"><!--เปิด menu-->
    <div class="col-md-12" >
    <div class="btn-group">
            
              
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
  <a href="home.php" class="btn btn-warning">หน้าหลัก</a>
</li> 

<li class="dropdown">
  <a href="webgroup.html" class="btn btn-warning">สินค้า</a>
  <div class="dropdown-content">
  <a href="สินค้าใหม่.php">สินค้าใหม่</a>
  <a href="ชุดทานอาหาร.php">ชุดทานอาหาร</a>
  <a href="ชุดนั่งเล่น.php">ชุดนั่งเล่น</a>
  <a href="ชุดห้องนอน.php">ชุดห้องนอน</a>
  <a href="ชุดห้องทำงาน.php">ชุดห้องทำงาน</a>
 
</li>


<li class="dropdown">
  <a href="โปรโมชั่น.php" class="btn btn-warning">โปรโมชั่น</a>
 
</li>
  <li class="nav-item">
      <a href="webcargo.html" class="btn btn-warning">เกี่ยวกับเรา</a>
  </li>
  <li class="nav-item">
      <a href="websun.html" class="btn btn-warning">ช่วยเหลือ</a>
  </li>
  <li class="nav-item">
      <a href="login.html" class="btn btn-warning">Login</a>
  </li>
</ul>

</ul>
        </div>
    </div>
   <br>
</div><!--ปิด class row menu-->
<br>

<?php
$get_web_id=$_REQUEST['web_id'];
 
 try{
    $sql_select= $conn->prepare("SELECT * 
    FROM product_shop
    LEFT JOIN product_type_shop
    ON product_shop.product_type = product_type_shop.product_type_id
    where product_id=$get_web_id;");//การเขียนคำสั่ง SQL
    $sql_select->execute();//สั่งให้ sql_select ทำงาน
    $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);      
 
 
    }
    catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
//$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
?>

<form action="oder-insert.php">

    <div class="row"><!-- เริ่มต้น  -->
            
        <div class="col-md-6" style=""><br><center>
          <img id="myimage" src="../img/<?php echo $row_select['product_img']; ?>" width="600" height="500">
    </center><br>
        </div>
        <hr>
        <div class="col-md-6" style=""><br>
        <div class="block-pd-1">
                
                <h1 style="color:white;"><?php echo $row_select['product_name']; ?></h1>
            </div>
            <hr>
            <div class="block-pd-1">
                
                <h2 style="color:white;">รุ่น <?php echo $row_select['product_model']; ?></h2>
            </div>
            <hr>
            <div class="block-pd-1">
                
                <h2 style="color:white;"><?php echo $row_select['product_color']; ?></h2>
            </div>
            <hr>
           
            <hr>
            <div class="block-pd-2">
                <h1 style="color:white;"><?php echo $row_select['product_price']; ?> Bath</h1>
            </div>
            <hr>
            <div class="block-pd-3"></div>

            <input class="input-oder" type="submit" value="สั่งซื้อ">
        </div>
        
    </div>
    <br>
    

    </form>

</body>
</html>