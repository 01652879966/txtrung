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
                <li><a href="index2.html">Trang Chủ</a></li>
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
    <div class="register">
            <h1 class="title">TẠO TÀI KHOẢN</h1>
        </div>

<?php
    $loi=array();
    $username=$password=$email=$day=$month=$year=$gender=NULL;
    $loi["username"]=$loi["password"]=$loi["email"]=$loi["birthday"]=$loi["gender"]=$loi["register"]=NULL;
    if(isset($_POST["ok"]))
    //check username
    if(empty($_POST["txtname"]))
    {
        $loi["username"]="*Xin Vui Lòng Nhập Username <br/>";
    }
    else{

    $username=$_POST["txtname"];
    }
    //check password
    if(empty($_POST["txtpass"]))
    {
        $loi["password"]="*Xin Vui Lòng Nhập PassWord <br/>";
    }
    else{

    $password=$_POST["txtpass"];
    }
    //check email
    if(empty($_POST["txtmail"]))
    {
        $loi["mail"]="*Xin Vui Lòng Nhập Email <br/>";
    }
    else{

    $Email=$_POST["txtmail"];
    }
    //check birth
    //if($_POST["day"]=="ngay" || $_POST["month"]=="thang" || $_POST["year"]=="nam")
    //{
     //   $loi["birthday"]="Xin Vui Lòng Nhập BirthDay <br/>";
    //}
    //else{

    //$day=$_POST["day"];
    //$month=$_POST["month"];
    //$year=$_POST["year"];
    //}
    //check co chon gender chua
    if(empty($_POST["gender"]))
    {
        $loi["gender"]="*Xin Vui Lòng Chọn Gender <br/>";
    }
    else{

    $gender=$_POST["gender"];
    }
     //buoc1
     $conn= mysqli_connect('localhost','root','','demo');
     if (!$conn){
         die('ket noi thanh cong'.mysqli_connect());
     }
     //buoc2
     mysqli_set_charset($conn,"utf8");
     $sql = "INSERT INTO user (username,password,email,birthday,gender,level) VALUES ('$username','$password','$email','$year-$month-$day','$gender','1')";
     $loi["register"]="Đăng Kí Thành Công, <a href='dangnhap.php' style='color:blue;'>Đăng Nhập</a> Để Vào Website<br/>";
     //buoc4: dong ket noi
     mysqli_close($conn);

    ?>
    <fieldset style="width:310px;margin-left:500px;height:200px;margin-top:100px;background:url(aaaaa.png)">
    <legend style="margin-left:100px;">REGISTER</legend>
    <form action="dangki.php" method:"post">
        <table>
            <tr>
            <td>UserName</td>
            <td><input type="text" size="25" name="txtname"/></td>
            </tr>
        <tr>
            <td>PassWord</td>
            <td><input type="password" size="25" name="txtpass"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" size="25" name="txtmail"/></td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td>
                <select name="day">
                    <option value="ngay">Ngay</option>
                    <?php
                    for($i=1;$i<=31;$i++)
                    {
                        echo"<option value='$i'>$i</option>";  
                    }
                    ?>
                </select>
                <select name="month">
                <option value="thang">Thang</option>
                <?php
                $thang=array( 1=>"Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Seb","Oc","Nov","Dec");
                foreach($thang as $key=>$tam)
                {
                    echo"<option value='$key'>$tam</option>";
                }
                ?>
                </select>
                <select name="year">
                    <option value="nam">Nam</option>
                    <?php
                    for($j=1950;$j<=date("Y");$j++){
                        echo"<option value='$j'>$j</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" id="1"/>Nam
                <input type="radio" name="gender" id="2"/>Nữ
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Register" name="ok"></td>
        </tr>
        </table>
    </form>
</fieldset>
<div style="width:290px; height:170px;margin:10px auto;text-align=center;color:#F00;">
    <?php
    echo $loi["username"];
    echo $loi["password"];
    echo $loi["birthday"];
    echo $loi["gender"];
    echo $loi["email"];
    echo $loi["register"];
    ?>
</div>
</body>

</html>