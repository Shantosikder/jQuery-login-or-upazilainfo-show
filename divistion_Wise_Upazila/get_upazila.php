<?php 

$db = new mysqli('localhost','root','','final_ajax_evidance');

$id = $_GET['dist_id'];

$data = $db->query("SELECT * FROM upzaila WHERE distid = '$id'");

echo '<option disabled selected>Select upazila</option>';

while($row = $data->fetch_object()){ ?>

<option value=" <?php echo $row->id; ?> "> <?php echo $row->upzname; ?> </option>

<?php } ?>