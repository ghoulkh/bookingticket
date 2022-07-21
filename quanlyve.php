<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>Webserver mua vé với Raspberry Pi</title>
</head>
    <body>
    <form action="tinhtoan.php" method="post">
       <center><h1>Webserver mua vé với Raspberry Pi</h1>
       <?php 
       shell_exec("gpio -g mode 27 out");
       shell_exec("gpio -g write 27 0");
       ?>   
        <form action="tinhtoan.php" method="POST">
            Từ thành phố: <br>
            <select name="city1">
                <option value="1">Hà Nội</option>
                <option value="2">Đà Nẵng</option>
                <option value="3">Hồ Chí Minh</option>
                <option value="4">Cần Thơ</option>
            </select>
        </center>    

        <center>
            Đến thành phố: <br>
            <select name="city2">
                <option value="1">Hà Nội</option>
                <option value="2">Đà Nẵng</option>
                <option value="3">Hồ Chí Minh</option>
                <option value="4">Cần Thơ</option>
            </select>
        </center>

        <center>
        <button type="submit" name="submit">Gửi</button>
        </center>
    </form>
   </body>
</html>
