<?php 
    if (!isset($_SESSION['USERID'])){
        redirect(web_root."admin/index.php");
        }

// $autonum = New Autonumber();
// $res = $autonum->single_autonumber(2);

  ?> 
<form class="form-horizontal span6" action="controller.php?action=add" method="POST" style="margin-top: 20px;"> 
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Agregar preguntas</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
  <div class="form-group">
  <div class="col-md-8">
    <label class="col-md-4 control-label" for=
    "Lesson">Clase:</label>

    <div class="col-md-8"> 
      <select class="form-control" name="Lesson">
        <?php 
          $sql = "SELECT * FROM `tbllesson`";
          $mydb->setQuery($sql);
          $cur = $mydb->loadResultList();
          foreach ($cur as $res) {
            # code...
          echo '<option value='.$res->LessonID.'>'.$res->LessonTitle.'</option>';
          }
        ?>
      </select>
    </div>
  </div>
</div> 
  <div class="form-group">
  <div class="col-md-8">
    <label class="col-md-4 control-label" for=
    "Question">Pregunta:</label>

    <div class="col-md-8">
      <textarea  class="form-control input-sm" id="Question" name="Question" placeholder=
          "Question Name" type="text"></textarea>
      
    </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-8">
    <label class="col-md-4 control-label" for=
    "ChoiceA">A:</label>

    <div class="col-md-8">
      
        <input class="form-control input-sm" id="ChoiceA" name="ChoiceA" placeholder=
          "" type="text" value="">
    </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-8">
    <label class="col-md-4 control-label" for=
    "ChoiceB">B:</label>

    <div class="col-md-8">
      
        <input class="form-control input-sm" id="ChoiceB" name="ChoiceB" placeholder=
          "" type="text" value="" required>
    </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-8">
    <label class="col-md-4 control-label" for=
    "ChoiceC">C:</label>

    <div class="col-md-8">
      
        <input class="form-control input-sm" id="ChoiceC" name="ChoiceC" placeholder=
          "" type="text" value="" required>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-md-8">
    <label class="col-md-4 control-label" for=
    "ChoiceD">D:</label>

    <div class="col-md-8">
        <input class="form-control input-sm" id="ChoiceD" name="ChoiceD" placeholder=
          "" type="text" value="" required>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-md-8">
    <label class="col-md-4 control-label" for=
    "Answer">Respuesta:</label>

    <div class="col-md-8">
      
        <input class="form-control input-sm" id="Answer" name="Answer" placeholder=
          "Respuesta" type="text" value="" required>
    </div>
  </div>
</div> 

<div class="form-group">
  <div class="col-md-8">
    <label class="col-md-4 control-label" for=
    "idno"></label>

    <div class="col-md-8">
      <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>Guardar</button> 
      </div>
  </div>
</div> 
</form>