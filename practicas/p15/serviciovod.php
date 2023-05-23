<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<?php

libxml_use_internal_errors(true);
$xml = new DOMDocument();
$documento = file_get_contents('serviciovod_ns.xml');
$xml->loadXML($documento, LIBXML_NOBLANKS);
// o usa $xml->load si prefieres usar la ruta del archivo
$xsd = 'serviciovod_ns_vod.xsd';
$xsd = 'serviciovod_ns_menu.xsd';
if (!$xml->schemaValidate($xsd))
// o usa $xml->schemaValidateSource si prefieres usar el xsd en format string
{
    $errors = libxml_get_errors();
    $noError = 1;
    $lista = '';
    foreach ($errors as $error) {
        $lista = $lista . '[' . ($noError++) . ']: ' . $error->message . ' ';
    }
    echo $lista;
}
?>

<head>
    <title>Tablas</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="p-3 bg-primary text-white text-center">
        <p style="text-align: center; font-size: 60px; background-color: red;"><img src="logo.png" alt="logo" width="100px" height="100px" class="rounded" /> <strong>Netflix</strong></p>
    </div>

    <div class="container mt-3">
        <h2>Peliculas</h2>
        <table class="table table-bordered text-center table-hover">
            <thead>
                <tr class="table-success" >
                    <th colspan="4">Peliculas</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-warning fw-bold">
                    <td>Titulo</td>
                    <td>Género</td>
                    <td>Duración</td>
                </tr>
                <?php
                $xmlDoc = new DOMDocument();
                $xmlDoc->load('serviciovod_ns.xml');

                $peliculas = $xmlDoc->getElementsByTagName('peliculas');

                foreach ($peliculas as $peliculas) {
                    $genero = $peliculas->getElementsByTagName('genero');

                    foreach ($genero as $genero) {

                        $titulo = $genero->getElementsByTagName('titulo');

                        foreach ($titulo as $titulo) {

                            echo "<tr class='table-warning'>";
                            echo "<td>" . $titulo->nodeValue . "</td>";
                            echo "<td>" . $genero->getAttribute('nombre') . "</td>";
                            echo "<td>" . $titulo->getAttribute('duracion') . "</td>";
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container mt-3">
        <h2>Series</h2>
        <table class="table table-bordered text-center table-hover">
            <thead>
                <tr class="table-primary">
                    <th colspan="5">Series</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-info fw-bold">
                    <td>Titulo</td>
                    <td>Género</td>
                    <td>Duración</td>
                </tr>
                <?php
                $series = $xmlDoc->getElementsByTagName('series');

                foreach ($series as $series) {
                    $genero = $series->getElementsByTagName('genero');

                    foreach ($genero as $genero) {

                        $titulo = $genero->getElementsByTagName('titulo');

                        foreach ($titulo as $titulo) {

                            echo "<tr class='table-info'>";
                            echo "<td>" . $titulo->nodeValue . "</td>";
                            echo "<td>" . $genero->getAttribute('nombre') . "</td>";
                            echo "<td>" . $titulo->getAttribute('duracion') . "</td>";
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>