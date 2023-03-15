// Seleciona todos os links âncora que começam com #
const links = document.querySelectorAll('a[href^="#"]');

// Adiciona um listener de clique para cada link
links.forEach(link => {
  link.addEventListener('click', function(event) {
    event.preventDefault(); // Previne o comportamento padrão do link
    const targetId = this.getAttribute('href').substr(1); // Obtém o ID do alvo
    const targetElement = document.getElementById(targetId); // Seleciona o elemento alvo
    const targetOffsetTop = targetElement.offsetTop; // Obtém a posição vertical do elemento alvo
    const headerHeight = document.querySelector('header').offsetHeight; // Obtém a altura do cabeçalho
    const offset = headerHeight + 20; // Adiciona uma folga de 20 pixels
    const scrollTo = targetOffsetTop - offset; // Calcula a posição de rolagem final
    window.scrollTo({ top: scrollTo, behavior: 'smooth' }); // Faz a rolagem suave para a posição final
  });
});
