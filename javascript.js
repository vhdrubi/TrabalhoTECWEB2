var ultimoFilho = 0;
var totalFilhos = 0;

function excluirFilho(filho) {
    totalFilhos--;

    if (totalFilhos == 0) {
        $('[name="tem_filhos"][value="off"]').prop('checked', true);
    }

    $('#filho'+filho).remove();
}

function adicionarFilho() {
    totalFilhos++;
    ultimoFilho++;

    $('#filhos').append('\
        <div id="filho'+ultimoFilho+'">\
            <p>Nome:</p>\
            <input type="text" name="filhos_nome['+ultimoFilho+']" placeholder="Digite o nome" />\
            <p>Idade:</p>\
            <input type="text" name="filhos_idade['+ultimoFilho+']" placeholder="Digite a idade" />\
            <br><br>\
            <button type="button" class="adicionar" onClick="adicionarFilho()">Adicionar</button>\
            <button type="button" class="excluir" onClick="excluirFilho('+ultimoFilho+')">Excluir</button>\
        </div>'
    );
}

$(document).ready(function() {
    $('[name="tem_filhos"]').change(function () {
        if ($('[name="tem_filhos"]:checked').val() == 'on') {
            if (totalFilhos == 0) {
                adicionarFilho();
            }

            $('#filhos').show();
        } else {
            $('#filhos').hide();
        }
    });
});