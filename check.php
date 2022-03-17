<?php 

$db = new mysqli('localhost','root','','final_ajax_evidance');

$email = $_POST['e'];
$password = $_POST['p'];

$data = $db->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");

 if($data->num_rows>0){ ?>

 	 <h1 class="color">Login Success</h1>

  <?php }else{  ?>

 	 <h1 class="color">Error</h1>

 <?php }  ?> 

 <style>
     .color{
        color: red;
     }
 </style>
