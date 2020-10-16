<style type="text/css">
 
  .secondrow > .row {
     border: 1px solid #ddd;
    /*padding: 5px 30px;*/
    text-align: center; 
    margin: 20px;
    min-height: 50px;
     border-radius: 50%;
  }
  .imgstretch{ 
    padding: 10px 30px;
  }
  .imgstretch img {
    width: 100%;
    height: 100px;
  }

 
</style>

  <div class="btn-controls">
    <div class="btn-box-row row-fluid">
        <a href="#" class="btn-box big span4"><i class="icon-facetime-video"></i>
        <b>
          <?php
              $sql = "SELECT count(*) as 'Cont' FROM tbllesson where Category='Video'";
              $mydb->setQuery($sql);
              $cur = $mydb->loadResultList();
              foreach ($cur as $result){
                echo $result->Cont;
              }           
            ?>
        </b>
            <p class="text-muted">
                Clases</p>
        </a>
        <a href="#" class="btn-box big span4"><i class="icon-user"></i><b>
            <?php
              $sql = "SELECT count(*) as 'Cont' FROM tblusers";
              $mydb->setQuery($sql);
              $cur = $mydb->loadResultList();
              foreach ($cur as $result){
                echo $result->Cont;
              }           
            ?></b>
            <p class="text-muted">
                Usuarios</p>
        </a>
        <a href="#" class="btn-box big span4"><i class="icon-file-alt"></i>
        <b>
          <?php
            $sql = "SELECT count(*) as 'Cont' FROM tblexercise";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();
            foreach ($cur as $result){
              echo $result->Cont;
            }           
          ?>
        </b>
            <p class="text-muted">
                Ejercicios</p>
        </a>
        <a href="#" class="btn-box big span4"><i class="icon-download-alt"></i>
        <b>
            <?php
              $sql = "SELECT count(*) as 'Cont' FROM tbllesson where Category='Documento'";
              $mydb->setQuery($sql);
              $cur = $mydb->loadResultList();
              foreach ($cur as $result){
                echo $result->Cont;
              }           
            ?> 
          </b>
          <p class="text-muted">Descargas</p>
        </a>
        
        <a href="#" class="btn-box big span4"><i class="icon-user-md"></i>
        <b>
            <?php
              $sql = "SELECT count(*) as 'Cont' FROM tblstudent";
              $mydb->setQuery($sql);
              $cur = $mydb->loadResultList();
              foreach ($cur as $result){
                echo $result->Cont;
              }           
            ?> 
          </b>
          <p class="text-muted">Estudiantes</p>
        </a>
    </div> 
</div>