(()=>{
  const toggleButton = document.querySelector('.g01__toggle-nav');
  const menuMobile = document.querySelector('.g01__menu-mobile');

  toggleButton.addEventListener('click', () => {
    toggleButton.classList.toggle('is-active');
    menuMobile.classList.toggle('is-active');
  })
})()