    document.addEventListener('DOMContentLoaded', () => {
      const burger = document.getElementById('burger');
      const drawer = document.getElementById('drawer');

      burger.addEventListener('click', () => {
        const isOpen = drawer.classList.toggle('open');
        burger.classList.toggle('open');
        burger.setAttribute('aria-expanded', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
      });

      drawer.querySelectorAll('.nav-link, .btn').forEach(link => {
        link.addEventListener('click', () => {
          drawer.classList.remove('open');
          burger.classList.remove('open');
          burger.setAttribute('aria-expanded', 'false');
          document.body.style.overflow = '';
        });
      });

      const form = document.getElementById('intake-form');
      if (form) {
        form.addEventListener('submit', (e) => {
          e.preventDefault();
          alert("Thank you! Your message has been sent to the Munwi's Care team.");
          form.reset();
        });
      }

      const toTop = document.getElementById('toTop');
      window.addEventListener('scroll', () => {
        toTop.classList.toggle('show', window.scrollY > 500);
      });
      toTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    });
