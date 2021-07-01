$(function () {


    $("#cepCliente").on("blur", function(e) {
        e.preventDefault();

        var cep = $(this).val().replace(/\D/g, '');
        if (cep != "") {
            var validacep = /^[0-9]{8}$/;
            if(validacep.test(cep)) {
                $("#rua").val("Buscando...");
                $("#bairro").val("Buscando...");
                $("#cidade").val("Buscando...");
                $("#uf").val("Buscando...");

                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                    if (!("erro" in dados)) {
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                    }
                    else {
                        aviso_mensagem("CEP não encontrado.");
                    }
                });
            }
            else {
                aviso_mensagem("Formato de CEP inválido.");
            }
        }
    }); // FINAL BBUSAR CEP CLIENTE



}); // FECHAR FUNCAO

