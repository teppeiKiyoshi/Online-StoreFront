//VERIFY LOGIN
function verifyLogin(email_login, password_login) {
  xhr = new XMLHttpRequest();
  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.responseText === 'valid') {
        window.location.href = 'index.php';
      } else {
        document.getElementById('errorMessage').innerHTML = xhr.responseText;
      }
    }
  };
  xhr.open('POST', 'php/verifyLogin.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send('user=' + email_login + '&pass=' + password_login);
}

// VERIFY REGISTRATION DATA
function confirmRegister(
  firstName,
  lastName,
  contact_register,
  email_register,
  password_register
) {
  xhr = new XMLHttpRequest();
  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.responseText === 'valid') {
        document.getElementById('errorMessageRegister').innerHTML =
          'Account successfully registered. Please login to access your account.';
        setTimeout(() => {
          window.location.href = 'login.php';
        }, 1000);
      } else {
        document.getElementById('errorMessageRegister').innerHTML =
          xhr.responseText;
      }
    }
  };
  xhr.open('POST', 'php/confirmRegister.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send(
    'newFN=' +
      firstName +
      '&newLN=' +
      lastName +
      '&newContact=' +
      contact_register +
      '&newEmail=' +
      email_register +
      '&newPass=' +
      password_register
  );
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
        url: 'php/logout.php',
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
