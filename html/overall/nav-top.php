
<!-- Es la barra de Navegacion -->
<header>
    <nav>
        <div class="nav-wrapper teal lighten-2">
            <a href="#" class="brand-logo">PHP-MVC</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href=""><i class="material-icons left">home</i>Inicio</a></li>
                <li><a href="#modalIniciarSesion"><i class="material-icons left">star</i>Iniciar Sesion</a></li>
                <li><a href="#modalRegistrarse"><i class="material-icons left">account_circle</i>Registro</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href=""><i class="material-icons left">home</i>Inicio</a></li>
                <li><a href=""><i class="material-icons left">star</i>Iniciar Sesion</a></li>
                <li><a href=""><i class="material-icons left">account_circle</i>Registro</a></li>
            </ul>
        </div>
    </nav>
</header>

<!-- Es el modal para Iniciar Sesion -->
<div id="modalIniciarSesion" class="modal">
    <form action="" method="post">

        <div class="modal-content">
            <div class="registro teal lighten-2">
                <span>Iniciar Sesion</span>
            </div>
            <div class="input-field first">
                <i class="large material-icons prefix">account_circle</i>
                <input id="usuario" type="text" class="validate">
                <label for="usuario">Usuario : </label>
            </div>
            <div class="input-field">
                <i class=" tiny material-icons prefix">vpn_key</i>
                <input id="contraseña" type="password" class="validate">
                <label for="contraseña">Contraseña</label>
            </div>
            <div class="recordar">
                <input type="checkbox" id="box">
                <label for="box">Recordarme</label>
            </div>
        </div>

        <div class="modal-footer">
            <a href="" class="modal-action btn-flat right">CERRAR</a>
            <a href="" class="modal-action btn-flat right">Iniciar Sesion</a>
        </div>

    </form>
</div>

<!-- Este es el modal para poder Registrarse en la Base de Datos -->
<div class="modal" id="modalRegistrarse">
    <form action="" method="post">
        <div class="modal-content">
            <div class="teal lighten-2 registro">
                REGISTRO
            </div>
            <div class="input-field first">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" id="registroUsuario">
                <label for="registroUsuario">Usuario</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input type="text" id="registroEmail">
                <label for="registroEmail">Email</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">vpn_key</i>
                <input type="text" id="registrContraseña">
                <label for="registrContraseña">Contraseña</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">vpn_key</i>
                <input type="text" id="registrContraseñaRepetida">
                <label for="registrContraseñaRepetida">Repite tu Contraseña</label>
            </div>
            <div class="TerminosYCondiciones">
                <input type="checkbox" id="terminos">
                <label for="terminos">Acepto los terminos y condiciones</label>
            </div>
        </div>
        <div class="modal-footer">
            <a href="" class="modal-close btn-flat right">CERRAR</a>
            <a href="" class=" right btn-flat">REGISTRAR</a>
        </div>
    </form>
</div>