


<!DOCTYPE html>
<html>

    <head>
    <title> đăng nhập  </title>
    <link rel="stylesheet"  type= "text/css" href="style.css">

    <style>
        .f1{
            margin-left: 30%;
            font-size: 25px;
        }
        .c{
            font-size:20px;
            color:#008000;
            background-color: #C0C0C0;
            
        }
        .hg{
            color:#FF0000;
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
                        <li><a href= "order.php">Order </a></li>
                        <li><a href= "">Sản phẩm </a>
                            <ul class="menu_sp">
                                <li><a href="sp nb.php">Sản phẩm nổi bật</a></li>
                                <li><a href="spm.php">Sản phẩm mới </a></li>
                        </ul>
                        </li>
                        <li><a href= "dlkh1.php">Tìm kiếm </a></li>
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
       <br> <H1 class="hg">Đăng nhập </H1> <br>
       
<form method="get" id="form1" action="PETS.php"> 
 Name: <input type="name" name="fname" id="name-input"> 
 <span id="loi_name" class="Baoloi" ></span><br><br>
 Password:  <input type="password" name="mk" id="password-input">
 <span id="loi_pass" class="Baoloi" ></span><br><br>
<input class="c" type="button" name="OK" onclick = "javascript:Chapnhan();" value="Đăng nhập" size="20px" >
<a class="c" href='dky.php' title='Đăng ký'>Đăng ký</a>

</div>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
<script>
    document.getElementById("name-input").focus();

function Chapnhan() {
	var okie = true; //chua co loi
	//xoa cac thong bao loi
	document.getElementById("loi_name").innerHTML  = "";
	document.getElementById("loi_pass").innerHTML = "";

    //kiem tra cac truong bat buoc nhap
    if (document.getElementById("name-input").value == "") {
        document.getElementById("loi_name").innerHTML = "Quý vị chưa nhập tên sử dụng";
        document.getElementById("name-input").focus();
        okie = false;
    } else if (document.getElementById("name-input").value !== "tien") {
		document.getElementById("loi_name").innerHTML = "Quý vị nhập sai tên";
		document.getElementById("name-input").focus();
		okie = false;
	}

	if (document.getElementById("password-input").value == "") {
		document.getElementById("loi_pass").innerHTML = "Quý vị chưa nhập mật khẩu";
		document.getElementById("password-input").focus();
		okie = false;
	} else if (document.getElementById("password-input").value !== "1234") {
		document.getElementById("loi_pass").innerHTML = "Quý vị nhập sai mật khẩu";
		document.getElementById("password-input").focus();
		okie = false;
	}


	//neu tất cả các dữ liệu được nhập đúng đắn
	//submit form
	if (okie) {
        window.localStorage.setItem("isLogin", true);
        document.getElementById("form1").submit();
    }
}
</script>
</body>
</html>
