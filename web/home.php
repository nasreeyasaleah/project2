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
  <a href="websinca.html" class="btn btn-warning">หน้าหลัก</a>
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
      <a href="เกี่ยวกับเรา.php" class="btn btn-warning">เกี่ยวกับเรา</a>
  </li>
  <li class="nav-item">
      <a href="login.php" class="btn btn-warning">Login</a>
  </li>
</ul>

</ul>
        </div>
    </div>
   <br>
</div><!--ปิด class row menu-->
<br>
<center>

<!--slide image-->
        <div class="row">
            <div class="col-md-12" style="background-color:whith">
                <div class="w3-content w3-display-container"> 
                    <div class="w3-display-container mySlides">
                      <img src="11.jpg"width="1000" height="700">
                    </div>
               
                    <div class="w3-display-container mySlides">
                      <img src="22.jpg"width="1000" height="700">
                      
                    </div>
               
                    <div class="w3-display-container mySlides">
                      <img src="33.png" width="1000" height="700">
                     
                    </div>
                       
                    <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
                               </div><!--ปิดแถว3-->
      
    </div><!--จบbody เนื้อหา-->
<br>
</div><!-- สิ้นสุด Banner -->
                    </div>
                    <script>
                        var slideIndex = 1;
                        showDivs(slideIndex);
                        
                        function plusDivs(n) {
                          showDivs(slideIndex += n);
                        }
                        
                        function showDivs(n) {
                          var i;
                          var x = document.getElementsByClassName("mySlides");
                          if (n > x.length) {slideIndex = 1}
                          if (n < 1) {slideIndex = x.length}
                          for (i = 0; i < x.length; i++) {
                             x[i].style.display = "none";  
                          }
                          x[slideIndex-1].style.display = "block";  
                        }
                        </script>     
                      </div>   
 

  <div class=row><!--ช่องทาง-->
    <div class="col-md-12" >
    <div class="btn-group">
            
              
<ul class="nav nav-tabs" role="tablist">

<li class="nav-item">
  <a href="webcoupon.html" class="btn btn-"><img class="card-img-top" src="https://www.furs2shop.com/images/editor/FB.png" width="70" height="50"></a>
</li>

<li class="nav-item">
  <a href="webโปรโมชั่นทางร้าน.html" class="btn btn-"><img class="card-img-top" src="https://www.furs2shop.com/images/editor/IG.png" width="70" height="50"></a>
  </li>
<li class="nav-item">
  <a href="webโปรโมชั่นยี่ห้อ.html" class="btn btn-"><img class="card-img-top" src="https://www.furs2shop.com/images/editor/Line@.png" width="70" height="50"></a>
  </li>
  <li class="nav-item">
      <a href="ศูนย์บริการ.html" class="btn btn-"><img class="card-img-top" src="https://www.furs2shop.com/images/editor/Shopee.png" width="70" height="50"></a>
      </li>
  
  <li class="nav-item">
</ul>

</ul>
        </div>
    </div>
   <br>
</div><!--ปิด ช่องทาง-->
<br>

<!-- เริ่มสินค้าใหม่ -->
<div class = "container">
<div style="background-color: orange;color:black; border-style: outset;border-radius: 10px;" class="container">
      <h3>สินค้าใหม่</h3>
                      </div><br>
<div class="row">

  <?php
                try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM product_shop
                    LEFT JOIN product_type_shop
                    ON product_shop.product_type = product_type_shop.product_type_id 
                    order by product_id DESC limit 4");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>

<div class="col-sm-3">
          <div class="card" style="width:250px;height:350px" >
           <img class="card-img-top" src="../img/<?php echo $row_select['product_img'];?>" alt="Card image" style="width:100%;height:200px"  >
              <div class="card-body">
                <h4 class="card-title"><?php echo $row_select['product_name']; ?></h4>
                <h4 class="card-title" style="color:orange">ราคา : <?php echo $row_select['product_price']; ?></h4>
               
               </div>
           </div><br>
       </div>


    
 <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                //$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
  
  
  </div>
</div>
<a href="สินค้าใหม่.php" class="btn btn-warning"><h4>ดูเพิ่มเติม</h4></a>
<br><br>
<!--ปิดสินค้าใหม่ -->

<!-- เริ่มชุดทานอาหาร -->
<div class = "container">
<div style="background-color:orange;color:black; border-style: outset;border-radius: 10px;" class="container">
      <h3>สินค้าชุดทานอาหาร</h3>
                      </div><br>
