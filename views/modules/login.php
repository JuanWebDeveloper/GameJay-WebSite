<a href="<?php echo $url; ?>" class="button-return" title="Regresar al inicio"><i class="fas fa-undo-alt"></i></a>
<div class="login-and_register">

    <div class="login-and_register-content">
        <div class="forms-container">
            <div class="login-and_register-forms">
                <form class="shared-styles login-form" id="loginForm">
                    <h2 class="main-titles"><span>iniciar sesión</span></h2>
                    
                    <div class="input-box width-100">
                        <input type="text" id="loginEmail" required />
                        <span>Correo</span>
                    </div>
                    <div class="input-box width-100">
                        <input type="password" id="loginPassword" required />
                        <span>Contraseña</span>
                    </div>
                    <input type="hidden" id="login" value="login" />

                    <div class="form-button_container">
                        <button type="submit" class="button form-button"><span>Iniciar Sesión</span></button>
                    </div>
                </form>

                <form class="form-box shared-styles register-form" id="registerForm">
                    <h2 class="main-titles d-flex justify-content-center w-100"><span>Registrarse</span></h2>

                    <div class="input-box width-100">
                        <input type="text" id="registerName" required />
                        <span>Nombre</span>
                    </div>
                    <div class="input-box width-100">
                        <input type="text" id="registerEmail" required />
                        <span>Correo</span>
                    </div>
                    <div class="input-box width-50">
                        <input type="text" id="registerPassword" required />
                        <span>Contraseña</span>
                    </div>
                    <div class="input-box width-50">
                        <input type="text" id="registerPasswordTwo" required />
                        <span>Repite la contraseña</span>
                    </div>
                    <div class="register-terms">
                        <input type="checkbox" id="registerTerms" />
                        <a>Acepto los términos y condiciones.</a>
                    </div>

                    <input type="hidden" id="register" value="register" />
                    
                    <div class="form-button_container">
                        <button type="submit" class="button form-button"><span>Registrarse</span></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="panel-content">
                    <h3>¿No tienes una cuenta?</h3>
                    <p>Si no tienes una cuenta crea una para iniciar sección.</p>
                    <button class="button default" id="registerButton"><span>Crear cuenta</span></button>
                </div>

                <img src="<?php echo $url; ?>accessories/img/login/login.svg" class="panel-image" alt="Imagen de inicio de sesión" />
            </div>

            <div class="panel right-panel">
                <div class="panel-content">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Si ya tienes una cuenta no hace falta crear otra.</p>
                    <button class="button default" id="loginButton"><span>Iniciar sesión</span></button>
                </div>

                <img src="<?php echo $url; ?>accessories/img/login/registre.svg" class="panel-image" alt="Imagen de registro" />
            </div>
        </div>
    </div>
</div>