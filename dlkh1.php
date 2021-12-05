<html>
<head>
    <title> Tim kiem </title>
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
    .f2{
        font-size: 35px;
        margin-top: 30px;
    }
    .site-tile{
        margin-left: 20x;

    }
    .row{
        margin-left: 90px;
    }
    .col-8{
        margin-left: 30%;
    }
    .echo,table,th,td{
        font-size: 25px;
        margin-left: 15px;
    } 
    .c{
            font-size:20px;
            color:#008000;
            background-color: #C0C0C0;
        }
    .k{
        font-size: 25px;
    }
    </style>
</head>
<body>
    <header class="sticky-top">
        <div class= "container">
            <div class="row"> 
                <div class= "col-2 menu">
                   <h1 class="site-title"> PETS STORE</h1>
                </div>               
                 <div class="col-2">

                </div>
                <div class="col-8 menu">
                    <ul>
                        <li><a href= "PETS.php">Trang chủ</a></li>
                        <li><a href= "order.php">Order </a></li>
                        <li><a href= "">Sản phẩm </a>
                            <ul class="menu_sp">
                                <li><a href="sp nb.php">Sản phẩm nổi bật</a></li>
                                <li><a href="spm.php">Sản phẩm mới </a></li>
                               
                        </ul>
                            
                        </li>
                        <li><a href= "dlkh1.php"> Tìm kiếm  </a></li>
                        <li><a href= "">Đăng ký/ Đăng nhập</a>
                            <ul class="menu_sp">
                                <li><a href="dky.php">Đăng ký</a></li>
                                <li><a href="DN.php">Đăng nhập</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>  
        </div>
        
    </header>

<?php
$link = new mysqli('localhost','root','','cn16log') or die ('Ket noi that bai');
?> 

 

<div  align="center" >
        <form action="dlkh1.php" method="get">
           <div class="f2"> Search: <input class="k" type="text" name="search"/> 
            <input  class="c" type ="submit" name="ok" value="search" /> </div>
</form>
</div>
<?php
    if(isset($_REQUEST['ok'])){
        $search= addslashes($_GET['search']);
        if(empty($search)){
            echo"Yeu cau nhap du lieu vao o trong";
        }
        else {
            $link =  new mysqli('localhost','root','','cn16log') or die ('Ket noi that bai');
          
            $query = "SELECT * FROM dlkh WHERE  makh like '%$search%' OR tenkh like '%$search%' OR sdt like '%$search%' OR donmua like '%$search%' OR email like '%$search%'";
           
         
            $sql = mysqli_query($link, $query);
            $num= mysqli_num_rows($sql);
            if($num>0 && $search != ""){
                echo "<br><br><br>";
                echo"$num KET QUA TRA VE VOI TU KHOA <b>$search</b>";
                echo "<br><br><br>";

                echo '<table border="2" cellspacing="0" cellpadding="10" width="70%">';
                echo'<tr>';
                    echo'<th> Ma KH </th>';
                    echo'<th> Ten KH </th>';
                    echo'<th> So dien thoai </th>';
                    echo'<th> Don mua  </th>';
                    echo'<th> Email</th>';
                    
                echo'</tr>';

                while($row = mysqli_fetch_assoc($sql)){
                   
                    echo'<tr>';
                        echo"<td>{$row['makh']}</td>";
                        echo"<td>{$row['tenkh']}</td>";
                        echo"<td>{$row['sdt']}</td>";
                        echo"<td>{$row['donmua']}</td>";
                        echo"<td>{$row['email']}</td>";
                       
                    echo'</tr>';
                   
                }
                echo'</table>';
            }
            else{
                echo"Khong tim thay ket qua!";
            }
        }
    }
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <div class="container">
        <div class="row footer">
            <div class="col-3">
                <h3> Tài khoản của bạn  </h3>
                <ul class="menu_footer">
                    <li><a href=""> Trạng thái đơn hàng  </a></li>
                    <li><a href=""> Lịch sử đơn hàng  </a></li>
                    <li><a href="dlkh1.php"> Tìm kiếm  </a></li>
                    <li><a href=""> Chính sách bảo mật  </a></li>
              
                </ul>
            </div>

            <div class="col-3">
            <h3> Hỗ trợ </h3>
                <ul class="menu_footer">
                    <li><a href=""> Liên hệ hỗ trợ  </a></li>
                    <li><a href=""> Chính sách đổi hàng </a></li>
                    <li><a href=""> Hướng dẫn mua hàng  </a></li>
                    <li><a href=""> Quan điểm kinh doanh  </a></li>
                   
                </ul>
            </div>
            
            <div class="col-3">
            <h3> Về Pets Store</h3>
                <ul class="menu_footer">
                    <li><a href="gt.php"> Giới thiệu  </a></li>
                    <li><a href=""> Các cửa hàng </a></li>
                    <li><a href=""> Tuyển dụng  </a></li>
                    
                   
                </ul>
            </div>

            <div class="col-3">
            <h3> Liên hệ </h3>
                <ul class="menu_footer">
                    <li><a href=""> 25 Nguyễn Trãi, TP.Hà Nội </a></li>
                    <li><a href=""> 0989 488 128  </a></li>
                    <li><a href=""> thuytien@petstore.vn</a></li>
                   
                   
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 copy_right">
            <a href="">No copyRight designer By thuytien@student.edu.vn </a>
        </div>
    </div>

</footer> 
</body>
</html>