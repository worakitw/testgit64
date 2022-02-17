<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image:url("jpg11/111.jpg");
  height: 200%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-family: Arial, Helvetica, sans-serif;  
}
* {box-sizing: border-box}

.container {
  width: 100%;
  background-color: #ddd;
}

.skills {
  text-align: center;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}

.html {width: 90%; background-color: #2196F3;}
.css {width: 80%; background-color: #CC00CC;}
.js {width: 100%; background-color: #f44336;}
</style>
</head>
<body>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="color:#FF0000; font-size:230px">Profile</h1>
    <br>
    <h1 style="font-size:40px">Phichaiyut Watsaro</h1>
    <h1 style="font-size:40px">พิชัยยุทธ วัชโร</h1>
    <p>เรียนอยู่แผนก: เทคโนโลยีสารสนเทศ</p>
    <p>งานอดิเรก: เล่นเกม เลี้ยงแมวอยู่บ้าน</p>
    <p>อายุ: 20 ปี</p>
    <br><br>
    <h1>Skills</h1>
    <p>PhotoShop</p>
<div class="container">
  <div class="skills html">90%</div>
</div>

    <p>Premiere pro</p>
    <div class="container">
        <div class="skills css">80%</div>
    </div>

    <p>Game Battlefield 5</p>
    <div class="container">
        <div class="skills js">100%</div>
    </div>
  </div>
</div>

</body>
</html>