<div class="row">
    <div class="col-md-8">
    <h1>LISTADO DE USUARIOS</h1>
    </div>
    <div class="col-md-4">
      <br>
      <br>
      <a href="<?php echo site_url('instructores/nuevo'); ?>"class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i>Agregar Instructor</a>
    </div>
</div>
<br>
<br>
<?php if ($usuarios): ?>
    <table class="table table-striped  table-bordered table-hover">
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
         <?php foreach ($usuarios as $filaTemporal): ?>
           <tr>
              <td><?php echo $filaTemporal->id_us; ?></td>
              <td><?php echo $filaTemporal->cedula_us; ?></td>
              <td><?php echo $filaTemporal->primer_apellido_us; ?></td>
              <td><?php echo $filaTemporal->segundo_apellido_us; ?></td>
              <td><?php echo $filaTemporal->nombre_us; ?></td>
              <td><?php echo $filaTemporal->titulo_us; ?></td>
              <td><?php echo $filaTemporal->telefono_us; ?></td>
              <td><?php echo $filaTemporal->direccion_us; ?></td>
              <!-- ico editar
              el foreach es que se va a repetir el numero de veces
               table-hove para que se active cuando pase el maus
                 &nbsp; es para espacios-->
              <td class="text-center">
                  <a href="#" title="Editar Usuario"><i class="glyphicon glyphicon-pencil"> </i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?php echo site_url(); ?>/usuarios/eliminar/<?php echo $filaTemporal->id_us;?>" title="Eliminar Usuario" onclick="return confirm('¿Estas seguro de eliminar permanenteme el registro?');"><i class="glyphicon glyphicon-trash"style="color:red"> </i></a>
              </td>
            </tr>

                <?php endforeach; ?>
     </tbody>

  </table>
    <?php else: ?>
      <h1>No hay Usuarios</h1>
    <?php endif; ?>
