// JSON BASE A MOSTRAR EN FORMULARIO
var baseJSON = {
    "precio": 0.0,
    "unidades": 1,
    "modelo": "XX-000",
    "marca": "NA",
    "detalles": "NA",
    "imagen": "img/default.png"
  };

function init() {
    /**
     * Convierte el JSON a string para poder mostrarlo
     * ver: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/JSON
     */
    var JsonString = JSON.stringify(baseJSON,null,2);
    document.getElementById("description").value = JsonString;
}

$(document).ready(function () {
    let edit = false;
    console.log('jQuery is working');
    $('#product-result').hide();
    fetchProducts();

    $('#search').keyup(function (e) {
        if ($('#search').val()) {
            let search = $('#search').val();

            $.ajax({
                url: 'product-search.php',
                data: { search },
                type: 'GET',
                success: function (response) {
                    let productos = JSON.parse(response);
                    let template = '';

                    productos.forEach(producto => {
                        template += `
                        <li><a href="#" class="task-item">${producto.nombre}</a></li>`
                    });

                    $('#product-result').show();
                    $('#container').html(template);
                }
            });
        }
    });

    $('#product-form').submit(function (e) {
        let finalJSON = JSON.parse($('#description').val());
        const postData = {
            nombre: $('#name').val(),
            precio: finalJSON["precio"],
            unidades: finalJSON["unidades"],
            modelo: finalJSON["modelo"],
            marca: finalJSON["marca"],
            detalles: finalJSON["detalles"],
            imagen: finalJSON["imagen"],
            id: $('#product_Id').val()
        };

        console.log(postData);
        let url = edit === false ? 'backend/product-add.php' : 'backend/product-edit.php';

        productoJsonString = JSON.stringify(postData, null, 2);
        console.log(productoJsonString);

        $.post(url, productoJsonString, function (response) {
            console.log(response);
            let res = JSON.parse(response);
            fetchProducts();
            //$('#product-form').trigger('reset');
            let mensaje = res.message;
            alert(mensaje);
        });
        e.preventDefault();
    });

//Funcion para buscar producto
    function fetchProducts() {
        $.ajax({
            url: 'backend/product-list.php',
            type: 'post',
            success: function (response) {
                let productos = JSON.parse(response);
                let template = '';

                productos.forEach(producto => {
                    template += `
                        <tr productId="${producto.id}">
                            <td>${producto.id}</td>
                            <td>
                                <a href="#" class="product-item">${producto.nombre}</a>
                            </td>
                            <td>${producto.marca}</td>
                            <td>${producto.modelo}</td>
                            <td>$${producto.precio}</td>
                            <td>${producto.detalles}</td>
                            <td>${producto.unidades}</td>
                            <td>
                                <button class="product-delete btn btn-danger">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    `
                });
                $('#products').html(template);
            }
        });
    }

//Funcion para el Boton de eliminar
    $(document).on('click', '.product-delete', function () {
        if (confirm('¿Quieres eliminar el producto?')) {
            const element = $(this)[0].parentElement.parentElement;
            const id = $(element).attr('productId');
            $.post('backend/product-delete.php', { id }, function (response) {
                let respuesta = JSON.parse(response);
                console.log(respuesta);
                fetchProducts();
                let mensaje = respuesta.message;
                alert(mensaje);
            });
        }
    });

//Funcion para editar el producto 
    $(document).on('click', '.product-edit', function () {
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('productId');
        //console.log(id);
        $.post('backend/product-edit.php', { id }, function (response) {
            const producto = JSON.parse(response);
            console.log(response);
            $('#name').val(producto.nombre);
            $('#product_Id').val(producto.id);

            var atributosobj = {
                "precio": producto.precio,
                "unidades": producto.unidades,
                "modelo": producto.modelo,
                "marca": producto.marca,
                "detalles": producto.detalles,
                "imagen": producto.imagen
            };

            var objstring = JSON.stringify(atributosobj, null, 2);
            $('#description').val(objstring);
            edit = true;
        })
    });
});