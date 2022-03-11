//variables for nav header and side bar
const body = document.querySelector('body'),
  nav = document.querySelector('nav'),
  searchToggle = document.querySelector('.searchToggle'),
  sidebarOpen = document.querySelector('.sidebarOpen'),
  siderbarClose = document.querySelector('.siderbarClose');

// js code to toggle search box
// searchToggle.addEventListener('click', () => {
//   searchToggle.classList.toggle('active');
// });

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

//VERIFY LOGIN
function verifyLogin(email_login, password_login) {
  xhr = new XMLHttpRequest();
  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.responseText === 'valid') {
        window.location.href = '../index.php';
      } else {
        document.getElementById('errorMessage').innerHTML = xhr.responseText;
      }
    }
  };
  xhr.open('POST', '../php/verifyLogin.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send('user=' + email_login + '&pass=' + password_login);
}

//ADD TO CART
function addToCart(id) {
  qty = $('#qty-' + id).val();
  $.ajax({
    url: 'addToCart.php',
    method: 'POST',
    data: {
      prodID: id,
      qty: qty,
    },
    success: (data) => {
      if (data == 'valid') {
        Swal.fire({
          title: 'Successful!',
          text: 'Item successfully added to cart!',
          showConfirmButton: false,
          timer: 1000,
          icon: 'success',
        });
        getProduct();
      } else if (data == 'invalid') {
        Swal.fire({
          title: 'Not Successful!',
          text: 'Sorry. There is not enough item quantity.',
          showConfirmButton: false,
          timer: 3000,
          icon: 'error',
        });
      } else {
        alert(data);
      }
    },
  });
}

//GO TO USER PROFILE SECTION
function userProfile() {
  xhr = new XMLHttpRequest();
  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById('userprofile').innerHTML = xhr.responseText;
    }
  };
  xhr.open('POST', '../php/userProfile.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send();
}

// LOG OUT FUNCTION
function logout() {
  Swal.fire({
    title: 'Logout',
    text: 'Are you sure you want to logout?',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: '../php/logout.php',
        method: 'POST',
        success: (data) => {
          if (data == 1) {
            window.location.href = 'login.php';
          } else {
            alert(data);
          }
        },
      });
    }
  });
}
