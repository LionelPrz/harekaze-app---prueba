document.addEventListener('DOMContentLoaded', () => {
    fetch('../handlers/token_session.php')
        .then(response => response.json())
        .then(data => {
            const csrfToken = data.csrf_token;
            document.getElementById('csrf_token').value = csrfToken;

            const form = document.getElementById('form_r');
            form.addEventListener('submit', (event) => {
                event.preventDefault(); // Evita el envío del formulario por defecto
                
                // Validaciones del lado del cliente
                const username = document.getElementById('username').value;
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirm_password').value;

                let isValid = true;
                let errorMessage = '';

                if (!username || !email || !password || !confirmPassword) {
                    isValid = false;
                    errorMessage += 'Todos los campos son necesarios.\n';
                }

                if (password !== confirmPassword) {
                    isValid = false;
                    errorMessage += 'Las contraseñas no coinciden.\n';
                }

                if (!isValid) {
                    alert(errorMessage);
                    return;
                }

                // Enviar formulario con el token
                const formData = new FormData(form);
                formData.append('csrf_token', csrfToken);

                fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    // Verificar si el estado HTTP es correcto (200-299)
                    if (!response.ok) {
                        throw new Error('Error en la respuesta del servidor.');
                    }
                    return response.text(); // Cambia a texto plano
                })
                .then(text => {
                    if (text.includes('success')) {
                        // Redirigir si el registro fue exitoso
                        window.location.href = 'login.html';
                    } else {
                        // Mostrar mensaje de error si no hay éxito
                        alert('Error al registrar usuario:');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Hubo un problema con el registro.');
                });
            });
        })
        .catch(error => {
            console.error('Error al recuperar el Token:', error);
        });
});
