<?php

function errorOccurred($errorMessage) {
    echo "
        <script>
            const errorAlert = Swal.mixin({
                customClass: {
                    confirmButton: 'button default error-button_popupt',
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
                title: `<h2 class='main-titles popupt-error'><span>Oops... Surgio Un Error</span></h2>`,
                html: `<p class='text-popupt_error'>$errorMessage</p>`,
                background: '#13142a',
                allowOutsideClick: false,
                confirmButtonText: '<span>Entendido</span>',
                focusConfirm: false
            });
        </script>
    ";
}