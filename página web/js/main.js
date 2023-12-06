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