<?php

?>


 </header>

<body>
    <img class="img-cover" src="assets/images/bg1.svg" alt="Backgrond Branco SVG">
    <img class="img-logo" src="./assets/images/Untitled-3.png" alt="Logomarca Educar">
    <div class="container">
        <form name="contact" id="contact" action="#" method="POST">
        <div class="row">
		<div class="col-md-12">
			<h3>Cadastro</h3>

			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs " id="myTabs">
						<li class="active">
							<a href="#person" aria-controls="person" data-toggle="tab" role="presentation">
							Dados Pessoais</a>
						</li>
						<li>
							<a href="#adress" aria-controls="adress" aria-controls="home" data-toggle="tab" role="presentation">
							Endereço</a>
						</li>
						<li>
							<a href="#payment" aria-controls="payment" aria-controls="home" data-toggle="tab" role="presentation">
							Pagamentos </a>
						</li>
                    </ul>

            <div class="tab-content">

                <!-- PERSON -->
			    <div class="tab-pane active" id="person">
                    <fieldset>
                    <div class="col-xs-12">
                        <input 
                        class="form-control"
                        id="nome" 
                        name="nome" 
                        placeholder="Nome Completo" 
                        type="text" 
                        tabindex="1" 
                        required 
                        autofocus>
                    </div>    
                    </fieldset>
                    <fieldset>
                    <div class="col-xs-12">
                        <input
                        class="form-control" 
                        id="email" 
                        name="email" 
                        placeholder="Email" 
                        type="email" 
                        tabindex="2" 
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
                        required>
                    </div>    
                    </fieldset>
                    <fieldset>
                    <div class="col-xs-12">
                        <input 
                        class="form-control"
                        id="phone" 
                        name="phone" 
                        placeholder="Telefone(Opcional)" 
                        type="tel" 
                        pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" 
                        OnKeyPress="formatar('## ####-####', this)" 
                        tabindex="3" 
                        maxlength="13" 
                        required>
                    </div>
                    </fieldset>
                    <fieldset>
                    <div class="col-xs-12">    
                        <input 
                        class="form-control"
                        id="phone2" 
                        name="phone2" 
                        placeholder="Celular" 
                        pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" 
                        OnKeyPress="formatar('## #####-####', this)" 
                        type="tel" 
                        tabindex="4" 
                        maxlength="13">
                    </div>    
                    </fieldset>
                    <fieldset>
                    <div class="col-xs-12">    
                        <input 
                        class="form-control"
                        placeholder="CPF(Somente Números)" 
                        type="text" 
                        tabindex="5"
                        maxlength="14" 
                        OnKeyPress="formatar('###.###.###-##', this)" 
                        pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$">
                    </div>    
                    </fieldset>
                    <fieldset>
                    <div class="col-xs-12">    
                        <input 
                        class="form-control"
                        placeholder="Data de Nascimento" 
                        tabindex="6" 
                        type="text"
                        name="dtnasc" 
                        id="dtnasc" 
                        maxlength="10" 
                        OnKeyPress="formatar('##/##/####', this)" 
                        onBlur="showhide()" 
                        required>
                    </div>    
                    </fieldset>
                    <!-- <fieldset>
                        <a href="#adress" aria-controls="adress" aria-controls="home" data-toggle="tab" role="presentation"><button 
                        name="prox" 
                        class="prox" 
                        id="contact-submit" 
                        data-submit="...Sending">
                        Próximo
                        </button></a>
                    </fieldset> -->
                    <fieldset>
                        <button 
                        name="limpar" 
                        id="limpar" 
                        type="reset" 
                        id="contact-submit" 
                        data-submit="...Limpando">
                        Limpar
                        </button>
                    </fieldset>
                </div>

                <!-- ADRESS -->
			    <div class="tab-pane" id="adress">
                    <fieldset>
                    <div class="col-xs-12">    
                    <input
                    id="cep"
                    name="cep"
                    placeholder="CEP(Apenas números)"
                    class=""
                    required=""
                    value=""
                    type="search"
                    maxlength="8"
                    pattern="[0-9]+$"
                    />
                    </div>
                    <div class="col-xs-12">  
                    <button
                    type="button"
                    class="btn btn-primary buttoncep"
                    onclick="pesquisacep(cep.value)"
                    >
                    Pesquisar
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary buttoncep"
                        onclick="pesquisacep(cep.value)"
                    >
                    Nao sei meu CEP
                    </button>
                    </div>
                    </fieldset>
                    <fieldset>
                    <div class="col-xs-12">
                    <input
                        id="rua"
                        name="rua"
                        class="form-control"
                        placeholder="Rua"
                        required=""
                        type="text"
                        />
                    </div>    
                    </fieldset>
                    <fieldset>
                    <div class="col-xs-6">    
                        <input
                        id="numero"
                        name="numero"
                        class="form-control"
                        placeholder="Número"
                        required=""
                        type="text"
                        />
                        </div>
                        <div class="col-xs-6">
                        <input
                        id="complemento"
                        name="complemento"
                        class="form-control"
                        placeholder="Completo"
                        required=""
                        type="text"
                        />
                        </div>
                    </fieldset>
                    <fieldset>
                    <div class="col-xs-12">
                        <input
                        id="bairro"
                        name="bairro"
                        class="form-control"
                        placeholder="Bairro"
                        required=""
                        type="text"
                        />
                    </div>    
                    </fieldset>
                    <fieldset>
                    <div class="col-xs-12">    
                        <input
                        id="cidade"
                        name="cidade"
                        class="form-control"
                        placeholder="Cidade"
                        required=""
                        readonly="readonly"
                        type="text"
                        />
                    </div>    
                    </fieldset>
                    <fieldset>
                    <div class="col-xs-12">    
                        <input
                        id="estado"
                        name="estado"
                        class="form-control"
                        placeholder="Estado"
                        required=""
                        readonly="readonly"
                        type="text"
                        />
                    </div>    
                    </fieldset>
                    <!-- <fieldset>
                        <input placeholder="Data de Nascimento" 
                        tabindex="6" 
                        type="text" 
                        id="datanasc" 
                        maxlength="10" 
                        OnKeyPress="formatar('##/##/####', this)" 
                        onBlur="showhide()" 
                        required>
                    </fieldset> -->
                    <fieldset>
                        <!-- <button 
                        name="submit" 
                        type="submit" 
                        id="contact-submit" 
                        data-submit="...Sending">
                        Proximo
                        </button>
                    </fieldset> -->
                    <fieldset>
                        <button 
                        name="limpar"
                        id="limpar" 
                        type="reset" 
                        id="contact-submit" 
                        data-submit="...Sending">
                        Limpar
                        </button>
                    </fieldset>
                </div>
        
        <!-- PAYMENT -->
        <div class="tab-pane" id="payment">
            <fieldset>
                <div class="col-xs-12">
                <select id="tipo" class="form-control" required="">
                    <option value="graduacao" disabled>Graduação - Em breve</option>
                        <option value="pos" selected >Pós-Graduacao</option>
                        <option value="capacitacao" disabled>Capacitação - Em breve</option>
                        <option value="extensao" >Extensão</option>
                    </select>
                </div>   
            </fieldset>
            <fieldset>
                <div class="col-xs-12">
                <select id="tipo" class="form-control" required="">
                    <?php foreach ($cursos as $curso):
                        if ($curso->modalidade === "3") : 
                    ?>
                    <option value="<?= $curso->titulo ?>" required><?= $curso->titulo?></option>
                        <?php endif ?>      
                    <?php endforeach ?>
                </select>
                </div>
            </fieldset>
            <fieldset>
            <div class="col-xs-12">
            <select id="tipo" class="form-control" required="">
                    <option value="graduacao" selected>1x R$450,00</option>
                        <option value="pos" >1x R$450,00</option>
                        <option value="capacitacao">1x R$450,00</option>
                        <option value="extensao" >1x R$450,00</option>
                    </select>
            </div>      
            </fieldset>
            <fieldset>
                <div class="col-xs-12">
                <input
                id="cartao"
                name="cartao"
                class="form-control"
                placeholder="Número do Cartao"
                required=""
                type="text"
                pattern="\[0-9]{4}\ [0-9]{4}\ [0-9]{4}\ [0-9]{4}\$"
                OnKeyPress="formatar('#### #### #### ####', this)"
                maxlength="19"
                tabindex="1"
                />
                </div>
            </fieldset>
            <fieldset>
                <div class="col-xs-6">
                <input
                id="cds"
                name="cds"
                class="form-control"
                placeholder="Código de Segurança"
                required=""
                type="text"
                pattern="\[0-9]{3}"
                maxlength="3"
                tabindex="2"
                />
                </div>
                <div class="col-xs-6">
                <input
                id="validade"
                name="validade"
                class="form-control"
                placeholder="Validade do Cartão (MM/AA)"
                required=""
                OnKeyPress="formatar('##/##', this)" 
                onBlur="showhide()"
                maxlength="5"             
                type="text"
                tabindex="3"
                />
                </div>
            </fieldset>
            <fieldset>
            <div class="col-xs-12">  
            <input 
                class="form-control"
                id="nometitular" 
                name="nometitular" 
                placeholder="Nome do Titular do Cartão" 
                type="text" 
                tabindex="4" 
                required 
                >
            </div>
            </fieldset>
            <fieldset>
            <div class="col-xs-12">    
            <input
                id="cpftitular"
                name="cpftitular"
                class="form-control" 
                placeholder="CPF Titular do Cartão(Somente Números)" 
                type="text" 
                tabindex="5"
                maxlength="14" 
                OnKeyPress="formatar('###.###.###-##', this)" 
                pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$">
            </div>    
            </fieldset>
            <fieldset>                
                <button 
                onclick="return validar()"
                name="submit" 
                type="submit" 
                id="contact-submit" 
                data-submit="...Sending"
                >
                Finalizar
                </button>
            </fieldset>
            <fieldset>
                <button 
                name="limpar"
                id="limpar" 
                type="reset" 
                id="contact-submit" 
                data-submit="...Sending">
                Limpar
                </button>
            </fieldset>
        </div>
    </div>
				</div>        
            


        </form>
    </div>
</body>

<!-- <script>
    function validar() {
        // Fetching values from all input fields and storing them in variables.
        var nome = document.getElementById("nome").value;
        var email = document.getElementById("email").value;

        if(nome == ""){
            alert('Preencha o campo Nome')
            return false;
        }
        if(email == ""){
            alert('Preencha o campo Email')
            return false;
        }


    }
</script> -->

<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
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
