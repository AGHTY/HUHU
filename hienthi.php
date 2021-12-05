<!doctype html>
<html>
<head>
    <title> HTML </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .f1{
            margin-left: 30%;
            font-size: 35px;
            
        }
        .f2{
            margin-left: 30%;
            font-size: 35px;
            color:#FF0000;
        }
        .c{
            font-size:20px;
            color:#008000;
            background-color: #C0C0C0;
        }
        .a{
            font-size:20px;
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
                        <li><a href= "pets.php">Trang chủ</a></li>
                        <li><a href= "">Order </a>
                        <li><a href= ""> Sản phẩm  </a>
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
    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXmqiVo5NgV3FihqwVD8qmNFc6tx8BdYlYuA&usqp=CAU"   style: width="400" height="400" align = left />
    <div class="f1">
        <h1> Đặt hàng </h1> <br><br>
        <form name ="f1" method = "get" action="hienthi.php">
        Họ tên: <input type = "text" name="ten" value=""><br> <br>
        Loại sản phẩm: <select name="lsp" class="a">
                <option>quần áo  </option>
                <option>đồ ăn hạt </option>
                <option> phụ kiện  </option>
                <option> chuồng/nhà</option>
    </select>
                <br> <br>
        Tên sản phẩm: <input type = "text" name="ten" value=""><br> <br>
        <input class= "c" type="submit" name="OK" value="OK" />
        <p class="f2">Đặt hàng thành công ! </p>
    </div>
<br><BR><BR><BR><br><BR><BR><BR><br><BR><BR><BR><br>
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