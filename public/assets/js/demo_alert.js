  document.getElementById('entrar').addEventListener('click', () => {
    const email = document.getElementById('txtEmail').value;
    const pass = document.getElementById('txtPass').value;

    if (email && pass) {
      Swal.fire({
        icon: 'success',
        title: 'Login exitoso (Demo)',
        text: 'Has ingresado correctamente (simulado)',
        confirmButtonText: 'OK'
      }).then(() => {
        // Cambia esta ruta si tu dashboard tiene otro nombre o ubicación
        window.location.href = '../app/views/dashboard/dashboard.php';
      });
    } else {
      document.getElementById('loginMessage').classList.remove('d-none');
    }
  });