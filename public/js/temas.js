// TEMAS
const themeToggle = document.getElementById('themeToggle');
const theme = document.getElementById('theme');
const footer = document.getElementById('footer') || document.querySelector('.nav-bar');
const navLinks = document.querySelectorAll('.nav-bar a') || [];
const mainContent = document.getElementById('mainContent');
const modals = document.querySelectorAll('.modal-content');
const GestaoEstoqueText = document.getElementById('GestaoEstoqueText');  // Adicionando a referência ao título

// Função para alterar o gradiente do texto de GestaoEstoque
function setGestaoEstoqueTextGradient(isDarkMode) {
    if (isDarkMode) {
        // Gradiente para o tema escuro
        GestaoEstoqueText.style.background = 'linear-gradient(90deg, rgba(0,212,255,1) 1%, rgba(9,86,121,1) 55%, rgba(9,30,121,1) 83%)';
        GestaoEstoqueText.style.webkitBackgroundClip = 'text';  // Suporte para clip de texto no gradiente
        GestaoEstoqueText.style.color = 'transparent';  // Deixa a cor transparente para exibir o gradiente
    } else {
        // Gradiente para o tema claro
        GestaoEstoqueText.style.background = 'linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%)';
        GestaoEstoqueText.style.webkitBackgroundClip = 'text';  // Suporte para clip de texto no gradiente
        GestaoEstoqueText.style.color = 'transparent';  // Deixa a cor transparente para exibir o gradiente
    }
}


function switchToDarkMode() {
    // Definir o fundo e a cor do texto para o tema escuro
    theme.style.backgroundColor = '#202020';  // Cor de fundo para o tema escuro
    theme.style.color = '#ffffff';  // Cor do texto para o tema escuro

    // Definir o fundo e a cor do texto do footer
    footer.style.backgroundColor = '#202020';  // Acompanhar a cor de fundo escuro do footer
    footer.style.color = '#ffffff';  // Cor do texto para o footer no tema escuro
    footer.classList.remove('text-dark');  // Remover qualquer classe de texto escuro
    footer.classList.add('text-light');    // Adicionar a classe de texto claro

    // Alterar o fundo da navbar para o tema escuro
    const navbar = document.querySelector('nav.navbar');
    navbar.classList.remove('bg-light');   // Remover a classe bg-light da navbar
    navbar.classList.add('bg-dark');       // Adicionar a classe bg-dark para navbar no modo escuro
    navbar.style.color = '#ffffff';        // Definir a cor do texto da navbar como branco no tema escuro

    // Alterar o fundo da navbar para o tema escuro
    navbar.style.backgroundColor = '#181818';  // Definir a cor de fundo escura personalizada para a navbar

    // Alterar a cor de fundo dos botões para combinar com a sidebar no modo escuro
    const buttons = document.querySelectorAll('.btn-white');
    buttons.forEach(button => {
        button.style.backgroundColor = '#181818';  // Cor de fundo igual à da navbar
        button.style.color = '#ffffff';            // Cor do texto dos botões para branco
        button.classList.remove('btn-white');      // Remover a classe de botão claro
        button.classList.add('btn-dark');          // Adicionar classe de botão escuro
    });

    mainContent.classList.remove('text-dark');
    mainContent.classList.add('text-light');
    themeToggle.checked = true;

    navLinks.forEach(link => {
        link.classList.remove('text-dark');
        link.classList.add('text-light');
    });

    modals.forEach(modal => {
        modal.classList.remove('bg-light', 'text-dark');
        modal.classList.add('bg-dark', 'text-light');
    });

    setGestaoEstoqueTextGradient(true);  // Altera o gradiente para tema escuro
    localStorage.setItem('theme', 'dark');
}

function switchToLightMode() {
    // Definir o fundo e a cor do texto para o tema claro
    theme.style.backgroundColor = '#d9e3f1';  // Cor de fundo para o tema claro
    theme.style.color = '#212121';  // Cor do texto para o tema claro

    // Definir o fundo e a cor do texto do footer
    footer.style.backgroundColor = '#d9e3f1';  // Acompanhar a cor de fundo claro do footer
    footer.style.color = '#212121';  // Cor do texto para o footer no tema claro
    footer.classList.remove('text-light');  // Remover qualquer classe de texto claro
    footer.classList.add('text-dark');    // Adicionar a classe de texto escuro

    // Alterar o fundo da navbar para o tema claro
    const navbar = document.querySelector('nav.navbar');
    navbar.classList.remove('bg-dark');   // Remover a classe bg-dark da navbar
    navbar.classList.add('bg-light');     // Adicionar a classe bg-light para navbar no modo claro
    navbar.style.color = '#212121';        // Definir a cor do texto da navbar para escuro no tema claro

    // Alterar a cor de fundo dos botões para o modo claro
    const buttons = document.querySelectorAll('.btn-dark');
    buttons.forEach(button => {
        button.style.backgroundColor = '#ffffff';  // Cor de fundo clara
        button.style.color = '#181818';            // Cor do texto para escuro
        button.classList.remove('btn-dark');       // Remover classe de botão escuro
        button.classList.add('btn-white');         // Adicionar classe de botão claro
    });

    mainContent.classList.remove('text-light');
    mainContent.classList.add('text-dark');
    themeToggle.checked = false;

    navLinks.forEach(link => {
        link.classList.remove('text-light');
        link.classList.add('text-dark');
    });

    modals.forEach(modal => {
        modal.classList.remove('bg-dark', 'text-light');
        modal.classList.add('bg-light', 'text-dark');
    });

    setGestaoEstoqueTextGradient(false);  // Altera o gradiente para tema claro
    localStorage.setItem('theme', 'light');
}



const storedTheme = localStorage.getItem('theme');
if (storedTheme === 'dark') {
    switchToDarkMode();
} else {
    switchToLightMode();
}

themeToggle.addEventListener('change', () => {
    if (themeToggle.checked) {
        switchToDarkMode();
    } else {
        switchToLightMode();
    }
});

let isSending = false;
