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