<div class="row">

  <?php
                try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM product_shop
                    LEFT JOIN product_type_shop
                    ON product_shop.product_type = product_type_shop.product_type_id 
                    where product_type_id='8' order by product_id desc limit 4 ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>

<div class="col-sm-3">
          <div class="card" style="width:250px;height:350px" >
           <img class="card-img-top" src="../img/<?php echo $row_select['product_img'];?>" alt="Card image" style="width:100%;height:200px"  >
              <div class="card-body">
                <h4 class="card-title"><?php echo $row_select['product_name']; ?></h4>
                <h4 class="card-title" style="color:orange">ราคา : <?php echo $row_select['product_price']; ?></h4>
                <a href="order.php?web_id=<?php echo $row_select['product_id']; ?>" class="btn btn-warning">สั่งซื้อ</a>
               </div>
           </div><br>
       </div>


    
 <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                //$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
  
  
  </div>
                      </div><br><br>
       <!--ปิดชุดทานอาหาร -->

 <!-- เริ่มชุดห้องนอน -->
 <div class = "container">
 <div style="background-color:orange;color:black; border-style: outset;border-radius: 10px;" class="container">
      <h3>สินค้าชุดห้องนอน</h3>
                      </div><br><br>
<div class="row">

  <?php
                try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM product_shop
                    LEFT JOIN product_type_shop
                    ON product_shop.product_type = product_type_shop.product_type_id 
                    where product_type_id='9' order by product_id desc limit 4 ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>

<div class="col-sm-3">
          <div class="card" style="width:250px;height:350px" >
           <img class="card-img-top" src="../img/<?php echo $row_select['product_img'];?>" alt="Card image" style="width:100%;height:200px"  >
              <div class="card-body">
                <h4 class="card-title"><?php echo $row_select['product_name']; ?></h4>
                <h4 class="card-title" style="color:orange">ราคา : <?php echo $row_select['product_price']; ?></h4>
                <a href="order.php?web_id=<?php echo $row_select['product_id']; ?>" class="btn btn-warning">สั่งซื้อ</a>
               </div>
           </div><br>
       </div>


    
 <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                //$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
  
  
  </div>
                      </div><br><br>
    <!-- ปิดชุดห้องนอน-->

    <!-- เริ่มชุดห้องทำงาน-->
<div class = "container">
<div style="background-color:orange;color:black; border-style: outset;border-radius: 10px;" class="container">
      <h3>สินค้าชุดห้องทำงาน</h3>
                      </div><br>
<div class="row">

  <?php
                try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM product_shop
                    LEFT JOIN product_type_shop
                    ON product_shop.product_type = product_type_shop.product_type_id 
                    where product_type_id='6' order by product_id desc limit 4 ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>

<div class="col-sm-3">
          <div class="card" style="width:250px;height:350px" >
           <img class="card-img-top" src="../img/<?php echo $row_select['product_img'];?>" alt="Card image" style="width:100%;height:200px"  >
              <div class="card-body">
                <h4 class="card-title"><?php echo $row_select['product_name']; ?></h4>
                <h4 class="card-title" style="color:orange">ราคา : <?php echo $row_select['product_price']; ?></h4>
                <a href="order.php?web_id=<?php echo $row_select['product_id']; ?>" class="btn btn-warning">สั่งซื้อ</a>
               </div>
           </div><br>
       </div>


    
 <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                //$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
  
  
  </div>
 </div><br><br>
       <!-- ปิดชุดห้องทำงาน --> 
       
       
    <!-- เริ่มชุดห้องนั่งเล่น-->
<div class = "container">
<div style="background-color:orange;color:black; border-style: outset;border-radius: 10px;" class="container">
      <h3>สินค้าชุดห้องนั่งเล่น</h3>
                      </div><br>
<div class="row">

  <?php
                try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM product_shop
                    LEFT JOIN product_type_shop
                    ON product_shop.product_type = product_type_shop.product_type_id 
                    where product_type_id='7' order by product_id desc limit 4 ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>

<div class="col-sm-3">
          <div class="card" style="width:250px;height:350px" >
           <img class="card-img-top" src="../img/<?php echo $row_select['product_img'];?>" alt="Card image" style="width:100%;height:200px"  >
              <div class="card-body">
                <h4 class="card-title"><?php echo $row_select['product_name']; ?></h4>
                <h4 class="card-title" style="color:orange">ราคา : <?php echo $row_select['product_price']; ?></h4>
                <a href="order.php?web_id=<?php echo $row_select['product_id']; ?>" class="btn btn-warning">สั่งซื้อ</a>
               </div>
           </div><br>
       </div>


    
 <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                //$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
  
  
  </div>
 </div><br><br>
       <!-- ปิดชุดห้องนั่งเล่น -->  
       
       <center>
 
