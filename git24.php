<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My git web</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    #imgme{
        width: 100%;
    }
    body{
        background-color: darkslategray;
    }
    .container{
        background-color: whitesmoke;
        padding: 30px;
        border-radius: 30px;
    }
    .toprow{
        margin-top: 30px;
    }
    .center_text{
        text-align: center;
        font-weight: bolder;
    }
    .side{
        background-color: darkkhaki;
        padding: 20px;
        border-radius: 20px;
    }
    .bord{
        border: dashed 5px brown;
        padding: 25px 0px;
    }
    a{
        color: red;
    }
    a:hover{
        color: darkred;
    }
</style>
<body>
<?php
    include_once "jumbotron.php";
    include_once "navigator.php";
?>
    <div class="header"></div>
    <div class="container toprow">
        <div class="row">
            <div class="col-sm-5 center_text mainpic"><img src="image/myPic.jpg" id="imgme"></div>
            <div class="col-sm-7 side">
                <h2 class="center_text bord">นางสาวแพรวา เทียนขจร</h2>
                <p>แผนกเทคโนโลยีสารสนเทศ</p>
                <p>ปวส.1/2</p>
                <p>เกิดวันที่ 15 มกราคม 2545</p>
                <hr>
                <h4 class="center_text">เพื่อนสนิท</h4>
                <p>นางสาวพิมพาภรณ์ พงศ์พัชรา</p>
                <p>นายนภสินธุ์ วงศ์ศรุตวาณิช</p>
                <p>นายอภิชาติ สีทน</p>
                <hr>
                <h4 class="center_text">งานอดิเรก</h4>
                <ul>
                    <li>วาดรูป</li>
                    <li>แต่งนิยาย</li>
                    <li>ดู Youtube</li>
                    <li>เล่นเกม</li>
                </ul>
                <hr>
                <h4 class="center_text">ช่องทางการสนับสนุน</h4>
                <p>Sticker Line : <ul>
                    <li><a href="https://store.line.me/stickershop/product/11477768/en">Horror Muffin</a></li>
                    <li><a href="https://store.line.me/stickershop/product/12488177/en?from=sticker">Little Sea Angle</a></li>
                </ul></p>
                <p>Youtube : <a href="https://www.youtube.com/channel/UCN5FugW3xWSFOKzrdTxpYIA">Kirby Kuro</a></p>
                <hr>
                <h4 class="center_text">ช่องทางการติดต่อ</h4>
                <p>Facebook : Praewa Teankachon</p>
                <p>Email : 64309010024@chontech.ac.th</p>
            </div>
        </div>
    </div>
</body>
</html>