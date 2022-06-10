<?php 
    class classLogin
    {
        function check_user($username)
        {
            $sql = 'SELECT * FROM `user` where `LoginName` = ?';
            return pdo_query_one($sql,$username);
        }
          //Login
     // Check email lấy lại mật khẩu
     function check_mail($email)
     {
         $sql = 'SELECT * FROM `user` WHERE `Email` = ?';
         return pdo_query_one($sql,$email);
     }
     // Check token
     function check_token($token)
     {
         $sql = 'SELECT * FROM `user` WHERE `Token` = ?';
         return pdo_query_one($sql,$token);
     }
     // Check token
     function get_token_and_user($user,$token)
     {
         $sql = 'SELECT * FROM `user` WHERE `UserID` = ? AND `Token` = ?';
         return pdo_query_one($sql,$user,$token);
     }
     function check_id($user)
     {
         $sql = 'SELECT * FROM `user` WHERE `UserID` = ?';
         return pdo_query_one($sql,$user);
     }
     
     //update password forget
     function update_user_by_forget($token,$password,$id)
     {
         $sql = 'UPDATE `user` SET `Token` = ?, `Password` = ? WHERE `UserID` = ?';
         return pdo_execute($sql,$token,$password,$id);
     }
     //update password
     function update_pass($username,$password)
     {
         $sql = 'UPDATE `user` SET `Password` = ? WHERE `LoginName` = ?';
         pdo_execute($sql,$password,$username);
     }
     //create user
     function add_user($password, $fullname,$email, $phone, $token,$img)
     {
         $sql = 'INSERT INTO  `user`(`Fullname`,`LoginName`,`Password`,`Email`,`Token`,`img`) VALUES(?,?,?,?,?,?)';
         pdo_execute($sql,$fullname,$email,$password,$email,$token,$img);
         $sql1 = 'SELECT * FROM `user` where `LoginName` = ?';
         return pdo_query_one($sql1,$email);
     }

     function google_make_client(){
         // Lấy những giá trị này từ https://console.google.com
         $client_id = '36429539610-663gh3v3et1en92m74699fnka9shraip.apps.googleusercontent.com'; 
         $client_secret = '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';
         $redirect_uri = 'http://localhost:8080/handling/login_google.php';

         $client = new Google_Client();
         $client->setClientId($client_id);
         $client->setClientSecret($client_secret);
         $client->setRedirectUri($redirect_uri);
         $client->addScope("email");
         $client->addScope("profile");

         return $client;
     }
   
     function createUrlGoogle(){
         return $this->google_make_client()->createAuthUrl();
     }
     //gửi mail
     function sendMail($title, $content, $nTo, $mTo,$diachicc=''){
         $nFrom = 'Phúc Lam Phương Soft Garage';
         $mFrom = 'longbangiay1@gmail.com';  //dia chi email cua ban 
         $mPass = 'Kendi123';       //mat khau email cua ban
         $mail             = new PHPMailer();
         $body             = $content;
         $mail->IsSMTP(); 
         $mail->CharSet   = "utf-8";
         $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
         $mail->SMTPAuth   = true;                    // enable SMTP authentication
         $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
         $mail->Host       = "smtp.gmail.com";        
         $mail->Port       = 465;
         $mail->Username   = $mFrom;  // GMAIL username
         $mail->Password   = $mPass;               // GMAIL password
         $mail->SetFrom($mFrom, $nFrom);
         //chuyen chuoi thanh mang
         $ccmail = explode(',', $diachicc);
         $ccmail = array_filter($ccmail);
         if(!empty($ccmail)){
             foreach ($ccmail as $k => $v) {
                 $mail->AddCC($v);
             }
         }
         $mail->Subject    = $title;
         $mail->MsgHTML($body);
         $address = $mTo;
         $mail->AddAddress($address, $nTo);
         $mail->addreplyto('info@freetuts.net', 'Freetuts.net');
         if(!$mail->Send()) {
             return 0;
         } else {
             return 1;
         }
     }    
    }
?>
