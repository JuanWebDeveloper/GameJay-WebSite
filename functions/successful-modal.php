<?php

function successfulQuery($successMessage) {
    echo "
        <script>
            const successAlert = Swal.mixin({
                customClass: {
                    confirmButton: 'button default success-button_popupt',
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
                title: `<h2 class='main-titles popupt-success'><span>$successMessage</span></h2>`,
                background: '#13142a',
                allowOutsideClick: false,
                confirmButtonText: '<span>Entendido</span>',
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
                    confirmButton: 'button default success-button_popupt',
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
                title: `<h2 class='main-titles popupt-success'><span>$successMessage</span></h2>`,
                background: '#13142a',
                allowOutsideClick: false,
                confirmButtonText: '<span>Entendido</span>',
                focusConfirm: false
            }).then((result) => {
                if (result.isConfirmed) { 
                    window.location='$redirection';
                }
            });
        </script>
    ";
}