$(document).ready(function(){

    // Quando um botão de filtro é clicado
    $(".button").click(function(){
        // Adiciona a classe "active" ao botão clicado e remove dos outros
        $(this).addClass("active").siblings().removeClass("active");

        // Obtém o valor do filtro selecionado
        var filter = $(this).attr("data-filter");
    
        if (filter == "all"){
            // Exibe todos os itens da galeria
            $(".gallery .portfolio-item").show(400);
        }
        else{
            // Oculta os itens que não correspondem ao filtro
            $(".gallery .portfolio-item").not("."+filter).hide(200);
            // Exibe apenas os itens que correspondem ao filtro
            $(".gallery .portfolio-item").filter("."+filter).show(400);
        }
    });

    // // Configuração do Magnific Popup para a galeria
    // $(".gallery").magnificPopup({
    //     delegate: "a", // Seleciona os links dentro da galeria
    //     type: "image", // Define o tipo como imagem
    //     removalDelay: 500, // Adiciona um atraso para a animação de saída
    //     gallery: {
    //         enabled: true // Ativa o modo galeria (navegação entre imagens)
    //     },
    //     callbacks: {
    //         beforeOpen: function() {
    //             // Adiciona uma classe de animação antes de abrir o popup
    //             this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
    //             this.st.mainClass = this.st.el.attr('data-effect');
    //         }
    //     },
    //     closeOnContentClick: true, // Fecha o popup ao clicar na imagem
    //     midClick: true // Permite abrir o popup com o clique do meio do mouse
    // });

});
