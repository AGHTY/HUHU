<!doctype html>
<html>
<head>
    <title> HTML </title>
    <link rel="stylesheet" type="text/css" href="style.css">
 
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
                        <li><a href= "dlkh1.php"> Tìm kiếm  </a></li>
                        <li id="auth">
                            <div id="login">
                                <a href= "">Đăng ký/ Đăng nhập</a>
                                <ul class="menu_sp">
                                    <li><a href="dky.php">Đăng ký</a></li>
                                    <li><a href="DN.php">Đăng nhập</a></li>
                                </ul>
                            </div>
                            <div id="login-true">
                                Tiên
                                <button id="logout" onclick = "javascript:logout();">Đăng xuất</button>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>  
        </div>
        
    </header>


    
    <div class="container slider-margin">
        <div class="row">
            <div class="col-12">
                <div class= "slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://t3petsshop.sunowoo.com/wp-content/uploads/2019/06/pets-3715733_960_720.jpg" style="width:100%">
  <div class="text">Caption</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://cf.shopee.vn/file/6f6e04b71c7dfd050a83afdb469847b6" style="width:100%">
  <div class="text">Caption</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://xuongmocgocongnghiep.com/upload/images/thiet-ke-shop-thu-cung-4.jpg" style="width:100%">
  <div class="text">Caption</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
    </div>




    <div class="row">
        <div class="col-12 title">
            <h3> Bài viết liên quan   </h3>
        </div>
    </div>
<div class="row">
        <div class="col-2th mr-30">
            <div class="c">
                <div class="ht">
                    <img src="https://www.thukieng.com/wp-content/uploads/2016/02/tuoi-tho-cac-giong-cho-canh-pho-bien-o-viet-nam.jpg">
                </div>
                <div class="name">
                    <a href="https://yolo.vn/tuoi-tho-cua-cho/" >Tuổi thọ trung bình của chó </a>
                </div>
                
            </div>
        </div>

        <div class="col-2th mr-30">
            <div class="c">
                <div class="ht">
                    <img src="1.jpg">
                </div>
                <div class="name">
                    <a href="https://yolo.vn/nen-nuoi-cho-hay-meo/" >Nên nuôi chó hay nuôi mèo? </a>
                </div>
                
            </div>
        </div>
        <div class="col-2th">
            <div class="c">
                <div class="ht">
                    <img src="2.jpg">
                </div>
                <div class="name">
                    <a href="https://yolo.vn/cach-khu-mui-hoi-cho-meo-vat-nuoi-trong-nha/" >Cách khử mùi hôi cho động vật </a>
                </div>
                
            </div>
        </div>
</div>

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
<script>
    if (window.localStorage.isLogin) {
        document.getElementById("login-true").classList.remove("nodisplay")
        document.getElementById("login").classList.add("nodisplay")
    } else {
        console.log("object")
        document.getElementById("login").classList.remove("nodisplay")
        document.getElementById("login-true").classList.add("nodisplay")
    }

    function logout() {
        window.localStorage.removeItem("isLogin");
        document.getElementById("login").classList.remove("nodisplay")
        document.getElementById("login-true").classList.add("nodisplay")
    }
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1000);
}
</script>
</html>
