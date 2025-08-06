
//cores aleatorias
  document.addEventListener("DOMContentLoaded", function () {
    const variaveis = ['--vermelho', '--laranja', '--amarelo', '--verde', '--azul', '--roxo', '--rosa', '--creme', '--marrom'];

    // Embaralha a lista de variáveis
    const embaralhadas = variaveis.sort(() => Math.random() - 0.5);

    // Seleciona todas as bolinhas
    const bolinhas = document.querySelectorAll(".bolinha");

    // Aplica uma cor diferente em cada bolinha
    bolinhas.forEach((bolinha, index) => {
      const cor = getComputedStyle(document.documentElement).getPropertyValue(embaralhadas[index % embaralhadas.length]);
      bolinha.style.backgroundColor = cor;
    });
  });

//


