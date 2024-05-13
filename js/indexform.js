// Seleccionar el formulario y el botón de envío
const loginForm = document.getElementById("loginForm");
const btnSubmit = document.getElementById("btnSubmit");
const modalTitle = document.getElementById("modalTitle");
const modalText = document.getElementById("modalText");
// Crear el modal
const modal = new bootstrap.Modal(document.getElementById("modalMessage"));

// Agregar un evento de clic al botón de envío
// Agregar un evento de clic al botón de envío
btnSubmit.addEventListener("click", async (e) => {
    e.preventDefault();

    try {
        const response = await fetch('config/login.php', {
            method: 'POST',
            body: new FormData(loginForm)
        });

        if (!response.ok) {
            throw new Error('Hubo un problema al enviar la solicitud');
        }

        const data = await response.json();

        modalTitle.innerText = data.status.toUpperCase();
        modalText.innerText = data.text;
        modal.show();

        // Esperar 2 segundos antes de redirigir
        setTimeout(() => {
            if (data.status === 'success') {
                // Redireccionar si el inicio de sesión fue exitoso
                window.location.href = 'bienvenida.php';
            }
        }, 2000); // 2000 milisegundos = 2 segundos

    } catch (error) {
        console.error('Error:', error);
    }
});