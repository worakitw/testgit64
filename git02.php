<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    
    h1 {
  background-color: white;
  border-radius: 30px ;
  color: coral;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  
}

.fa {
  padding: 10px;
  font-size: 15px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 30%;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-instagram {
  background: pink;
  color: white;
}
.collapsible {
  background-color: #FD6A02 ;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 50%;
  border: none;
  text-align: center;
  outline: ;
  font-size: 18px;
  border-radius: 16px;
}
.btn:hover {opacity: 5}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: white ;
  border-radius: 30px;
}

.title {
  color: black;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: #FD6A02;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size:20px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

body {
  background-image: url("https://i.pinimg.com/originals/fc/ce/be/fccebe7daf018850e095d9962cadebff.gif");
  max-width: 500px;
  text-align: center;
  margin: auto;
  
}
img {
  width: 20%;
  height: auto;
  margin: left;
}
.content {
  padding: 0 20px;
  display: none;
  overflow: hidden;
  background-color: lightyellow;
}

</style>
</head>
<body>



<div class="card">
<h1>ประวัติส่วนตัว</h1>
  <img src="pic/john.jpg" alt="John" style="width:80%;border-radius: 30px;" >
  <h2><img src="pic/2.gif"  style="width:10%; margin-top:15px" >กิตติศักดิ์ เพ็ญแจ่ม<img src="pic/2.gif"  style="width:10%; margin-top:15px" ></h2>
  <p class="title">สทส.1/1 </p>
  <p>เทคนิคชลบุรี</p>
  <button type="button" class="collapsible">ข้อมูลส่วนตัว</button>
<div class="content">
  <p>เพือนสนิท : เด่น/อ้วน/เซฟ/แม็ก/แก่</p>
  <p>กีฬาที่ชอบ : บาสเก็ตบอล</p>
  <p>งานอดิเรก : เล่นเกม/เล่นบาส</p>
  <p>อาหารที่ชอบ : ข้าวมันไก่/ก๋วยเตี๋ยว/ข้าวผัด</p>
</div>
  <div style="margin: 24px 0;">  
    <a href="https://web.facebook.com/tepza.brabra/"><i class="fa fa-facebook"></i></a>
    <a href="https://www.instagram.com/gods_sky00/" class="fa fa-instagram"></a>
  </div>
  
  <img  src="pic/gartoon.gif" width="46" height="34" magin ="right">

  <p><button></button></p>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</body>
</html>
