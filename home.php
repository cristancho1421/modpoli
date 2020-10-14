<!-- <h1><?php echo $title; ?></h1> -->

<div class="container ord">
  <div class="cont-menu">
    <div class="menu1">
      <div class="link1">
        <div class="letra">
          <a href="<?php echo web_root; ?>index.php?q=lesson">Lecciónes</a>
          <h5><span class="badge badge-secondary">
            <?php
                $sql = "SELECT count(*) as 'Cont' FROM tbllesson";
                $mydb->setQuery($sql);
                $cur = $mydb->loadResultList();
                foreach ($cur as $result){
                    echo $result->Cont;
                }           
            ?>
          </span></h5>
        </div>
      </div>
    </div>
    <div class="menu2">
      <div class="link2">
        <div class="letra">
          <a href="<?php echo web_root; ?>index.php?q=exercises">Ejercicios</a>
          <h5><span class="badge badge-secondary">
            <?php
                $sql = "SELECT count(*) as 'Cont' FROM tblexercise";
                $mydb->setQuery($sql);
                $cur = $mydb->loadResultList();
                foreach ($cur as $result){
                    echo $result->Cont;
                }           
            ?>
          </span></h5>
        </div>
      </div>
    </div>
    <div class="menu3">
      <div class="link3">
        <div class="letra">
          <a href="<?php echo web_root; ?>index.php?q=download">Descargas</a>
          <h5><span class="badge badge-secondary">
            <?php
                $sql = "SELECT count(*) as 'Cont' FROM tbllesson";
                $mydb->setQuery($sql);
                $cur = $mydb->loadResultList();
                foreach ($cur as $result){
                    echo $result->Cont;
                }           
            ?>
          </span></h5>
        </div>
      </div>
    </div>
    <!-- <div class="menu4">
      <div class="link4">
        <div class="letra"><a href="#">Cuenta</a></div>
      </div> -->
    </div>
  </div>
</div>