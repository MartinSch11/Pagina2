    //Boton mostrar contraseña
    document.getElementById('showPasswordCheckbox').addEventListener('change', function() {
        var passwordInput = document.getElementById('floatingPassword');
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
        } else {
          passwordInput.type = 'password';
        }
      });