<!DOCTYPE html >
<html>

    <head>
        <meta charset="utf-8" >
        <title>Registro de Productos</title>
    </head>

    <body>
        <h1 align="center">Registra nuevos Funko's</h1>

        <p>Captura todos los datos correctamente</p>

        <form id="formularioProductos" onsubmit="return validar()" action="http://localhost/tecnologiasWeb/practicas/p07/set_producto_v3.php" method="post">

            <fieldset>
                <legend>Nuevo Producto</legend>
                <ul>
                    <li><label>Nombre: <input type="text" id="nom" name="nom"></input></label></li></br>
                    <li><label>Marca: </label>
                        <ul>
                            <li><label>Funko<input type="radio" id="marca" name="marca" value="Funko"></input></label></li>
                            <li><label>Funko shop<input type="radio" id="marca" name="marca" value="Funko shop"></input></label></li>
                            <li><label>Funko shop pika<input type="radio" id="marca" name="marca" value="Funko shop pika"></input></label></li>
                            <li><label>Funko Pokemon<input type="radio" id="marca" name="marca" value="Funko Pokemon"></input></label></li>
                            <li><label>MARVEL<input type="radio" id="marca" name="marca" value="MARVEL"></input></label></li>
                            <li><label>Funko avatar<input type="radio" id="marca" name="marca" value="Funko avatar"></input></label></li></br>
                        </ul>
                    </li>
                    <li><label>Modelo: <input type="text" id="modelo" name="modelo"></input></label></li></br>
                    <li><label>Precio: <input type="text" id="precio" name="precio"></input></label></li></br>
                    <li><label>Detalles: (Opcional) <input type="text" id="detalles" name="detalles"></input></label></li></br>
                    <li><label>Unidades: <input type="text" id="unidades" name="unidades"></input></label></li></br>
                    <li><label>Nombre del archivo de imagen: (Opcional) <input type="text" id="imagen" name="imagen"></input></label></li>
                </ul>
            </fieldset>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset">
        </p>
        </form>
        </br>
        <script>
            function validar(){

            var validacion = true;

            var nombre = document.getElementById("nom").value;
            var marca = document.getElementById("marca").value;
            var modelo = document.getElementById("modelo").value;
            var precio = document.getElementById("precio").value;
            var detalles = document.getElementById("detalles").value;
            var unidades = document.getElementById("unidades").value;
            var imagen = document.getElementById("imagen").value;

            
            
            var nom = /^[a-zA-Z ]+$/;
            var marca = /^[-a-zA-Z0-9 ]+$/;
            var model = /^[-a-zA-Z0-9 ]+$/;
            var price = /^[0-9.,]+$/;
            var details = /^[a-zA-Z0-9.%:, ]+$/;
            var units = /^[0-9]+$/;
            var image = /^[-a-zA-Z0-9./_]+$/;

            if(nombre == "" || modelo == "" || precio == "" || unidades == ""){
                validacion = false;
                alert('Se detectaron campos requeridos vacios.');
            }
            if(!document.querySelector('input[name="marca"]:checked')){
                validacion = false;
                alert('Debe seleccionar una marca.');
            }
            if (regexName.test(nombre) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Nombre".');
            }
            if (regexModel.test(modelo) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Modelo".');
            }
            if (regexPrice.test(precio) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Precio".');
            }
            if (detalles != ""){
                if(regexDetails.test(detalles) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Detalles".');
                }
            }
            if (regexUnits.test(unidades) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Unidades".');
            }
            if (nombre.length > 100){
                validacion = false;
                alert('El nombre no debe superar los 100 caracteres.');
            }
            if (modelo.length > 25){
                validacion = false;
                alert('El modelo no debe superar los 25 caracteres.');
            }
            if (precio <= 99.99){
                validacion = false;
                alert('El precio debe ser mayor a 99.99.');
            }
            if (detalles.length > 250){
                validacion = false;
                alert('Los detalles no deben superar los 250 caracteres.');
            }
            if (unidades < 0){
                validacion = false;
                alert('Las unidades deben ser mayores o iguales que cero.');
            }
            if (imagen.length > 40){
                validacion = false;
                alert('El nombre la imagen no debe superar los 40 caracteres.');
            }
            if(imagen == ""){
                if(validacion == true){
                    document.getElementById("imagen").value = "img/default.png";
                }  
            }else{
                if(regexImage.test(imagen) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Nombre del archivo de imagen".');
                }else{
                    if(validacion == true){
                    let imgString = "img/";
                    document.getElementById("imagen").value = imgString+document.getElementById("imagen").value;
                    }
                }
            }

            return validar();
        }
        </script>
        <h1 align="center">Modifica Funko</h1>

        <p>Captura todos los datos correctamente</p>

        <form id="formularioModProductos" onsubmit="return validar2()" action="http://localhost/tecnologiasWeb/practicas/p07/set_producto_v3.php" method="post">

            <fieldset>
                <legend>Funko existente</legend>
                <ul>
                    <li><label>Nombre: <input type="text" id="nom2" name="nom2"></input></label></li></br>
                    <li><label>Marca: </label>
                        <ul>
                            <li><label>Funko<input type="radio" id="marca2" name="marca2" value="Funko"></input></label></li>
                            <li><label>Funko shop<input type="radio" id="marca2" name="marca2" value="Funko shop"></input></label></li>
                            <li><label>Funko shop pika<input type="radio" id="marca2" name="marca2" value="Funko shop pika"></input></label></li>
                            <li><label>Funko Pokemon<input type="radio" id="marca2" name="marca2" value="Funko Pokemon"></input></label></li>
                            <li><label>MARVEL<input type="radio" id="marca2" name="marca2" value="MARVEL"></input></label></li>
                            <li><label>Funko avatar<input type="radio" id="marca2" name="marca2" value="Funko avatar"></input></label></li></br>
                        </ul>
                    </li>
                    <li><label>Modelo: <input type="text" id="modelo2" name="modelo2"></input></label></li></br>
                    <li><label>Precio: <input type="text" id="precio2" name="precio2"></input></label></li></br>
                    <li><label>Detalles: (Opcional) <input type="text" id="detalles2" name="detalles2"></input></label></li></br>
                    <li><label>Unidades: <input type="text" id="unidades2" name="unidades2"></input></label></li></br>
                    <li><label>Nombre del archivo de imagen: (Opcional) <input type="text" id="imagen2" name="imagen2"></input></label></li>
                </ul>
            </fieldset>
            <input type="hidden" id="id-form" name="id-form" value="<?=$_POST['id-form']?>" />
        <p>
            <input type="submit" value="Enviar">
            <input type="reset">
        </p>
        </form>

        <script>
            var radioButtons = document.getElementsByName("marca2");
            var test = "<?=$_POST['marca'] ?>";
            for(var i = 0; i < radioButtons.length; i++){
                if(radioButtons[i].value == test){
                    radioButtons[i].checked = true;
                }
            }
        </script>

        <script>
            function validar2(){

            var validacion = true;

            var nombre = document.getElementById("nom2").value;
            var marca = document.getElementById("marca2").value;
            var modelo = document.getElementById("modelo2").value;
            var precio = document.getElementById("precio2").value;
            var detalles = document.getElementById("detalles2").value;
            var unidades = document.getElementById("unidades2").value;
            var imagen = document.getElementById("imagen2").value;

            
            
            var nom = /^[a-zA-Z ]+$/;
            var marca = /^[-a-zA-Z0-9 ]+$/;
            var model = /^[-a-zA-Z0-9 ]+$/;
            var price = /^[0-9.,]+$/;
            var details = /^[a-zA-Z0-9.%:, ]+$/;
            var units = /^[0-9]+$/;
            var image = /^[-a-zA-Z0-9./_]+$/;

            if(nombre == "" || modelo == "" || precio == "" || unidades == ""){
                validacion = false;
                alert('Se detectaron campos requeridos vacios.');
            }
            if(!document.querySelector('input[name="marca2"]:checked')){
                validacion = false;
                alert('Debe seleccionar una marca.');
            }
            if (regexName.test(nombre) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Nombre".');
            }
            if (regexModel.test(modelo) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Modelo".');
            }
            if (regexPrice.test(precio) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Precio".');
            }
            if (detalles != ""){
                if(regexDetails.test(detalles) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Detalles".');
                }
            }
            if (regexUnits.test(unidades) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Unidades".');
            }
            if (nombre.length > 100){
                validacion = false;
                alert('El nombre no debe superar los 100 caracteres.');
            }
            if (modelo.length > 25){
                validacion = false;
                alert('El modelo no debe superar los 25 caracteres.');
            }
            if (precio <= 99.99){
                validacion = false;
                alert('El precio debe ser mayor a 99.99.');
            }
            if (detalles.length > 250){
                validacion = false;
                alert('Los detalles no deben superar los 250 caracteres.');
            }
            if (unidades < 0){
                validacion = false;
                alert('Las unidades deben ser mayores o iguales que cero.');
            }
            if (imagen.length > 40){
                validacion = false;
                alert('El nombre la imagen no debe superar los 40 caracteres.');
            }
            if(imagen == ""){
                if(validacion == true){
                    document.getElementById("imagen2").value = "img/default.png";
                }  
            }else{
                if(regexImage.test(imagen) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Nombre del archivo de imagen".');
                }else{
                    if(validacion == true){
                    let imgString = "img/";
                    document.getElementById("imagen2").value = imgString+document.getElementById("imagen2").value;
                    }
                }
            }

            return validar();
        }
        </script>
    </body>
</html>