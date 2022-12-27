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
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    </style>
  
</head>
<body  style="background-color:#E4C49B" >
 

  <div class="row" style="background-color:white" ><!-- เริ่มต้น Banner -->
  
    <div class="col-md-9"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLIBWKVwA1ezC9ix7P4jDbUxeFBKG33S2JTg&usqp=CAU" width="130px"></div>   
    <div class="col-md-3">
      <form action="/action_page.php"><br><br><br>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
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
  <a href="home.php" class="btn btn-warning">สินค้า</a>
  <div class="dropdown-content">
  <a href="สินค้าใหม่.php">สินค้าใหม่</a>
  <a href="ชุดทานอาหาร.php">ชุดทานอาหาร</a>
  <a href="ชุดนั่งเล่น.php">ชุดนั่งเล่น</a>
  <a href="ชุดห้องนอน.php">ชุดห้องนอน</a>
  <a href="ชุดห้องทำงาน.php">ชุดห้องทำงาน</a>
 
</li>


<li class="dropdown">
  <a href="โปรโมชั่น.php" class="btn btn-warning">โปรโมชั่น</a>
  <div class="dropdown-content">
 
</li>
  <li class="nav-item">
      <a href="เกี่ยวกับเรา.php" class="btn btn-warning">เกี่ยวกับเรา</a>
  </li>
 
  <li class="nav-item">
      <a href="login.php" class="btn btn-warning">Login</a>
  </li>
</ul>

</ul>

</ul>
        </div>
    </div>
   <br>
</div><!--ปิด class row menu-->

<div class="row"><!-- เริ่มต้น สินค้าใหม่-->

    <div>
      &nbsp;
    </div>
    <div style="background-color:orange;color:blact; border-style: outset;border-radius: 8px;" class="container">
      <h3>สินค้าชุดห้องทำงาน</h3>
    </div>
    <div class="container">
    <br>
        <div class="row">
        <?php //จอย
                  try{
                    $sql_select_fruits= $conn->prepare("SELECT *  
                    FROM product_shop
                    LEFT JOIN product_type_shop
                    ON product_shop.product_type = product_type_shop.product_type_id
                    where product_type_id='6' ");
                    $sql_select_fruits->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select_fruits = $sql_select_fruits->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
    <div class="col-sm-3">
    <div class="card" style="width:270px">
    <img class="card-img-top" src="../admin/product/img/<?php echo $row_select_fruits['product_img']; ?>" alt="Card image" width="300" height="250">
    <div class="card-body">
      <h4 class="card-title"><?php echo $row_select_fruits['product_name']; ?></h4>
      <h5 class="card-title" style="color:red"><?php echo $row_select_fruits['product_price']; ?> บาท</h5>
      <a href="order.php?web_id=<?php echo $row_select_fruits['product_id']; ?>" class="btn btn-warning">สั่งซื้อ</a>
    </div>

    </div>
    </div>
     <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                //$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
</center>
</div><br>

   
  
<center> <br> <br>
</html>