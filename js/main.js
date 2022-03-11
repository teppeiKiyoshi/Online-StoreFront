//variables for nav header and side bar
const body = document.querySelector('body'),
  nav = document.querySelector('nav'),
  searchToggle = document.querySelector('.searchToggle'),
  sidebarOpen = document.querySelector('.sidebarOpen'),
  siderbarClose = document.querySelector('.siderbarClose');

// js code to toggle search box
searchToggle.addEventListener('click', () => {
  searchToggle.classList.toggle('active');
});

//   js code to toggle sidebar
sidebarOpen.addEventListener('click', () => {
  nav.classList.add('active');
});

body.addEventListener('click', (e) => {
  let clickedElm = e.target;

  if (
    !clickedElm.classList.contains('sidebarOpen') &&
    !clickedElm.classList.contains('menu')
  ) {
    nav.classList.remove('active');
  }
});

// LOAD CART
let cart_btn = document.querySelector('.shopping-cart');
let cart_container = document.querySelector('.cart-container');

cart_btn.addEventListener('click', () => {
  window.location.href = 'php/cart.php';
});
