const sign_in_btn = document.querySelector('#sign-in-btn');
const sign_up_btn = document.querySelector('#sign-up-btn');
const container = document.querySelector('.container');
const sign_up_form = document.querySelector('#signUp-form');
const log_in_form = document.querySelector('#form_id');

sign_up_btn.addEventListener('click', () => {
  container.classList.add('sign-up-mode');
});

sign_in_btn.addEventListener('click', () => {
  container.classList.remove('sign-up-mode');
});

sign_up_form.addEventListener('submit', (e) => {
  e.preventDefault();
});

log_in_form.addEventListener('submit', (e) => {
  e.preventDefault();
});
