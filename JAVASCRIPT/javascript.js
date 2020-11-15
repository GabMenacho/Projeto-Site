// função presente na página contatos, formulário
function botaoEnviar() {
    alert("Formulário enviado com sucesso");
}

//função na página de produtos, no cupom de 10%
function inscricao() {
    alert("Inscrição enviada com sucesso. Verifque seu e-mail.");
}


//Troca de imagens presenta na página Home
function trocarImagem1(contador)
    {
        var img = document.getElementById("imgkkraken");
        var timer;
        if (contador==1)
            {
                document.images["imgkkraken"].src="../imagens/kkrankenbruder13.jpg";
                clearTimeout(timer);
            }

        else if (contador ==0)
            {
                document.images["imgkkraken"].src="../imagens/kkrankenbruder4.jpg";
            }
    }

function trocarImagem2(contador)
    {
        var img = document.getElementById("imgnieta");
        var timer;
        if (contador==1)
            {
                document.images["imgnieta"].src="../imagens/nieta3.jpg";
                clearTimeout(timer);
            }

        else if (contador ==0)
            {
                document.images["imgnieta"].src="../imagens/nieta4.jpg";
            }
    }

function trocarImagem3(contador)
    {
        var img = document.getElementById("imgwander");
        var timer;
        if (contador==1)
            {
                document.images["imgwander"].src="../imagens/wander7.jpg";
                clearTimeout(timer);
            }

        else if (contador ==0)
            {
                document.images["imgwander"].src="../imagens/wander5.jpg";
            }
    }

    //função de zoom presente na página de produtos, não funcionou
let zoom = (imagem) =>
    {
        console.log(imagem);
        if (imagem.witdh == "45%")
            imagem.witdh = "60%";

        else if (imagem.witdh == "55%")
            imagem.witdh = "70%";

        else if (imagem.witdh == "32%")
            imagem.witdh = "55%";

        else if (imagem.witdh == "70%")
            imagem.witdh = "85%";
        else
            imagem.witdh = "45%";
    };