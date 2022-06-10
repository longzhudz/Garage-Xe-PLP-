<?php

class ClassDetails
{
    function details($slug)
	{
		$sql = 'SELECT * FROM `products` where `status`= 0 and `slug_product` = ?';
		return pdo_query_one($sql,$slug);
	}
	function updateVote($id)
	{
		$sql = 'UPDATE `products` SET `vote` = `vote` + 1 WHERE `id` = ?';
		pdo_execute($sql,$id);
	}
}
?>