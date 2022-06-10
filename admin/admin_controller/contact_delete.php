<?php 
 $id = $_GET['id'];
 $delete = $func->delete_contact($id);
 header('location: ./lienhe.html');

?>