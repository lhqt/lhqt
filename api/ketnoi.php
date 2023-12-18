<?php 
    $server = 'localhost'; 
    $user = 'root';  
    $pass = ''; 
    $database = 'database'; 
 
    //tạo biến kết nối và gán hàm mysqli để kết nối 
    $conn = new mysqli($server,$user,$pass,$database); 
 
/*     //kiểm tra việc kết nối 
    if($conn) 
    { 
        echo "<br>Đã kết nối database thành công :D<br><br>"; 
    } 
    else  
    { 
        echo "<br>Lỗi kết nối Database :(<br>";       
    }  */
?>