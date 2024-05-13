    // Manejador de eventos para el botón de eliminación
    $(document).ready(function() {
        $('.delete-btn').click(function() {
            var productId = $(this).data('id'); // Obtener el ID del producto a eliminar
            $('#confirmDeleteModal').modal('show'); // Mostrar el modal de confirmación
            $('#confirmDeleteBtn').attr('data-product-id', productId); // Asignar el ID del producto al botón de confirmación dentro del modal
        });
    });

    // Manejador de eventos para el botón de confirmación dentro del modal
    document.getElementById('confirmDeleteBtn').addEventListener('click', event => {
        const productId = event.currentTarget.getAttribute('data-product-id');
        // Realizar la eliminación del producto utilizando AJAX o un formulario oculto
        // Aquí debes realizar la lógica para enviar una solicitud al servidor para eliminar el producto
        // y manejar la respuesta del servidor en consecuencia
        // Puedes utilizar AJAX para enviar una solicitud de eliminación asíncrona
        // o un formulario oculto para enviar una solicitud de eliminación síncrona
        $.ajax({
            type: 'POST',
            url: '../../config/delete-product.php',
            data: {
                id: productId
            },
            success: function(response) {
                // Manejar la respuesta del servidor aquí
                // Actualizar la página o realizar otras acciones según sea necesario
                window.location.reload();
            },
            error: function(xhr, status, error) {
                // Manejar errores aquí
                console.error(error);
            }
        });
    });