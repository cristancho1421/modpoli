
<div class="col-lg-12 ord">
	<h1 class="titulos"><?php echo $title; ?></h1>
	<h3 class="titulos">PDF</h3>
	<div class="table-responsiv tablas-fondo">
		<table id="example" class="table table-bordered ">
			<thead>
				<th width="2%">#</th>
				<th>Clase</th>
				<th>Titulo</th>
				<th width="20%">Accion</th>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM tbllesson WHERE Category='Documento'";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td></td>';
					echo '<td>' . $result->LessonChapter . '</td>';
					echo '<td>' . $result->LessonTitle . '</td>';
					echo '<td style="item"><a href="index.php?q=viewpdf&id=' . $result->LessonID . '" class="btn btn-xs btn-primary"><i class="fa fa-info"></i> Ver Archivo </a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<div class="col-lg-12 ord">
	<h3 class="titulos">Video</h3>
	<div class="table-responsive tablas-fondo">
		<table id="example2" class="table table-bordered">
			<thead>
				<th width="2%">#</th>
				<th>Descripcion</th>
				<th width="20%">Accion</th>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM tbllesson WHERE Category='Video'";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td></td>';
					echo '<td>' . $result->LessonTitle . '</td>';
					echo '<td><a href="index.php?q=playvideo&id=' . $result->LessonID . '" class="btn btn-xs btn-primary"><i class="fa fa-play"></i> Reproducir Video</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<div class="col-lg-12 ord">
	<h3 class="titulos">Simulacion</h3>
	<div class="table-responsive tablas-fondo">
		<table id="example2" class="table table-bordered">
			<thead>
				<th width="2%">#</th>
				<th>Descripcion</th>
				<th width="20%">Accion</th>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM tbllesson WHERE Category='Video'";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td></td>';
					echo '<td>' . $result->LessonTitle . '</td>';
					echo '<td><a href="index.php?q=playvideo&id=' . $result->LessonID . '" class="btn btn-xs btn-primary"><i class="fa fa-play"></i> Reproducir Video</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<style>
	th {
		text-align:center
	}
	td{
		text-align:center
	}

</style>