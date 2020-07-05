 <?php 
  if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

?> 
 <div class="container">
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">

             <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Nuevo Estudiante</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div>

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "IDNO">Id No.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="IDNO" name="IDNO" placeholder=
                            "Id Estudiante" type="Text" value="" required>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "FNAME">Primer Nombre:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "Primer nombre" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "MNAME">Segundo Nombre:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
                            "Segundo nombre" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Apellidos:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Last Name" type="text" value=""  required>
                      </div>
                    </div>
                  </div>


                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COURSE">Curso:</label>

                      <div class="col-md-8">
                            <select class="form-control input-sm" name="COURSE" id="COURSE">

                              <?php  
                              $mydb->setQuery("SELECT * 
                                      FROM  `tblcourse`");
                              $cur = $mydb->loadResultList();

                            foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->COURSEID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                                   <?php } ?>
                              </select>
         
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SEMESTER">Ciclo:</label>

                      <div class="col-md-4">
                         <select class="form-control input-sm" name="SEMESTER" id="SEMESTER">
                           <option>1</option>
                         <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "yearpickerfrom">Año escolar:</label>

                        <!-- has a limit <div class="col-md-4 input-append date" id="dpYears" data-date="12-02-2012" data-date-format="mm/dd/yyyy" data-date-viewmode="years"> -->
                       <div class="col-md-2 input-append date"    data-date-format="yyyy" data-date-viewmode="years">
                    
                         <input   class="form-control input-sm" id="date_pickerfrom" name="yearpickerfrom" placeholder="yyyy"   type="text" value="" size="4">
                    <!--   <span class="add-on"><i class="glypicon-calendar"></i></span> -->
                      </div>
                       <br><label class="col-md-1 control-label" for=
                      "To"> To </label>
                        <!-- has a limit <div class="col-md-4 input-append date" id="dpYears" data-date="12-02-2012" data-date-format="mm/dd/yyyy" data-date-viewmode="years"> -->
                       <div class="col-md-2 input-append date"    data-date-format="yyyy" data-date-viewmode="years">
                    
                         <input   class="form-control input-sm" id="date_pickerto" name="yearpickerto" placeholder="yyyy"   type="text" value="" size="4">
                    <!--   <span class="add-on"><i class="glypicon-calendar"></i></span> -->
                      </div>
                    </div>
                  </div>


               


<!-- 
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ADDRESS">Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                            "Address" type="text" value=""  required>
                      </div>
                    </div>
                  </div>
                   -->
            <!--       <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "EMAIL">Email Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="UEMAIL" name="UEMAIL" placeholder=
                            "Email Address" type="email" value="">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PASS">Password:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PASS" name="PASS" placeholder=
                            "Password" type="password" value="">
                      </div>
                    </div>
                  </div> -->

                <!--   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "RELIGION">Religion:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="RELIGION" name="RELIGION" placeholder=
                            "Religion" type="TEXT" value="">
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "STATUS">Civil Status:</label>

                      <div class="col-md-4">
                         <select class="form-control input-sm" name="STATUS" id="STATUS">
                           <option>Single</option>
                         <option>Married</option>
                        <option>Widow</option> 
                        </select>
                      </div>
                    </div>
                  </div>
 -->
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PHONE">Numero de contacto.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                            "Contact Number" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "EMAILADD">Correo institucional:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="EMAILADD" name="EMAILADD" placeholder=
                            "Example@pi.edu.co" type="email" value="" required>
                      </div>
                    </div>
                  </div>

 
               <!--    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4" align = "right"for=
                      "image">Upload Image:</label>

                      <div class="col-md-8">
                      <input type="file" name="image" value="" id="image"/>
                      </div>
                    </div>
                  </div>
             -->
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn_kcctc" name="studsave" type="submit" ><strong>Guardar</strong></button>
                           <a href="index.php" class="btn btn_kcctc" name="back" type="submit"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Lista de estudiantes</a>
                     </div>
                    </div>
                  </div> 
        

        <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
       