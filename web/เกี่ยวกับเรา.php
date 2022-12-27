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
  <a href="หน้าหลัก.php" class="btn btn-warning">หน้าหลัก</a>
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
<br>
<center>

    <h1>ติดต่อเรา</h1>
    <div class="row" style="background-color:white" ><!-- เริ่มต้น Banner -->
  
  <div class="col-md-6"><img src="https://www.furs2shop.com/modules/flexi/ready_template/images/section-images/section7-image1.png" width="130px">  
  <p>ติดต่อเรา<br>
ที่ตั้ง : 321 ถ.ประดิษฐ์มนูธรรม แขวง/เขต วังทองหลาง<br>
จังหวัด กรุงเทพมหานคร รหัสไปรษณีย์ 10310 ประเทศไทย<br>
โทรศัพท์ : 02-514-3434 ต่อ 701 (โชว์รูม)<br>
แฟกซ์ : 02-514-3436<br>
โทรศัพท์มือถือ : 081-359-9003<br>
อีเมล : furs2shop@naturecorners.co.th<br>
เว็บไซต์ : www.furs2shop.com<br>
เวลาให้บริการ (Business hour)<br>
จันทร์ - ศุกร์ เวลา 10.00 - 19.00 น.<br>
เสาร์ - อาทิตย์ เวลา 10.00 - 18.00 น.<br>

สั่งซื้อผ่านเว็บไซต์ตลอด 24 ชั่วโมง<br>
เราขอขอบคุณลูกค้าทุกท่าน ที่ให้ความสนใจ Furs2shop<br>
และหวังเป็นอย่างยิ่ง ที่จะได้ร่วมเป็นส่วนหนึ่งในการเติมเต็มทุก Lifestyle</p></div> 
  <div class="col-md-6">
  <img src="https://www.furs2shop.com/images/editor/Furs2Shop-Map.jpg" width="100%"></div>
              </div>
            
</div><!-- สิ้นสุด Banner -->

</body>
</html>
