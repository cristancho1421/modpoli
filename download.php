<div class="ord">
	<h1 class="titulos"><?php echo $title; ?></h1>
	<div class="col-lg-12" ord>
		<h3 class="titulos">PDF</h3>
		<div class="table-responsive tablas-fondo ">
			<table id="example" class="table table-bordered">
				<thead>
					<th width="2%">#</th>
					<th>Clase</th>
					<th>Titulo</th>
					<th width="10%">Accion</th>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM tbllesson WHERE Category='Docs'";
					$mydb->setQuery($sql);
					$cur = $mydb->loadResultList();
					foreach ($cur as $result) {
						# code...
						echo '<tr>';
						echo '<td></td>';
						echo '<td>' . $result->LessonChapter . '</td>';
						echo '<td>' . $result->LessonTitle . '</td>';
						echo '<td><a href="' . web_root . 'admin/modules/lesson/' . $result->FileLocation . '" class="btn btn-xs btn-info" download>Descargar Archivo<i class="fa fa-download"></i></a></td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-lg-12 ord">
		<h3 class="titulos">Video</h3>
		<div class="table-responsive tablas-fondo ">
			<table id="example2" class="table table-bordered">
				<thead>
					<th width="2%">#</th>
					<th>Descripcion</th>
					<th width="10%">Accion</th>
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
						echo '<td><a href="' . web_root . 'admin/modules/lesson/' . $result->FileLocation . '" class="btn btn-xs btn-info" download></i>Descargar Archivo&nbsp;<i class="fa fa-download"></a></td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-lg-12 ord">
		<h3 class="titulos">Simulacion</h3>
		<div class="table-responsive tablas-fondo ">
			<table id="example2" class="table table-bordered">
				<thead>
					<th width="2%">#</th>
					<th>Descripcion</th>
					<th width="10%">Accion</th>
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
						echo '<td><a href="' . web_root . 'admin/modules/lesson/' . $result->FileLocation . '" class="btn btn-xs btn-info" download><i class="fa fa-download"></i>Descargar Archivo</a></td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>