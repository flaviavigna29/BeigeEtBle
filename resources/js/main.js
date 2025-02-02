document.addEventListener('DOMContentLoaded', function() {
    const roomTitles = document.querySelectorAll('.card_home h5');
    const section = document.querySelector('.section-2');
    let currentIndex = 0;
    
    // Oggetto con i percorsi delle immagini
    const roomImages = [
        '/storage/home_page/hydra.jpg',
        '/storage/home_page/aries.jpg',
        '/storage/home_page/orione.jpg',
        '/storage/home_page/cassiopea.jpg'
    ];

    // Funzione per aggiornare il background e l'elemento attivo
    function updateBackground() {
        // Rimuovi active da tutti
        roomTitles.forEach(t => t.classList.remove('active'));
        // Aggiungi active all'elemento corrente
        roomTitles[currentIndex].classList.add('active');
        
        // Aggiorna il background
        section.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), url(${roomImages[currentIndex]})`;
        
        // Incrementa l'indice
        currentIndex = (currentIndex + 1) % roomImages.length;
    }

    // Imposta l'intervallo per il cambio automatico
    setInterval(updateBackground, 6500); // Cambia ogni 4 secondi

    // Esegui immediatamente per il primo caricamento
    updateBackground();
});