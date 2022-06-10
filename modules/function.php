<?php 
    class classFunc
    {
         //get info by id 
         function get_info($id)
         {
             $sql = 'SELECT * FROM `user` WHERE `UserID` = ?';
             return pdo_query_one($sql,$id);
         }

         //Chỉnh sửa thông tin user được quyền sửa
        function update_member($id,$fullname,$address,$phone,$img)
        {
            $sql = 'UPDATE `user` SET `Fullname` = ?, `Address` = ?, `Phone` = ?, `img` = ? WHERE `UserID` = ?';
            pdo_execute($sql,$id,$fullname,$address,$phone,$img);
        }

          //gửi mail
          function sendMail($title, $content, $nTo, $mTo,$diachicc=''){
            $nFrom = 'Garage PLP';
            $mFrom = 'longbangiay1@gmail.com';  //dia chi email cua ban 
            $mPass = 'zguivresceksfnwm';       //mat khau email cua ban
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
        

        //Load hóa đơn
        function load_hoadon()
        {
            return pdo_query('SELECT * FROM `hoadon`');
        }

        function update_status_cart($id,$status)
        {
            $sql = 'UPDATE `hoadon` SET `status` = ? where `id` = ?';
            pdo_execute($sql,$id,$status);
        }
       
        //Xóa đơn hàng
        function delete_id_cart($id)
        {
            $sql = 'DELETE FROM `hoadon` WHERE `id` = ?';
            pdo_execute($sql,$id);
        }


        //Booking lay id cuoi cung
        function last_id_book()
        {
            return pdo_query_one('SELECT * FROM `book` ORDER BY `id` DESC');
        }


        //Quản lý member
        //Show thành viên
        function show_member()
        {
            return pdo_query('SELECT * FROM `user`');
        }
          //Lấy id khách hàng
        function get_id_member($id)
        {
            $sql = 'SELECT * FROM `user` WHERE `UserID` = ?';
            return pdo_query_one($sql,$id);
        }
          //Sửa quyền ng dùng
        function update_user_admin($id,$status,$level)
        {
            $sql = 'UPDATE `user` SET `Status` = ?,`Level` = ? WHERE `UserID` = ?';
            pdo_execute($sql,$id,$status,$level);
        }
          //Xoá người dùng
        function delete_member($id)
        {
            $sql = 'DELETE FROM `user` WHERE `UserID` = ?';
            pdo_execute($sql,$id);
        }

        //Update blog


        function add_blog($title,$slug,$id_cate,$content,$load_img,$id_user)
        {
            $sql = 'INSERT INTO `blog`(`title`,`slug`,`id_user`,`id_cate`,`text`,`img`) VALUES(?,?,?,?,?,?)';
            pdo_execute($sql,$title,$slug,$id_cate,$content,$load_img,$id_user);
        }

        function update_blog_admin($id,$title,$slug,$cate,$text,$img,$status)
        {
            $sql = 'UPDATE `blog` SET `title` = ?,`slug` = ?,`id_cate` = ?,`text` = ?,`img` = ?, `status` = ? WHERE `id` = ?';
            pdo_execute($sql,$id,$title,$slug,$cate,$text,$img,$status);
        }

        function delete_blog($id)
        {
            $sql = 'DELETE FROM `blog` WHERE `id` = ?';
            pdo_execute($sql,$id);
        }
        function get_id_blog($id)
	    {
            $sql = 'SELECT * FROM `blog` WHERE `id` = ?';
            return pdo_query_one($sql,$id);
	    }

        //Danh mục bài viết
        function show_danhmucbaviet()
        {
            return pdo_query('SELECT * FROM `categogies_blog`');
        }
        function add_cate_blog($name,$status)
        {
            $sql = 'INSERT INTO `categogies_blog`(`name_cate`,`status`) VALUES (?,?)';
            return pdo_execute($sql,$name,$status);
        }
        function get_id_cate_blog($id)
	    {
            $sql = 'SELECT * FROM `categogies_blog` WHERE `id_cate` = ?';
            return pdo_query_one($sql,$id);
	    }
        function update_cate_blog($id,$name,$status)
        {
            $sql = 'UPDATE `categogies_blog` SET `name_cate` = ?,`status` = ? WHERE `id_cate` = ?';
            pdo_execute($sql,$id,$name,$status);
        }
        function delete_cate_blog($id)
        {
            $sql = 'DELETE FROM `categogies_blog` WHERE `id_cate` = ?';
            pdo_execute($sql,$id);
        }
        //Sản phẩm
        
        //thêm sản phẩm
        function add_products($name_product,$slug_product,$img,$price_product,$text,$quantity,$name_brand,$id_cate)
        {
            $sql = 'INSERT INTO `products`(`name_product`,`slug_product`,`img`,`price_product`,`text`,`quantity`,`brand`,`id_cate`) VALUES (?,?,?,?,?,?,?,?)';
            return pdo_execute($sql,$name_product,$slug_product,$img,$price_product,$text,$quantity,$name_brand,$id_cate);
        }
        function update_product($id,$name_product,$slug_product,$img,$price_product,$text,$quantity,$id_cate)
        {
            $sql = 'UPDATE `products` SET `name_product` = ?,`slug_product` = ?,`img` = ?, `price_product` = ?,`text` = ?,`quantity` = ? ,`id_cate` = ? WHERE `id` = ?';
            pdo_execute($sql,$id,$name_product,$slug_product,$img,$price_product,$text,$quantity,$id_cate);
        }
        function delete_products($id)
        {
            $sql = 'DELETE FROM `products` WHERE `id` = ?';
            pdo_execute($sql,$id);
        }

         //Danh muc san pham
         function show_danhmucsanpham()
         {
             return pdo_query('SELECT * FROM `categories_products`');
         } 
         function add_cate_product($name,$slug,$status)
         {
             $sql = 'INSERT INTO `categories_products`(`name`,`slug`,`status`) VALUES (?,?,?)';
             return pdo_execute($sql,$name,$slug,$status);
         }
         function get_id_cate_product($id)
         {
             $sql = 'SELECT * FROM `categories_products` WHERE `id` = ?';
             return pdo_query_one($sql,$id);
         }
         function update_cate_product($id,$name,$slug,$status)
         {
             $sql = 'UPDATE `categories_products` SET `name` = ?,`slug` = ?,`status` = ? WHERE `id` = ?';
             pdo_execute($sql,$id,$name,$slug,$status);
         }
         function delete_cate_product($id)
         {
             $sql = 'DELETE FROM `categories_products` WHERE `id` = ?';
             pdo_execute($sql,$id);
         }

       
        

        //Trang chủ admin
        function loadUser()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `user` WHERE  `status` = 0');
        }
        //Load tổng số sản phẩm đã thêm
        function loadProductsAdmin()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `products`');
        }
        //Load tổng số tiền của shop
        function loadTongTien()
        {
            return pdo_query_value('SELECT SUM(`tongtien`) FROM `hoadon` WHERE `status` = 1');
        }
        //Load khách order sản phẩm
        function loadOrderTong()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `hoadon`');
        }
        function loadOrder()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `hoadon` WHERE  `status` = 0');
        }
        function loadDaXuLi()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `hoadon` WHERE  `status` = 1');
        }
        function loadDaHuy()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `hoadon` WHERE  `status` = 2');

        }
       
        //Tổng doanh thu
        function TongTien($key,$action)
        {
            if ($key == 'day') {
                $sql = 'SELECT SUM(`tongtien`) FROM `hoadon` where `ngaydat` = ? and `status` = 1';
                return pdo_query_value($sql,$action);
            }else if($key =='month'){
                $sql = 'SELECT SUM(`tongtien`) FROM `hoadon` where MONTH(`ngaydat`) = ? and `status` = 1';
                return pdo_query_value($sql,$action);
            }
        }
        function ThanhToanBy($key,$action)
        {
            $sql = 'SELECT SUM(`tongtien`) FROM `hoadon` WHERE `hinhthuc` = ? AND `ngaydat` = ? AND `status` = 1';
            return pdo_query_value($sql,$key,$action);
        }
        //Load đơn hàng đã bán và chưa xử lý.
        function load_status_don_chuaxuli()
        {  
            return pdo_query('SELECT * FROM `hoadon` WHERE `status` = 0');   
        }
        //Danh mục dịch vụ
          function show_danhmucdichvu()
          {
              return pdo_query('SELECT * FROM `service`');
          } 
          //Load dịch vụ theo id
          function get_id_cate_service($id)
          {
              $sql = 'SELECT * FROM `service` WHERE `id` = ?';
              return pdo_query_one($sql,$id);
          }
          function update_cate_service($id,$name,$status)
          {
              $sql = 'UPDATE `service` SET `name` = ?,`status` = ? WHERE `id` = ?';
              pdo_execute($sql,$id,$name,$status);
          }
          function delete_cate_service($id)
          {
              $sql = 'DELETE FROM `service` WHERE `id` = ?';
              pdo_execute($sql,$id);
          }
          function add_cate_service($name,$status)
          {
              $sql = 'INSERT INTO `service`(`name`,`status`) VALUES (?,?)';
              return pdo_execute($sql,$name,$status);
          }
        
          //Contact
          function add_contact($name,$email,$phone,$comment)
          {
              $sql = 'INSERT INTO `contact`(`name`,`email`,`phone`,`comment`) VALUES(?,?,?,?)';
              return pdo_execute($sql,$name,$email,$phone,$comment);
          }
          function delete_contact($id)
          {
              $sql = 'DELETE FROM `contact` WHERE `id` = ?';
              pdo_execute($sql,$id);
          }
          


        // Tổng tiền

        function tong_bill($data,$rule)
        {
            $all = 0;
            foreach($data as $key => $value)
            {
                if($rule == 1)
                {
                    $all += $value['price']*$value['soluong'];
                }
                else
                {
                    $all += $value['soluong'];
                }
            }
            return $all;
        }

         //Tạo giá trị slug
         function to_slug($str) {
            $str = trim(mb_strtolower($str));
            $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
            $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
            $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
            $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
            $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
            $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
            $str = preg_replace('/(đ)/', 'd', $str);
            $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
            $str = preg_replace('/([\s]+)/', '-', $str);
            return $str;
        }
    }
?>