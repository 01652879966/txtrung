<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="dangkicss.css">
</head>

<body>
    <div class="container">
        <!--day la phan top-->
        <div id="top">
            <div id="top-left">
                <ul>
                    <li><a href="#"><img src="fb.png"></a></li>
                    <li><a href="#"><img src="aaa.png"></a></li>
                </ul>
            </div>
            <div id="top-right">
                <ul>
                    <li><img src="login.jpg" alt=""></li>
                    <li>|</li>
                    <li><a href="#">Đăng Nhập</a></li>
                    <li>|</li>
                    <li><a href="#">Đăng Kí</a></li>
                </ul>
            </div>
        </div>
        <!--day la phan header-->
        <div id="header">
            <div>
                <li><a href="#"><img src="loggoo.png"></a></li>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Trang Chủ</a></li>
                <li><a href="">Cho Thuê Phòng</a>
                    <ul>
                        <li><a href="#" title="TP Hồ Chí Minh">TP Hồ Chí Minh</a></li>
                        <li><a href="#" title="Hà Nội">Hà Nội</a></li>
                        <li><a href="#" title="Bình Dương">Bình Dương</a></li>
                        <li><a href="#" title="Đồng Nai">Đồng Nai</a></li>
                        <li><a href="#" title="Vũng Tàu">Vũng Tàu</a></li>
                        <li><a href="#" title="Cần Thơ">Cần Thơ</a></li>
                        <li><a href="#" title="Hải Phòng">Hải Phòng</a></li>
                        <li><a href="#" title="Đà Nẵng">Đà Nẵng</a></li>
                        <li><a href="#" title="Thừa Thiên Huế">Thừa Thiên Huế</a></li>

                    </ul>
                </li>
                <li><a href="">Tìm Ở Ghép</a>
                    <ul>
                        <li><a href="#" title="TP Hồ Chí Minh">TP Hồ Chí Minh</a></li>
                        <li><a href="#" title="Hà Nội">Hà Nội</a></li>
                        <li><a href="#" title="Bình Dương">Bình Dương</a></li>
                        <li><a href="#" title="Đồng Nai">Đồng Nai</a></li>
                        <li><a href="#" title="Vũng Tàu">Vũng Tàu</a></li>
                        <li><a href="#" title="Cần Thơ">Cần Thơ</a></li>
                        <li><a href="#" title="Hải Phòng">Hải Phòng</a></li>
                        <li><a href="#" title="Đà Nẵng">Đà Nẵng</a></li>
                        <li><a href="#" title="Thừa Thiên Huế">Thừa Thiên Huế</a></li>

                    </ul>
                </li>
                <li><a href="">Nhà Cho Thuê</a>
                    <ul>
                        <li><a href="#" title="TP Hồ Chí Minh">TP Hồ Chí Minh</a></li>
                        <li><a href="#" title="Hà Nội">Hà Nội</a></li>
                        <li><a href="#" title="Bình Dương">Bình Dương</a></li>
                        <li><a href="#" title="Đồng Nai">Đồng Nai</a></li>
                        <li><a href="#" title="Vũng Tàu">Vũng Tàu</a></li>
                        <li><a href="#" title="Cần Thơ">Cần Thơ</a></li>
                        <li><a href="#" title="Hải Phòng">Hải Phòng</a></li>
                        <li><a href="#" title="Đà Nẵng">Đà Nẵng</a></li>
                        <li><a href="#" title="Thừa Thiên Huế">Thừa Thiên Huế</a></li>

                    </ul>

                </li>

                <li><a href="">Giới Thiệu</a></li>
                <li><a href="">Hướng Dẫn </a></li>
                <li><a href="">Đăng Tin</a></li>

            </ul>
            <div class="clear"></div>
        </div>
    </div>
<?php






    ?>
    <fieldset style="width:290px;margin:140px;height:200px;">
    <legend style="margin-left:10px;">REGISTER</legend>
    <form action="dangki.php" method:"post">
        <table>
            <tr>
            <td>UserName</td>
            <td><input type="text" size="25" name="txtname"/></td>
            </tr>
        <tr>
            <td>PassWord</td>
            <td><input type="password" size="25"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" size="25"/></td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td>
                <select nam="day">
                    <option value="Ngay">Ngay</option>
                    <?php
                    for($i=1;$i<=31;$i++)
                    {
                        echo"<option>$i</option>";  
                    }
                    ?>
                </select>
                <select name="month"></select>
                <option value="Thang">Thang</option>
                <?php
                $thang=array(1=>"Jan","Feb","Mar","Jun","Jul","Aug","Seb","Oc","Nov","Dec");
                foreach($thang as $key=>$tam){
                    echo"<option>$tam</option>";
                }
                ?>
                <select name="year">
                    <option value="nam">Nam</option>
                    <?php
                    for($j=1950;$j<=date("Y");$j++){
                        echo"<option>$j</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        </table>
    </form>



</fieldset>
</body>

</html>