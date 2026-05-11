<!--         Caja suscripcion v3   -->
<div class="row suscripcion-homev3 mx-auto">
    <div class="suscripcion-homev2-suscribete order-1 order-md-0">
        <div class="suscripcion-homev2-divsuscribete">
            <h2>¡Suscríbete!</h2>
        </div>
        <div class="suscripcion-homev2-divopciones">
            <div class="suscripcion-homev2-divopciones-checkbox-item" id="recibirTodosDiv">
                <input type="checkbox" id="recibirTodos" checked>
                <a href="#">Recibir todos</a>
            </div>
            <div class="suscripcion-homev2-divopciones-checkbox-item" id="divergentesSemanalDiv">
                <input type="checkbox" id="divergentesSemanal">
                <span><b>DIVERGENTES</b> Semanal</span>
            </div>
            <div class="suscripcion-homev2-divopciones-checkbox-item" id="vocesDivergentesDiv">
                <input type="checkbox" id="vocesDivergentes">
                <span>Voces <b>DIVERGENTES</b></span>
            </div>
            <div class="suscripcion-homev2-divopciones-checkbox-item" id="editorsEnglishDiv">
                <input type="checkbox" id="editorsEnglish">
                <span>Editor's English Pick</span>
            </div>
        </div>
    </div>
    <div class="suscripcion-homev2-centro order-0 order-md-1">
        <div class="suscripcion-homev2-centro-texto">
            <h3>
                Cada <b>lunes</b> recibe las noticias destacadas, los <b>miércoles</b> lee la opinión de nuestros autores y los <b>sábados</b> recibe en tu correo nuestras publicaciones en inglés.
            </h3>
        </div>
        <div class="suscripcion-homev2-centro-form ">
            <form id="subscribeForm">
                <input type="email" id="email" placeholder="Escribe tu correo" required />
                <button type="submit" class="btn btn-primary">Suscribirme</button>
            </form>
        </div>
    </div>
    <div class="suscripcion-homev2-img">
        <img src="https://www.divergentes.com/wp-content/uploads/2024/09/suscribite-img.png" alt="suscribite" class="img-fluid" />
    </div>
</div>

<!-- Contenedor del Toast -->
<div class="toast-container">
    <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="8000">
        <div class="toast-header">
            <strong class="mr-auto" id="toast-title"></strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body" id="toast-body"></div>
    </div>
</div>

<style>
    /* Ajustes para posicionar el Toast correctamente */
    .toast-container {
        width: 100%;
        bottom: 0;
        left: 0px;
        right: 0;
        margin: 0 auto;
        z-index: 1050; /* Para asegurarse de que se muestre por encima del contenido */
    }
    .toast-container .toast {
        width: 100%;
        max-width: 100%;
    }
