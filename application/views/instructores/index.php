<div class="row">
    <div class="col-md-8">
    <h1>LISTADO DE INSTRUCTORES</h1>
    </div>
    <div class="col-md-4">
      <br>
      <br>
      <a href="<?php echo site_url('instructores/nuevo'); ?>"class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i>Agregar Instructor</a>
    </div>
</div>
<br>
<?php if ($instructores): ?>
    <table class="table table-striped  table-bordered table-hover"id="tbl_instructores">
      <thead>
        <tr>
          <th>ID</th>
          <th>CEDULA</th>
          <th> PRIMER APELLIDO</th>
          <th>SEGUNDO APELLIDO</th>
          <th>NOMBRES</th>
          <th>TITULO</th>
          <th>TEFEFONO</th>
          <th>DIRECCION</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <!-- sentecias selectivas
      ->if
      -> switch / clase
      sentencias repetetiva/iterativa
      -> for incio, condicion,incre
      -> while condicion
      -> do while
      -> foreach -->
      <tbody>
         <?php foreach ($instructores as $filaTemporal): ?>
           <tr>
              <td><?php echo $filaTemporal->id_ins; ?></td>
              <td><?php echo $filaTemporal->cedula_ins; ?></td>
              <td><?php echo $filaTemporal->primer_apellido_ins; ?></td>
              <td><?php echo $filaTemporal->segundo_apellido_ins; ?></td>
              <td><?php echo $filaTemporal->nombre_ins; ?></td>
              <td><?php echo $filaTemporal->titulo_ins; ?></td>
              <td><?php echo $filaTemporal->telefono_ins; ?></td>
              <td><?php echo $filaTemporal->direccion_ins; ?></td>
              <!-- ico editar
              el foreach es que se va a repetir el numero de veces
               table-hove para que se active cuando pase el maus
                 &nbsp; es para espacios-->
              <td class="text-center">
                  <a href="<?php echo site_url(); ?>/instructores/editar/<?php echo $filaTemporal->id_ins;?>" title="Editar Instructor"><i class="mdi mdi-pencil"> </i>Editar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php if ($this->session->userdata("conectado")->perfil_usu=="ADMINISTRADOR"): ?>
                    <a href="<?php echo site_url(); ?>/instructores/eliminar/<?php echo $filaTemporal->id_ins;?>" title="Eliminar Instructor" onclick="return confirm('¿Estas seguro de eliminar permanenteme el registro?');"><i class="mdi mdi-close"style="color:red;"> </i>Eliminar</a>
                  <?php endif; ?>
              </td>
            </tr>

                <?php endforeach; ?>
     </tbody>

  </table>
    <?php else: ?>
      <h1>No hay instructores</h1>
    <?php endif; ?>
<!-- llamar a la funcion de buscar con datatable -->
    <script type="text/javascript">
      $("#tbl_instructores").DataTable();
    </script>
