$(function() {
    $("#pesquisa").keyup(function() {

        var pesquisa = $(this).val();

        if (pesquisa != '') {
            var dados = {
                palavras: pesquisa
            }
            $.post('./application/controllers/pesquisa.php', dados, function(retorna) {
                $(".resultado").html(retorna)
            })
        } else {
            $(".resultado").html('')
        }

    })
})