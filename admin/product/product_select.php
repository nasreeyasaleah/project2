<?php include "../../connect/connect_db.php"; ?> 
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
      
    </head>
    <title>เเสดงข้อมูลสินค้าทั้งหมด</title>
    <body>
    <div class="container mt-3">
   
        <center> 
        <a href="product_form_insert.php"> -เพิ่มข้อมูลสินค้า </a>
        <a href="product_type_form_insert.php"> -เพิ่มประเภทข้อมูลสินค้า </a>
        <table class="table table-striped">
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>ประเภทสินค้า</th>
                <th>รุ่นสินค้า</th>
                <th>สี</th>
                <th>ราคา</th>
                <th>ชื่อผู้ซื้อ</th>
                <th>รูปภาพ</th>
                <th>เเก้ไข</th>
                <th>ลบ</th>

                
                
            </tr>
          
            <?php //จอย
                  try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM product_shop
                    LEFT JOIN product_type_shop
                    ON product_shop.product_type = product_type_shop.product_type_id");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
            <tr>
                <td><?php echo $row_select['product_id'];  ?></td>
                <td><?php echo $row_select['product_name']; ?></td> 
                <td><?php echo $row_select['product_type_name']; ?></td> 
                <td><?php echo $row_select['product_model']; ?></td>
                <td><?php echo $row_select['product_color']; ?></td>
                <td><?php echo $row_select['product_price']; ?></td>
                <td><?php echo $row_select['user_name']; ?></td>
                <td><img src="img/<?php echo $row_select['product_img']; ?>"  style="width:120px" ></td> 

                <td><a href="product_form_update.php?update_id=<?php echo $row_select['product_id'];?>" onclick="return confirm('คุณต้องการแก้ไขใช่ไหม?');">เเก้ไข</a></td>
                <td><a href="product_delete.php?del_id=<?php echo $row_select['product_id'];?>" onclick="return confirm('คุณต้องการลบใช่ไหม?');">ลบ</a></td>            
            </tr>
                <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
            
        </table>
        </center>
    </div>
    </body>
</html>