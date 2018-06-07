<?php require('includes/header.php'); ?>

  <div class="container-fluid">
    <div class="col-lg-7">
      <h3>Cursos</h3>
      <hr/>
    </div>
    <section class="col-lg-12">
      <div class="col-auto">
        <label class="mr-sm-2" for="inlineFormCustomCurso">Curso:</label>
        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomCurso">
          <option selected>Seleccionar...</option>
          <?php if(isset($allcourses) && count($allcourses)>=1) {?>
            <?php foreach($allcourses as $curso) {?>
              <option value="<?=$curso->id?>">
                <?=$curso->nombre?>
              </option>
            <?php } ?>
          <?php } ?>
        </select>
      </div>
    </section>
    <br>
    <br>
    <section class="col-lg-12" id="horario" style="border-radius: 4px; border: 1px solid #c6c6c6; padding: 20px;">
      <div class="form-group row">
        <label for="inputIdentificador" class="col-sm-2 col-form-label">Identificador</label>
        <div class="col-sm-10">
          <input type="text" class="form-control-plaintext" id="inputIdentificador">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control-plaintext" id="inputNombre">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputProfesor" class="col-sm-2 col-form-label">Profesor</label>
        <div class="col-sm-10">
          <input type="text" class="form-control-plaintext" id="inputProfesor">
        </div>
      </div>

      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Día</th>
            <th scope="col">Hora</th>
            <th scope="col">Salón</th>
          </tr>
        </thead>
        <tbodyw id="table-curso">
          <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
        </tbody>
      </table>

    </section>

  </div>

  <?php require('includes/footer.php'); ?>
