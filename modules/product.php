<?php 
/**
 * Products Class
 */
class classProducts
{
	
	// tìm kiếm sản phẩm
	function searchProduct($timkiem){
		$sql='SELECT * FROM `products` WHERE `name` LIKE "%" ? "%"';
		return pdo_query($sql,$timkiem);
	}
// List categogries

function listCategogries($cate=''){
	if($cate == '')
	{
		return pdo_query('SELECT * FROM `categories_products` WHERE  `status` = 0');
	}
	else
	{
		$sql = 'SELECT * FROM `categories_products` WHERE `status` = 0 AND `slug` = ?';
		return pdo_query($sql,$cate);
	}
}

// List Product by id categogries
function listProductsByIdCate($id,$name=''){
	if($name==''){
		$sql = 'SELECT * FROM `products` WHERE `status` = 0 AND `id_cate` = ?';
		return pdo_query($sql,$id);
	}else{
		$sql = 'SELECT * FROM `products` WHERE `status` = 0 AND `id_cate` = ? AND `name_product` LIKE ?';
		return pdo_query($sql,$id,$name);
	}
}
function productsById($id){
	$sql = 'SELECT * FROM `products` WHERE `status` = 0 AND `id` = ?';
	return pdo_query_one($sql,$id);
}
//add giỏ hàng
function add_giohang($name,$phone,$address,$city,$hinhthuc,$quantity,$tongtien,$date,$id_user,$date_time)
{
	$sql = 'INSERT INTO `hoadon`(`name`,`phone`,`address`,`city`,`hinhthuc`,`quantity`,`tongtien`,`ngaydat`,`id_user`,`date_time`)VALUES(?,?,?,?,?,?,?,?,?,?)';
	pdo_execute($sql,$name,$phone,$address,$city,$hinhthuc,$quantity,$tongtien,$date,$id_user,$date_time);
}
//get last id giỏ hàng
function get_last_id_giohang()
{
	return pdo_query_one('SELECT * FROM `hoadon` ORDER BY `id` DESC');
}

function add_chitiethd($name,$quantity,$price,$img,$soluong)
{
	$sql = 'INSERT INTO `chitiethoadon`(`name`,`quantity`,`price`,`img`,`id_hoadon`) VALUES (?,?,?,?,?)';
	 pdo_execute($sql,$name,$quantity,$price,$img,$soluong);
}
function listHotPro()
{
	return pdo_query('SELECT * FROM `products` WHERE `status` = 0 ORDER BY `vote` DESC');
}
}
?>