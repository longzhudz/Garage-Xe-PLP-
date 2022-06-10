<?php 

    class ClassUser {

       //Register
       //Kiểm tra người dùng
        function check_user($username)
        {
            $sql = 'SELECT * FROM `user` where `LoginName` = ?';
            return pdo_query_one($sql,$username);
        }
        //Thêm người dùng 
        function add_user($fullname,$username, $password,$email, $token)
        {
            $sql = 'INSERT INTO  `user`(`Fullname`,`LoginName`,`Password`,`Email`,`Token`) VALUES(?,?,?,?,?)';
            pdo_execute($sql,$fullname,$username,$password,$email,$token);
        }
        //Thêm người dùng có hình ảnh lấy từ google
        function add_user2($fullname,$username, $password,$email, $token,$img)
        {
            $sql = 'INSERT INTO  `user`(`Fullname`,`LoginName`,`Password`,`Email`,`Token`,`img`) VALUES(?,?,?,?,?,?)';
            pdo_execute($sql,$fullname,$username,$password,$email,$token,$img);
        }
      
    }               
?>