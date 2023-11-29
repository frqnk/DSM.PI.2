// Relógio
function updateClock() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');

    const timeString = `${hours}:${minutes}`;

    const clockElement = document.getElementById('clock');
    clockElement.textContent = timeString;
}

// Atualiza o relógio a cada segundo
setInterval(updateClock, 1000);

// Atualiza o relógio imediatamente ao carregar a página
updateClock();

// Ativação do carrossel
$('#meuCarousel').carousel({
    interval: 5000 // Transição em milissegundos
});