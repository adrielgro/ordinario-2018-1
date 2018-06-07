<?php require('includes/header.php'); ?>

  <div class="container-fluid">
    <div class="col-lg-7">
      <h3>Cursos</h3>
      <hr/>
    </div>
    <section class="col-lg-12">
      <div class="col-auto">
        <label class="mr-sm-2" for="inlineFormCustomCurso">Curso:</label>
        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomCurso" onchange="changecourse(this);">
          <option selected>Seleccionar...</option>
          <?php if(isset($allcourses) && count($allcourses)>=1) {?>
            <?php foreach($allcourses as $curso) { ?>
              <option value="<?=$curso->id?>">
                <?=$curso->nombre?>
              </option>
            <?php
						}
          } ?>
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
            <th scope="col">#</th>
            <th scope="col">Día</th>
            <th scope="col">Hora</th>
            <th scope="col">Salón</th>
          </tr>
        </thead>
        <tbody id="table-curso">

        </tbody>
      </table>

    </section>

  </div>

	<script type="text/javascript">
		var cursos = [];
		<?php
		if(isset($allcourses) && count($allcourses)>=1) {
			foreach ($allcourses as $key => $curso) { ?>
					cursos[<?=$curso->id?>] = [
						<?php foreach ($curso->horarios as $horario): ?>
            [
							"<?=$horario[0]?>",
							"<?=$horario[1]?>",
							"<?=$horario[2]?>",
							"<?=$horario[3]?>",
							"<?=$curso->nombre?>",
							"<?=$curso->profesor?>"
            ],
						<?php endforeach; ?>
					];
					<?php
			}
		} ?>

		function changecourse(id) {

			var table = "";


			cursos[id.value].forEach(function(element) {
				table += "<tr>";
				table += "<td>" + element[0] + "</td>";
				table += "<td>" + element[1] + "</td>";
				table += "<td>" + element[2] + " - " + element[3] + "</td>";
				table += "<td>" + element[5] + "</td>";
				table += "</tr>";
			});

			document.getElementById("table-curso").innerHTML = table;
			document.getElementById("inputIdentificador").value	 = cursos[id.value][0][0];
			document.getElementById("inputNombre").value = cursos[id.value][0][4];
			document.getElementById("inputProfesor").value = cursos[id.value][0][5];
		}
	</script>

  <?php require('includes/footer.php'); ?>
