document.addEventListener('DOMContentLoaded', function() {
    // ReferÃªncia Ã  janela existente
    var janelaExistente = document.getElementById('janelaExistente');

    // Estilizando a janela existente
    janelaExistente.style.position = 'fixed';
    janelaExistente.style.top = '50%';
    janelaExistente.style.left = '50%';
    janelaExistente.style.transform = 'translate(-50%, -50%)';

    // Exibindo a janela existente
    janelaExistente.style.display = 'block';

    // Definindo um timeout para ocultar a janela apÃ³s alguns milissegundos
    setTimeout(function() {
        janelaExistente.style.display = 'none';
    }, 4000); // Substitua 2000 pelo nÃºmero desejado de milissegundos
    });

function minhaFuncao() {
    window.open("menu.html", "_blank", "with=500", "height=500")
}


