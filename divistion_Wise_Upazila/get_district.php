<?php 

$db = new mysqli('localhost','root','','final_ajax_evidance');

$id = $_GET['div_id'];

$data = $db->query("SELECT * FROM district WHERE divid = '$id'");

echo '<option disabled selected>Select Division</option>';

while($row = $data->fetch_object()){ ?>

<option value=" <?php echo $row->id; ?> "> <?php echo $row->distname; ?> </option>

<?php } ?>


