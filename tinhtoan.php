<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Lấy dữ liệu nhập vào
$city1 = addslashes($_POST['city1']);
$city2 = addslashes($_POST['city2']);

//Xử lý tính toán
    shell_exec("gpio -g mode 27 out");
    if($city1==$city2) {echo "Mời nhập lại điểm đi và điểm đến. <a href='javascript: history.go(-1)'>Trở lại</a>";}
    if($city1==1){
        if($city2==2){
        echo "Từ Hà Nội đến Đà Nẵng - Vé tàu: HNDN - Giá vé: 10 USD ";
        shell_exec("gpio -g write 27 1");   
        echo "<br />";
        echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }
        if($city2==3){
            echo "Từ Hà Nội đến Hồ Chí Minh - Vé tàu: HNHCM - Giá vé: 20 USD ";
            shell_exec("gpio -g write 27 1");   
            echo "<br />";
            echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }
        if($city2==4){
            echo "Từ Hà Nội đến Cần Thơ - Vé tàu: HNCT - Giá vé: 30 USD ";
            shell_exec("gpio -g write 27 1");   
            echo "<br />";
            echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }                        
    }
    if($city1==2){
        if($city2==1){
        echo "Từ Đà Nẵng đến Hà Nội - Vé tàu: DNHN - Giá vé: 10 USD ";
        shell_exec("gpio -g write 27 1");   
        echo "<br />";
        echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }
        if($city2==3){
            echo "Từ Đà Nẵng đến Hồ Chí Minh - Vé tàu: DNHCM - Giá vé: 10 USD ";
            shell_exec("gpio -g write 27 1");   
            echo "<br />";
            echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }
        if($city2==4){
            echo "Từ Đà Nẵng đến Cần Thơ - Vé tàu: DNCT - Giá vé: 20 USD ";
            shell_exec("gpio -g write 27 1");   
            echo "<br />";
            echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }                        
    }
    if($city1==3){
        if($city2==1){
        echo "Từ Hồ Chí Minh đến Hà Nội - Vé tàu: HCMHN - Giá vé: 20 USD ";
        shell_exec("gpio -g write 27 1");   
        echo "<br />";
        echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }
        if($city2==2){
            echo "Từ Hồ Chí Minh đến Đà Nẵng - Vé tàu: HCMDN - Giá vé: 10 USD ";
            shell_exec("gpio -g write 27 1");   
            echo "<br />";
            echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }
        if($city2==4){
            echo "Từ Hồ Chí Minh đến Cần Thơ - Vé tàu: HCMCT - Giá vé: 10 USD ";
            shell_exec("gpio -g write 27 1");   
            echo "<br />";
            echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }                        
    }
    if($city1==4){
        if($city2==1){
        echo "Từ Cần Thơ đến Hà Nội - Vé tàu: CTHN - Giá vé: 30 USD ";
        shell_exec("gpio -g write 27 1");   
        echo "<br />";
        echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }
        if($city2==2){
            echo "Từ Cần Thơ đến Đà Nẵng - Vé tàu: CTHN - Giá vé: 20 USD ";
            shell_exec("gpio -g write 27 1");   
            echo "<br />";
            echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }
        if($city2==3){
            echo "Từ Cần Thơ đến Hồ Chí Minhơ - Vé tàu: CTHCM - Giá vé: 10 USD ";
            shell_exec("gpio -g write 27 1");   
            echo "<br />";
            echo "Chọn chuyến tàu khác. <a href='quanlyve.php'>Tiếp theo</a>"; 
        }                        
    }
    

?>
