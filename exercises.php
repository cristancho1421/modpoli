
<div class="col-lg-12 ord">
	<h1 CLASS=" titulos "><?php echo $title;?></h1>
	<div class="table-responsive tablas-fondo">
		<table id="example" class="table table-bordered">
			<thead>
				<th width="2%">#</th>
				<th>Clase</th>
				<th>Titulo</th> 
				<th width="15%">Accion</th>
			</thead>
			<tbody>
				<?php 
				$sql = "SELECT * FROM tbllesson";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td></td>';
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td><a href="index.php?q=question&id='.$result->LessonID.'" class="btn btn-xs btn-primary">Ver Ejercicio</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
