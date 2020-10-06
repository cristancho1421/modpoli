<?php  
  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $lesson = New Lesson();
  $res = $lesson->single_lesson($id);

?> <br><br>
<h2 class="titulos">Vista de Archivos</h2>
<p Class="titulos">Clase : <?php echo $res->LessonChapter;?> | Titulo : <?php echo $res->LessonTitle;?></p>
<div style="background:white">
	<embed src="<?php echo web_root.'admin/modules/lesson/'.$res->FileLocation; ?>" type="application/pdf" width="100%" height="800px" />
</div> 