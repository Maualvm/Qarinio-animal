<?php
include_once('util.php');
include("_header.html");
include("_navbar.html");
if(checkPriv("adoptar")):
?>
<div class="uk-container uk-margin">
    <h1 class="uk-text-center">Nueva Solicitud de Adopción</h1>
    <hr class="uk-divider-icon">
    <h2 class="uk-text-center">Formulario de Adopción</h2>
    <a href='catalogo.php' uk-tooltip = 'Click para retroceder' class='uk-icon-link uk-align-left' uk-icon='arrow-left'; ratio ='2'></a>
    <div class="uk-margin-xlarge-right uk-margin-xlarge-left">
        <form class="uk-form" action="vista_agendar_entrevista.php" method="post">
            <?= muestraPreguntasFormulario(); ?>
            <hr>
            <div class="uk-align-right">
                <button type="submit" name="button" class="uk-button uk-button-primary uk-border-rounded ">Enviar</button>
            </div>
        </form>
    </div>
</div>

<?php
http_response_code(200);
else:
    http_response_code(404);
    location("header:error.php");
endif;
    include("_footer.html");
?>
