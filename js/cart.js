function goToCart() {
  window.location.href = 'cart.php';
}

function loadCart() {
  xhr = new XMLHttpRequest();
  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById('cartDisplay').innerHTML = xhr.responseText;
    }
  };
  xhr.open('POST', 'loadCart.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send();
}

function addToCart(id) {
  qty = $('#qty-' + id).val();
  $.ajax({
    url: '../php/addToCart.php',
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
