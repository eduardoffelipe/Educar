<div class="row mgtop">
  <!-- <img src="./assets/images/logoEducar.png" style="width: 400px; margin-bottom: 20px;" class="center" alt=""/> -->
  <div class="col-md-4">
    <img src="./assets/images/edtudante.jpg" alt="" class="asideft" />
  </div>
  <div class="col-md-8 col-sm-12">
    <form class="form-horizontal" method="post" action="<?= base_url() ?>vindi2">
      <fieldset>
        <div class="panel panel-primary">
          <div class="panel-body">
            <h3 class="cadastro">Cadastro</h3>
            <div class="form-group">
              <div class="col-md-11 control-label">
                <p class="help-block">
                  <h11>*</h11> Campo Obrigatório
                </p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="prependedtext">Curso</label>
              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-addon">Tipo</span>

                  <select id="tipo" name="tipo" class="form-control" required="">
                    <option value="graduacao">Graduacao - Em breve</option>
                    <option value="pos" selected>Pos-Graduacao</option>
                    <option value="capacitacao">Capacitacao - Em breve</option>
                    <option value="extensao">Extensao - Em breve</option>
                  </select>

                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <span class="input-group-addon">Curso</span>

                  <select id="curso" name="curso" class="form-control" required="">
                    <?php foreach ($cursos as $curso) :
                      if ($curso->modalidade === "3") :
                    ?>
                        <option value="<?= $curso->titulo ?>" required><?= $curso->titulo ?></option>
                      <?php endif ?>
                    <?php endforeach ?>
                  </select>


                </div>
              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="Cadastrar"></label>
              <div class="col-md-8">
                <button id="Cadastrar" name="Cadastrar" class="btn btn-success mgbt" type="Submit">
                  Cadastrar
                </button>
                <button id="Cancelar" name="Cancelar" class="btn btn-danger mgbt" type="Reset">
                  Cancelar
                </button>
              </div>
            </div>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>

<script>
  function update(){
  const select = document.getElementById('tipo');
	const value = select.options[select.selectedIndex].value;
	console.log(value); // pt
  debugger;
  }
  window.onload = () => {
    update();
    const select = document.getElementById('tipo');
    select.onchange = update;
  }
  
</script>