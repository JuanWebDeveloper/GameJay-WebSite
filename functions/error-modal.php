<?php

function errorOccurred($errorMessage) {
    echo "
        <script>
            const errorAlert = Swal.mixin({
                customClass: {
                    confirmButton: 'modal-error_button',
                },
                buttonsStyling: false,
                showClass: {
                    popup: 'animate__animated animate__backInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__backOutUp'
                  }
            });

            errorAlert.fire({
                icon: 'error',
                width: 700,
                title: `<h2 class='modal-error_title'>Oops... Surgio Un Error</h2>`,
                html: `<h5 class='modal-error_message'>$errorMessage</h5>`,
                allowOutsideClick: false,
                confirmButtonText: 'Entendido',
                focusConfirm: false
            });
        </script>
    ";
}