document.addEventListener("DOMContentLoaded", () => {
    // Lista de colores específicos
    const colors = ["#FF7EDC", "#FFEC00", "#FC6E22", "#73e0fa", "#00C5FF", "#FF4D00"];
    
    // Selecciona todas las tarjetas
    const cards = document.querySelectorAll(".flip-card-back");
  
    // Asigna un color aleatorio a cada tarjeta
    cards.forEach(card => {
      const randomColor = colors[Math.floor(Math.random() * colors.length)];
      card.style.backgroundColor = randomColor;
    });
  });