<?php

function successfulQuery($successMessage) {
    echo "
        <script>
            const successAlert = Swal.mixin({
                customClass: {
                    confirmButton: 'modal-success_button',
                },
                buttonsStyling: false,
                showClass: {
                    popup: 'animate__animated animate__backInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__backOutUp'
                  }
            });

            successAlert.fire({
                icon: 'success',
                width: 700,
                title: `<h2 class='modal-success_title'>$successMessage</h2>`,
                allowOutsideClick: false,
                confirmButtonText: 'Entendido',
                focusConfirm: false
            });
        </script>
    ";
}

function successfulQueryRedirection($successMessage, $redirection) {
    echo "
        <script>
            const successAlert = Swal.mixin({
                customClass: {
                    confirmButton: 'modal-success_button',
                },
                buttonsStyling: false,
                showClass: {
                    popup: 'animate__animated animate__backInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__backOutUp'
                }
            });

            successAlert.fire({
                icon: 'success',
                width: 700,
                title: `<h2 class='modal-success_title'>$successMessage</h2>`,
                allowOutsideClick: false,
                confirmButtonText: 'Entendido',
                focusConfirm: false
            }).then((result) => {
                if (result.isConfirmed) { 
                    window.location='$redirection';
                }
            });
        </script>
    ";
}