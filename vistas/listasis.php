<?php
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{


require 'header.php';

if ($_SESSION['grupos']==1) {

 ?>
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<!--box-header-->
<!--centro-->
 

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="hidden" id="idgrupo" name="idgrupo" value="<?php echo $_GET["idgrupo"];?>">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="bg-green">
                 <a href="../vistas/vista_grupo.php?idgrupo=<?php echo $_GET["idgrupo"]; ?>"><i class='fa fa-arrow-circle-left'></i> Volver</a>
              </li>
              <li class="bg-aqua"><a href="#tab_1-1" data-toggle="tab" aria-expanded="false">Calificaciones</a></li>
              <li class="pull-left header"><i class="fa fa-list"></i> Reporte</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="tab_1-1">

                <div class="panel-body table-responsive" id="listadoregistroscalif">
                  <div id="datacalif">

                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
<!--fin centro-->
      </div>
      </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
<?php 
}else{
 require 'noacceso.php'; 
}

require 'footer.php';
 ?>
 <script src="scripts/listasis.js"></script>
 <?php 
}

ob_end_flush();
  ?>

