document.addEventListener("DOMContentLoaded", function() {
    // Código para realizar scroll suave a las secciones de la página
    document.querySelectorAll('nav ul li a').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
      });
    });
  });
  