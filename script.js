document.addEventListener('DOMContentLoaded', function() {
    // Referencia a janela existente
    var janelaExistente = document.getElementById('janelaExistente');

    // Estilizando a janela existente
    janelaExistente.style.position = 'fixed';
    janelaExistente.style.top = '50%';
    janelaExistente.style.left = '50%';
    janelaExistente.style.zIndex = 3;
    janelaExistente.style.transform = 'translate(-50%, -50%)';
    janelaExistente.style.backgroundSize = cover;

    // Exibindo a janela existente
    janelaExistente.style.display = 'block';

    // Definindo um timeout para ocultar a janela por alguns milissegundos
    setTimeout(function() {
        janelaExistente.style.display = 'none';
    }, 4000); //tempo desejado de milissegundos
});

$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

function validatePasswords() {
    var pwd = document.getElementById("pwd").value;
    var cpwd = document.getElementById("cpwd").value;
  
    if (pwd != cpwd) {
      alert("As senhas não coincidem.");
      return false;
    }
  
    return true;
}