<?php 

$db = new mysqli('localhost','root','','final_ajax_evidance');

$id = $_GET['upzinfo_id'];

$data = $db->query("SELECT * FROM upazilainfo WHERE upzid = '$id'");

while($row = $data->fetch_object()){ 

echo $row->discription;

}

?>