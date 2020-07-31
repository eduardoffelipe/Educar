<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Educar :: Contrato</title>
  <link rel="stylesheet" href="assets/css/contractstyle.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
  <link rel="manifest" href="asstes/images/site.webmanifest">
  <link rel="mask-icon" href="asstes/images/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <!-- //favicon -->



</head>

<body>
  <!-- contact1 -->
  <section class="w3l-contact-1">
    <div class="contacts-9 section-gap">
    <div class="flex center">
    <img src="./assets/images/logoEducar.png" style="width: 250px; margin-bottom: 10px;"/>
    </div>
      <div class="wrapper">
        <!-- <h4 class="sub-title text-center">EDUCAR CENTRO EDUCACIONAL</h4> -->
        <h3 class="global-title text-center">Contrato</h3>
        <!-- <div class="d-grid contact-view">
          <div class="cont-details">
            <input type="checkbox">Ola</input>
          </div> -->

        <div class="map-content-9">
          <form action="contractform.php" method="post">

            <!-- DADOS DO ALUNO -->
            <h5 class="global-title text-center">Dados do Cliente</h5>
            <div class="twice">
              <input type="text" class="form-control" name="name" id="name" placeholder="Nome Completo" required="">
            </div>
            <div class="twice">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
            </div>
            <div class="twice-two">
              <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" required="">
              <input id="phone" name="phone" class="form-control" placeholder="Telefone" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)" />
            </div>
            <div class="twice-two">
              <input type="text" class="form-control" name="nacionalidade" id="nacionalidade" placeholder="Nacionalidade" required="">
              <input type="text" class="form-control" name="cidadenasc" id="cidadenasc" placeholder="Cidade nascimento" required="">
            </div>
            <div class="twice-two">
              <input type="text" class="form-control" name="rg" id="rg" placeholder="RG" required="">
              <input type="text" class="form-control" name="orgemissor" id="orgemissor" placeholder="Orgão Emissor" required="">
            </div>
            <div class="twice-two">
              <select class="form-control" name="sexo" id="sexo" required="">
                <option></option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
              </select>
              <input type="text" class="form-control" name="estadocivil" id="estadocivil" placeholder="Estado Civil" required="">
            </div>

            <!-- DADOS DE ENDEREÇO -->
            <h5 class="global-title text-center">Dados de endereço</h5>
            <div class="twice">
              <input id="cep" name="cep" placeholder="CEP(Apenas números)" class="" required="" value="" type="search" maxlength="8" pattern="[0-9]+$" />
              <button type="button" class="btn btn-contact" onclick="pesquisacep(cep.value)">Pesquisar</button>
            </div>


            <div class="twice">
              <input id="rua" name="rua" class="form-control" placeholder="Rua" required="" type="text" />
            </div>

            <div class="twice-two">
              <input id="numero" name="numero" class="form-control" placeholder="Número" required="" type="text" />
              <input id="complemento" name="complemento" class="form-control" placeholder="Complemento" type="text" />
            </div>

            <div class="twice-two">
              <input id="bairro" name="bairro" class="form-control" placeholder="Bairro" required="" type="text" />
              <input id="cidade" name="cidade" class="form-control" placeholder="Cidade" required="" type="text" />
            </div>

            <div class="twice-two">
              <input id="estado" name="estado" class="form-control" placeholder="Estado" required="" type="text" />
              <input id="pais" name="pais" class="form-control" placeholder="País" required="" type="text" />
            </div>

            <!-- Checkbox -->
            <div class="twice">
              <input type="checkbox" required><span class="checkboxtext">Eu concordo com os termos do nosso <a href="contrato_educar.pdf" target="_blank">Contrato</a></span></input>
            </div>
            <div class="twice">
              <input type="checkbox" required><span class="checkboxtext">Eu concordo com os termos do nosso <a href="Termo_de_matricula.pdf" target="_blank">Termo de Matricula</a></span></input>
            </div>
            <button type="submit" class="btn btn-contact">Confirmar</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- /contact1 -->
</body>

<script>
  function limpa_formulario_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('estado').value = ("");

  }

  function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
      //Atualiza os campos com os valores.
      document.getElementById('rua').value = (conteudo.logradouro);
      document.getElementById('bairro').value = (conteudo.bairro);
      document.getElementById('cidade').value = (conteudo.localidade);
      document.getElementById('estado').value = (conteudo.uf);

    } //end if.
    else {
      //CEP não Encontrado.
      limpa_formulario_cep();
      alert("CEP não encontrado.");
      document.getElementById('cep').value = ("");
    }
  }

  function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep !== "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if (validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value = "...";
        document.getElementById('bairro').value = "...";
        document.getElementById('cidade').value = "...";
        document.getElementById('estado').value = "...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

      } //end if.
      else {
        //cep é inválido.
        limpa_formulario_cep();
        alert("Formato de CEP inválido.");
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulario_cep();
    }
  }

  function formatar(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1);
    var texto = mascara.substring(i);

    if (texto.substring(0, 1) != saida) {
      documento.value += texto.substring(0, 1);
    }

  }

  function idade() {
    var data = document.getElementById("dtnasc").value;
    var dia = data.substr(0, 2);
    var mes = data.substr(3, 2);
    var ano = data.substr(6, 4);
    var d = new Date();
    var ano_atual = d.getFullYear(),
      mes_atual = d.getMonth() + 1,
      dia_atual = d.getDate();

    ano = +ano,
      mes = +mes,
      dia = +dia;

    var idade = ano_atual - ano;

    if (mes_atual < mes || mes_atual == mes_aniversario && dia_atual < dia) {
      idade--;
    }
    return idade;
  }


  function exibe(i) {



    document.getElementById(i).readOnly = true;




  }

  function desabilita(i) {

    document.getElementById(i).disabled = true;
  }

  function habilita(i) {
    document.getElementById(i).disabled = false;
  }


  function showhide() {
    var div = document.getElementById("newpost");

    if (idade() >= 18) {

      div.style.display = "none";
    } else if (idade() < 18) {
      div.style.display = "inline";
    }

  }
</script>

</html>