</style>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        const recibirTodos = document.getElementById('recibirTodos');
        const divergentesSemanal = document.getElementById('divergentesSemanal');
        const vocesDivergentes = document.getElementById('vocesDivergentes');
        const editorsEnglish = document.getElementById('editorsEnglish');
        const emailInput = document.getElementById('email');
        const form = document.getElementById('subscribeForm');

        const divergentesSemanalDiv = document.getElementById('divergentesSemanalDiv');
        const vocesDivergentesDiv = document.getElementById('vocesDivergentesDiv');
        const editorsEnglishDiv = document.getElementById('editorsEnglishDiv');

        // Manejar "Recibir todos" para marcar/desmarcar los otros boletines
        recibirTodos.addEventListener('change', function () {
            if (recibirTodos.checked) {
                divergentesSemanal.checked = true;
                vocesDivergentes.checked = true;
                editorsEnglish.checked = true;
                revertToText(divergentesSemanalDiv);
                revertToText(vocesDivergentesDiv);
                revertToText(editorsEnglishDiv);
            }
        });

        const checkboxes = [divergentesSemanal, vocesDivergentes, editorsEnglish];
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', function () {
                const parentDiv = checkbox.closest('div');
                if (checkbox.checked) {
                    recibirTodos.checked = false;
                    convertToAnchor(parentDiv);
                } else {
                    revertToText(parentDiv);
                }
                if (!divergentesSemanal.checked && !vocesDivergentes.checked && !editorsEnglish.checked) {
                    recibirTodos.checked = true;
                }
            });
        });

        function convertToAnchor(parentDiv) {
            const span = parentDiv.querySelector('span');
            if (span) {
                const text = span.textContent;
                const anchor = document.createElement('a');
                anchor.href = "#";
                anchor.textContent = text;
                parentDiv.replaceChild(anchor, span);
            }
        }

        function revertToText(parentDiv) {
            const anchor = parentDiv.querySelector('a');
            if (anchor) {
                const text = anchor.textContent;
                const span = document.createElement('span');
                span.textContent = text;
                parentDiv.replaceChild(span, anchor);
            }
        }

        // Función para mostrar Toast con los mensajes
        function showToast(title, message, type = 'success') {
            const toastTitle = document.getElementById('toast-title');
            const toastBody = document.getElementById('toast-body');
            const toast = $('#toast');

            // Configurar el contenido del Toast
            toastTitle.textContent = title;
            toastBody.textContent = message;

            // Estilos dependiendo del tipo (éxito o error)
            if (type === 'success') {
                toastTitle.classList.add('text-success');
                toastTitle.classList.remove('text-danger');
            } else {
                toastTitle.classList.add('text-danger');
                toastTitle.classList.remove('text-success');
            }

            // Mostrar el Toast
            toast.toast('show');
        }

        // Función para traducir los mensajes de error de Mailchimp al español
        function traducirMensajeError(mensaje) {
            if (mensaje.includes('is already a list member')) {
                return 'El correo electrónico ya está suscrito a esta lista.';
            } else if (mensaje.includes('Invalid Resource')) {
                return 'El correo electrónico es inválido.';
            } else if (mensaje.includes('is an invalid email address')) {
                return 'La dirección de correo electrónico no es válida.';
            } else if (mensaje.includes('Please enter a value')) {
                return 'Por favor, ingresa un valor.';
            } else if (mensaje.includes('Compliance related concerns')) {
                return 'Problemas relacionados con la política de cumplimiento. Contacte al soporte.';
            } else {
                return 'Hubo un error al procesar la solicitud. Por favor, inténtalo de nuevo.';
            }
        }

        // Función para enviar por AJAX
        form.addEventListener('submit', async function (event) {
            event.preventDefault();

            const email = emailInput.value;
            const listas = [];

            if (recibirTodos.checked || divergentesSemanal.checked) {
                listas.push('divergentesSemanal');
            }
            if (recibirTodos.checked || vocesDivergentes.checked) {
                listas.push('vocesDivergentes');
            }
            if (recibirTodos.checked || editorsEnglish.checked) {
                listas.push('editorsEnglish');
            }
            // Enviar los datos al servidor usando AJAX
            const formData = new FormData();
            formData.append('email', email);
            formData.append('listas', JSON.stringify(listas));
            formData.append('nonce', '<?php echo wp_create_nonce("suscripcion_nonce"); ?>'); // Agregar nonce

            try {
                const response = await fetch('<?php echo admin_url("admin-ajax.php"); ?>?action=procesar_suscripcion_mailchimp', {
                    method: 'POST',
                    body: formData,
                });

                const result = await response.json();

                // Log en la consola para confirmar la respuesta de Mailchimp
                console.log('Respuesta de Mailchimp:', result);

                if (result.success) {
                    showToast('Éxito', result.data, 'success');
                } else {
                    // Traducir el mensaje de error al español antes de mostrarlo
                    const mensajeTraducido = traducirMensajeError(result.data);
                    showToast('Error', mensajeTraducido, 'error');
                }
            } catch (error) {
                console.error('Error en la suscripción:', error);
                showToast('Error', `Hubo un error: ${error.message}`, 'error');
            }
        });
    });
</script>
<!--           END Caja suscripcion v3-->