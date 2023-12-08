document.addEventListener('keypress', function(evt) {
    // Si el evento NO es una tecla Enter
    if (evt.key !== 'Enter') {
      return;
    }
    let element = evt.target;
    // Si el evento NO fue lanzado por un elemento con class "focusNext"
    if (!element.classList.contains('focusNext')) {
      return;
    }
    // Lógica para encontrar el siguiente campo
    let tabIndex = element.tabIndex + 1;
    var next = document.querySelector('[tabindex="'+tabIndex+'"]');
    // Si encontramos un elemento
    if (next) {
      next.focus();
      event.preventDefault();
    }
    // Evitar que se borre el texto
    if (element.tagName.toLowerCase() === 'input') {
      element.value = element.value; // Restablecer el valor para evitar que se borre
    }
  });
  
  