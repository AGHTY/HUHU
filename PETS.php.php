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
                        <li><a href= "pets.php.php">Trang chủ</a></li>
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
        <div class="col-2th">
            <div class="c">
                <div class="image">
                    <img src="https://www.thukieng.com/wp-content/uploads/2016/02/tuoi-tho-cac-giong-cho-canh-pho-bien-o-viet-nam.jpg">
                </div>
                <div class="name">
                    <a href="https://yolo.vn/tuoi-tho-cua-cho/" >Tuổi thọ trung bình của chó </a>
                </div>
                
            </div>
        </div>

        <div class="col-2th">
            <div class="c">
                <div class="image">
                    <img src="data:image/jpeg;base64,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">
                </div>
                <div class="name">
                    <a href="https://yolo.vn/nen-nuoi-cho-hay-meo/" >Nên nuôi chó hay nuôi mèo? </a>
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
