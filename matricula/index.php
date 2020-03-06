<!DOCTYPE html>
<html lang="pt-br">
<header>
    <meta charset="utf-8">
    <title>Matrícula Educar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />

    <!-- default css files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
    <!-- default css files -->

    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!--//web font-->


    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-16x16.png">
    <link rel="manifest" href="../asstes/images/site.webmanifest">
    <link rel="mask-icon" href="../asstes/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- JivoChat -->
    <script src="//code.jivosite.com/widget/eJiH2mDsDf" async></script>
    <!-- //JivoChat -->

    <!-- scrolling script -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //scrolling script -->

</header>

<body>
    <img class="img-cover" src="assets/images/bg1.svg" alt="Backgrond Branco SVG">
    <img class="img-logo" src="./assets/images/Untitled-3.png" alt="Logomarca Educar">
    <div class="container">
        <form id="contact" action="model.php" method="post">
            <h3>Cadastro</h3>
            <h4>Dados Pessoais</h4>
            <fieldset>
                <input 
                id="nome" 
                name="nome" 
                placeholder="Nome Completo" 
                type="text" 
                tabindex="1" 
                required 
                autofocus>
            </fieldset>
            <fieldset>
                <input 
                id="email" 
                name="email" 
                placeholder="Email" 
                type="email" 
                tabindex="2" 
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
                required>
            </fieldset>
            <fieldset>
                <input 
                id="phone" 
                name="phone" 
                placeholder="Telefone(Opcional)" 
                type="tel" 
                pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" 
                OnKeyPress="formatar('## ####-####', this)" 
                tabindex="3" 
                maxlength="13" 
                required>
            </fieldset>
            <fieldset>
                <input 
                id="phone2" 
                name="phone2" 
                placeholder="Celular" 
                pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" 
                OnKeyPress="formatar('## #####-####', this)" 
                type="tel" 
                tabindex="4" 
                maxlength="13">
            </fieldset>
            <fieldset>
                <input 
                placeholder="CPF(Somente Números)" 
                type="text" 
                tabindex="5"
                maxlength="14" 
                OnKeyPress="formatar('###.###.###-##', this)" 
                pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$">
            </fieldset>
            <fieldset>
                <input 
                placeholder="Data de Nascimento" 
                tabindex="6" 
                type="text"
                name="dtnasc" 
                id="dtnasc" 
                maxlength="10" 
                OnKeyPress="formatar('##/##/####', this)" 
                onBlur="showhide()" 
                required>
            </fieldset>
            <fieldset>
                <button 
                name="submit" 
                type="submit" 
                id="contact-submit" 
                data-submit="...Sending">
                Proximo
                </button>
            </fieldset>
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

        </form>
    </div>
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
