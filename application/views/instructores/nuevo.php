<h1>NUEVO INSTRUCTOR</h1>
<form class=""
id="frm_nuevo_instructor"
action="<?php echo site_url(); ?>/instructores/guardar"
method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Cédula:
            <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="number"
          placeholder="Ingrese la cédula"
          class="form-control"
          required
          name="cedula_ins" value=""
          id="cedula_ins">
      </div>
      <div class="col-md-4">
          <label for="">Primer Apellido:
            <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese el primer apellido"
          class="form-control"
          required
          name="primer_apellido_ins" value=""
          id="primer_apellido_ins">
      </div>
      <div class="col-md-4">
        <label for="">Segundo Apellido:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el segundo apellido"
        class="form-control"
        name="segundo_apellido_ins" value=""
        id="segundo_apellido_ins">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">Nombre:
          <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese los nombres"
          class="form-control"
          required
          name="nombre_ins" value=""
          id="nombre_ins">
      </div>
      <div class="col-md-4">
          <label for="">Título:
            <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese el titulo"
          class="form-control"
          required
          name="titulo_ins" value=""
          id="titulo_ins">
      </div>
      <div class="col-md-4">
        <label for="">Teléfono:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="number"
        placeholder="Ingrese el telefono"
        class="form-control"
        required
        name="telefono_ins" value=""
        id="telefono_ins">
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-12">
          <label for="">Dirección:
            <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese la direccion"
          class="form-control"
          required
          name="direccion_ins" value=""
          id="direccion_ins">
      </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/instructores/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>

<script type="text/javascript">
  $("#frm_nuevo_instructor").validate({
    rules:{
          cedula_ins:{
            required:true,
            minlength:10,
            maxlength:10,
            // digits:true
          },
          primer_apellido_ins:{
            required:true,
            minlength:3,
            maxlength:250,
            letras:true
          },
          nombre_ins:{
            required:true,
            minlength:3,
            maxlength:150,
            letras:true
          },
          titulo_ins:{
            required:true,
            minlength:3,
            maxlength:150,
            letras:true
          },
          telefono_ins:{
            required:true,
            minlength:10,
            maxlength:10
          }
    },
    messages:{
        cedula_ins:{
          required:"Por favor ingrese el numero de cedula",
          minlength:"Cedula incorrecta, ingrese 10 digitos",
          maxlength:"Cedula incorrecta, ingrese 10 digitos",
          digits:"Este campo solo acepta números",
          number:"Este campo solo acepta números",
        },
        primer_apellido_ins:{
          required:"Por favor ingrese el primer apellido",
          minlength:"El apellido debe tener al menos 3 caracteres",
          maxlength:"Apellido Incorrecto",
        },
        nombre_ins:{
          required:"Por favor ingrese su nombre",
          minlength:"El nombre debe tener al menos 3 digitos",
          maxlength:"Nombre Incorrecto",
        },
        titulo_ins:{
          required:"Por favor ingrese su titulo",
          minlength:"El titulo debe tener almenos 3 digitos",
          maxlength:"Titulo Incorrecto",
        },
        telefono_ins:{
          required:"Por favor ingrese el numero de telefono",
          minlength:"Cedula incorrecta, ingrese 10 digitos",
          maxlength:"Cedula incorrecta, ingrese 10 digitos",
          digits:"Este campo solo acepta números",
          number:"Este campo solo acepta números",
        }
    }
  });
</script>
</form>
