<?php 
class classBooking
{
    function readBooking()
    {
        $sql = 'SELECT * FROM `book`';
        return pdo_query($sql);
    }
    function add_book($ngaydat,$giodat,$dichvu,$id)
    {
        $sql = 'INSERT INTO  `book`(`ngay_dat`,`gio_dat`,`id_service`,`id_user`) VALUES(?,?,?,?)';
        return  pdo_execute($sql,$ngaydat,$giodat,$dichvu,$id);
        
    }

    function listservice()
    {
        $sql = 'SELECT * FROM `service`';
        return pdo_query($sql);
    }
}
?>