<div class=row><!--แบนร์ชั้นนำ-->

    <div class="col-md-12" ><br>
    <h3>แบรนด์ชั้นนำ</h3>  
              
    <div class="btn-group">
  
<ul class="nav nav-tabs" role="tablist">

<li class="nav-item">
  <a href="webcoupon.html" class="btn btn-"><img class="card-img-top" src="https://static.homepro.co.th/brandimage/20220715_furdini_200x200.png" width="300" height="150"></a>
</li>

<li class="nav-item">
  <a href="webโปรโมชั่นทางร้าน.html" class="btn btn-"><img class="card-img-top" src="https://static.homepro.co.th/brandimage/20211112_bewell_200x200.png" width="300" height="150"></a>
  </li>
<li class="nav-item">
  <a href="webโปรโมชั่นยี่ห้อ.html" class="btn btn-"><img class="card-img-top" src="https://static.homepro.co.th/brandimage/sure_200x200.png" width="300" height="150"></a>
  </li>
  <li class="nav-item">
      <a href="ศูนย์บริการ.html" class="btn btn-"><img class="card-img-top" src="https://static.homepro.co.th/brandimage/20210402_hls_200x200.png" width="300" height="150"></a>
      </li>
  <li class="nav-item">
      <a href="ศูนย์บริการ.html" class="btn btn-"><img class="card-img-top" src="https://static.homepro.co.th/brandimage/20210402_ergo_trend_200x200.png" width="300" height="150"></a>
  </li>
  <li class="nav-item">
      <a href="ศูนย์บริการ.html" class="btn btn-"><img class="card-img-top" src="https://static.homepro.co.th/brandimage/20210402_luckyworld_200x200.png" width="300" height="150"></a>
  </li>
  
  <li class="nav-item">
</ul>

</ul>
        </div>
    </div>
   <br>
   </center>
</div><!--ปิด ช่องทาง-->
 
<div class="row" align="center"><!--เปิด ชื่อ-->
    <div class="col-md-12" >
    <h4 style="color:rgb(2, 10, 10);"><font face="JasmineUPC"> ศูนย์รวมเฟอร์นิเจอร์ ชุดทานอาหารภายนอก ชุดทานอาหารภายใน ชุดนั่งเล่นภายนอก ชุดนั่งเล่นภายใน ชุดโซฟาภายนอก<br> 

ชุดโซฟาภายใน ชุดบาร์ภายนอก ชุดบาร์ภายใน Bean Bag สำหรับตกแต่งบ้าน คอนโด ร้านกาแฟ ร้านอาหาร ระเบียง<br> 

เรามีเฟอร์นิเจอร์ให้เลือกหลากหลายแบบ พร้อมจัดส่ง!!! สินค้าคุณภาพ พร้อมโปรโมชั่นพิเศษมากมาย รอคุณอยู่ค่ะ</font></h4>
    </div>
</div><!--ปิด ชื่อ-->

  
  <div class="row"><!-- เริ่มต้น footer -->
    <div class="col-md-4"  style="background-color:black">
    <br> <br>
        <h5 style="color: white;">ช่วยเหลือ</h5>
                                  <p style="color: white;">วิธีการช้อปออนไลน์<br>
                                    คำถามที่พบบ่อย<br>
                                    ติดตามสินค้า<br>
                                    ติดต่อเรา</p>
    </div> 
    <div class="col-md-4"  style="background-color:black">
    <br> <br>
        <h5 style="color: white;">ช้อปปิ้งกับเรา</h5>
                                  <p style="color: white;">สมาชิก Home Card<br>
                                    สาขาโฮมโปร<br>
                                    โฮมกูรู<br>
                                    งานบริการ</p>
    </div> 
    <div class="col-md-4"  style="background-color:black">
    <br> <br>
        <h5 style="color: white;">เกี่ยวกับเรา</h5>
                                  <p style="color: white;">ประวัติโฮมโปร<br>
                                    นักลงทุนสัมพันธ์<br></p>
    </div> 
    
  </div><!-- สิ้นสุด footer -->


</body>
</html>
