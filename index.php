<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica-1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<body>


        <?php
         //api mercado libre
         $data = json_decode(file_get_contents('https://api.mercadolibre.com/users/226384143/'),true);
		 
		?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Usuario: <?php echo $data['nickname'];?></li>
    <li class="breadcrumb-item active" aria-current="page">Usuario: <?php echo $data['address']['city'];?></li>
  </ol>
</nav>

<?php
		///api jsonplaceholder
         $data1 = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts/1/comments'), true);
         
		foreach ($data1 as $i) 
		{
        ?>
		
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><?php echo "Comentario no." . $i['id'];?> </h5>
						<small><?php echo "<b>Usuario</b>" . $i['name'];?></small>
					</div>
						<p class="mb-1"><?php echo $i['body'];?></p>
						<small><?php echo $i['email'];?></small>
				</a>
			</div>
		<?php
         }
?>
    
</body>
</html>