function userProfile() {
  xhr = new XMLHttpRequest();
  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById('userprofile').innerHTML = xhr.responseText;
    }
  };
  xhr.open('POST', 'php/userProfile.php', true);
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
