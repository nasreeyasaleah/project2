<?php include "../../connect/connect_db.php"; 
$get_update_id=$_REQUEST['update_id'];
 
 try{
    $sql_select= $conn->prepare("SELECT * FROM product_shop where product_id='$get_update_id'");//การเขียนคำสั่ง SQL
    $sql_select->execute();//สั่งให้ sql_select ทำงาน
    $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);      
 
 
    }
    catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
//$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
?>
 
 
<html>
    <head>
        <title>เเบบฟอร์มเเก้ไขข้อมูลสินค้า</title>
    </head>
    <body>
        <center>
        <form action="product_update.php?update_id=<?php echo $get_update_id; ?> " method="post"enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสินค้า</h1></td>
                </tr>
                <tr>
                    <td>ชื่อสินค้า</td>
                    <td><input type="text" name="fname" value="<?php echo $row_select['product_name'];?>"></td>
                </tr>
                <tr>
                    <td>ประเภทสินค้า</td>
                    <td>
                    <select name="ftype">  
                        <?php
                            try{
                                $sql_selects= $conn->prepare("SELECT * FROM product_type_shop"); 
                                $sql_selects->execute();//สั่งให้ sql_select ทำงาน
                                while($row_selects = $sql_selects->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_selects['product_type_id']; ?>"><?php echo $row_selects['product_type_name'];?></option> 
                        <?php 
                                }
                            }
                        catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                        $conn = null;//เคลีย์ค่าในการดึงข้อมูล     
                        ?>
 
                    </select>    
                    </td>
                </tr>
                <tr>
                    <td>รุ่นสินค้า</td>
                    <td><input type="text" name="fmodel"></td>
                </tr>
                <tr>
                    <td>สี</td>
                    <td><input type="text" name="fcolor"></td>
                </tr>
                <tr>
                    <td>ราคา</td>
                    <td><input type="text" name="fprice"></td>
                </tr>
                <tr>
                    <td>ชื่อผู้ซื้อ</td>
                    <td><input type="text" name="fuser"></td>
                </tr>
                    <td>รูปภาพ</td>
                    <td> <input type="file" name="fimg" value="<?php echo $row_select['product_img'];?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสินค้า"></td>
                </tr>
            </table>
        </form>
    </center>
    </body> 
</html>

