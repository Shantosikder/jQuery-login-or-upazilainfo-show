
<?php $db = new mysqli('localhost','root','','final_ajax_evidance'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<title>Divistion Wise info show</title>
</head>
<body>

	<script>
		$(document).ready(function(){
			$('#divid').change(function(){
				var id = $(this).val();
				//alert(id);
				$.get('get_district.php', {div_id:id}, function(data){
					$('#distid').html(data);
					//console.log(data);
				});
			});

			$('#distid').change(function(){
				var id = $(this).val();
				//alert(id);
				$.get('get_upazila.php', {dist_id:id}, function(data){
					$('#upzid').html(data);
					//console.log(data);
				});
			});

			$('#upzid').change(function(){
				var id = $(this).val();
				//alert(id);
				$.get('get_upazilainfo.php', {upzinfo_id:id}, function(data){
					$('#upzinfo').html(data);
					//console.log(data);
				});
			});

		});
	</script>
	
	<form action="">
		<h1>Divistion Wise Upazila Info::</h1>

		<?php 

		$data = $db->query("SELECT * FROM divistion");

		 ?>
		<select name="" id="divid">

			<option selected disabled>select Divistion</option>

			<?php while($row = $data->fetch_object()){ ?>

				<option value=" <?php echo $row->id;  ?> "> <?php echo $row->divname;;  ?> </option>

			<?php } ?>


		</select>

		<select name="" id="distid">
			<option value="" >select District</option>
		</select>

		<select name="" id="upzid">
			<option value="">select Upazila</option>
		</select>
		<br>
		<textarea name="" id="upzinfo" cols="44" rows="10"></textarea>
	</form>
</body>
</html>