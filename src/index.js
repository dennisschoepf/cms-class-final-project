document.addEventListener('DOMContentLoaded', function () {
  /* Current state */
  let menuOpen = false;

  /* Store interactive elements */
  const menu = document.querySelector('#menu');
  const menuTrigger = document.querySelector('#menu-trigger');

  /* Register event listeners */
  menuTrigger.addEventListener('click', (event) =>
    handleMenuButtonClick(event)
  );

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

  function openMenu() {
    menu.classList.add('open');
    menuTrigger.classList.add('is-active');
  }

  function closeMenu() {
    menu.classList.remove('open');
    menuTrigger.classList.remove('is-active');
  }
});
