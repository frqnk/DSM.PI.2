// Relógio
function updateClock() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');

    const timeString = `${hours}:${minutes}`;

    const clockElement = document.getElementById('clock');
    clockElement.textContent = timeString;
}

// Função para verificar se é dia ou noite e exibir o emoji correspondente
function updateDayNightIcon() {
    const now = new Date();
    const hours = now.getHours();

    // Seleciona o elemento do ícone
    const iconElement = document.getElementById('dayNightIcon');
                  
    // Define o emoji baseado no horário (pode ajustar os limites conforme necessário)
    const dayEmoji = '☀️';
    const nightEmoji = '🌙';
    const emoji = (hours >= 6 && hours < 18) ? dayEmoji : nightEmoji;

    // Define o emoji no elemento
    iconElement.textContent = emoji;
  }

// Atualiza o ícone de dia/noite a cada minuto
setInterval(updateDayNightIcon, 60000);

// Atualiza o ícone imediatamente ao carregar a página
updateDayNightIcon();

// Atualiza o relógio a cada segundo
setInterval(updateClock, 1000);

// Atualiza o relógio imediatamente ao carregar a página
updateClock();

// Ativação do carrossel
$('#meuCarousel').carousel({
    interval: 5000 // Transição em milissegundos
});

// Função para verificar a rolagem da página e exibir/ocultar o footer
window.onscroll = function() {
    const footer = document.getElementById("footer");
    const rect = footer.getBoundingClientRect();

    // Se o rodapé estiver visível na janela de visualização
    if (rect.top < window.innerHeight && rect.bottom >= 0) {
        footer.style.bottom = "0";
    } else {
        footer.style.bottom = "-100px";
        footer.style.display = "none";
    }
};