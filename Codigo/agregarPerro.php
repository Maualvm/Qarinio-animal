<?php 
require_once "util.php";
include("_header.html");
include("_navbar.html");
?>


   <div class = "uk-container">
    <form>
        
        <fieldset class="uk-fieldset">

        <h3>Agregar Perro</h3>

        <div class="uk-margin">
            <h5>Nombre</h5>
            <input class="uk-input" type="text" placeholder="Nombre" id = "nombre">
        </div>

        <div class="uk-margin">
            <h5>Tamaño</h5>
            <select class="uk-select" id = "size">
                <option>Tamaño...</option>
                <option>Pequeño</option>
                <option>Mediano</option>
                <option>Grande</option>
            </select>
        </div>
        <h5>Edad</h5>
        <div class="uk-width-1-4@s">
                <input class="uk-input" type="number" placeholder="Años" id = "years">
        </div>
        <div class = "uk-margin-small-top">    
            <div class="uk-width-1-4@s">
                <input class="uk-input" type="number" placeholder="Meses" id = "meses">
            </div>
        </div>
        
        <div class = "uk-margin">
            <h5>Fecha de Llegada</h5>
            <input class = "uk-input" type = "date" id = "fecha">
        </div>
        
            <h5>Género</h5>
        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-radio" type="radio" name="radio2" checked> Macho</label>
            <label><input class="uk-radio" type="radio" name="radio2"> Hembra</label>
        </div>
        <div class="uk-margin">
            <h5>Condiciones Medicas</h5>
            <select class="uk-select" id = "condiciones" name = "condiciones">
                <option></option>
            </select>
        </div>
        <div class="uk-margin">
            <h5>Personalidad</h5>
            <select class="uk-select" id = "personalidad" name = "personalidad">
                <option>Recuperar de la base de datos</option>
            </select>
        </div>
        <div class="uk-margin">
            <h5>Raza</h5>
            <select class="uk-select" id = "raza" name = "raza">
                <option>Recuperar de la base de datos</option>
            </select>
        </div>
        <div class="uk-margin">
            <h5>Historia del perro</h5>
            <textarea class="uk-textarea" rows="7" placeholder="Historia"></textarea>
        </div>
        </fieldset>
    </form>
</div>



