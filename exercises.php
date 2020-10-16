
<div class="col-lg-12 ord">
	<h1 CLASS=" titulos "><?php echo $title;?></h1>
	<div class="table-responsive tablas-fondo">
		<table id="example" class="table table-bordered">
			<thead>
				<th width="2%">#</th>
				<th>Clase</th>
				<th width="15%">Accion</th>
			</thead>
			<tbody>
				<?php 
				$sql = "SELECT * FROM tblexercise";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td>' .$result->LessonID.'</td>';
					echo '<td>'.$result->Question.'</td>';
					echo '<td><a href="index.php?q=question&id='.$result->LessonID.'" class="btn btn-xs btn-primary">Ver Ejercicio</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<style>
	td{
		text-align:center;
	}
	th{
		text-align:center;
	}
</style>