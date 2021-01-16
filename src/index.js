document.addEventListener('DOMContentLoaded', function () {
  /* Current state */
  let menuOpen = false;
  let headerShrinked = false;

  /* Store interactive elements */
  const menu = document.querySelector('#menu');
  const menuTrigger = document.querySelector('#menu-trigger');
  const header = document.querySelector('header');

  /* Register event listeners */
  menuTrigger.addEventListener('click', (event) =>
    handleMenuButtonClick(event)
  );

  document.addEventListener('scroll', function (event) {
    const scrollPosition = window.scrollY;
    if (scrollPosition > 40 && headerShrinked === false) {
      headerShrinked = true;
      shrinkHeader();
    } else if (scrollPosition < 40 && headerShrinked === true) {
      headerShrinked = false;
      enlargeHeader();
    } else {
      return;
    }
  });

  /* Functions */
  function handleMenuButtonClick(event) {
    event.preventDefault();

    if (menuOpen === false) {
      menuOpen = true;
      openMenu();
    } else {
      menuOpen = false;
      closeMenu();
    }
  }

  function shrinkHeader() {
    header.classList.add('shrink');
  }

  function enlargeHeader() {
    header.classList.remove('shrink');
  }

  function openMenu() {
    menu.classList.add('open');
    menuTrigger.classList.add('is-active');
  }

  function closeMenu() {
    menu.classList.remove('open');
    menuTrigger.classList.remove('is-active');
  }
});
