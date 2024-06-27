// Cria o container do popup
const popupContainer = document.createElement('div');
popupContainer.id = 'popupContainer';
popupContainer.style.display = 'none';
// ... (restante do código de estilo)

// Cria o formulário de cadastro
const cadastroForm = document.createElement('form');
cadastroForm.id = 'cadastroForm';

// Cria os campos do formulário
// ... (restante do código de criação dos campos)

// Adiciona os campos ao formulário
cadastroForm.appendChild(nomeLabel);
cadastroForm.appendChild(nomeInput);
cadastroForm.appendChild(emailLabel);
cadastroForm.appendChild(emailInput);
cadastroForm.appendChild(submitButton);

// Adiciona o formulário ao container do popup
popupContainer.appendChild(cadastroForm);

// Adiciona o container do popup ao documento
document.body.appendChild(popupContainer);

// Variável para controlar se o popup já foi exibido
let popupVisible = false;

// Adiciona um evento de click ao documento para mostrar o popup
document.addEventListener('click', () => {
  if (!popupVisible) {
    popupContainer.style.display = 'block';
    popupVisible = true;
  }
});

// Adiciona um evento de click ao container do popup para fechar o popup quando clicar fora dele
popupContainer.addEventListener('click', (event) => {
  if (event.target === popupContainer) {
    popupContainer.style.display = 'none';
    popupVisible = false;
  }
});