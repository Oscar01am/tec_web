<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<?php

$doc = new DOMDocument();
$doc->load('serviciovod_ns.xml');

$usuario = $_POST["usuario"];
$idioma = $_POST["idioma"];
$generoP = $_POST["generoP"];
$generoS = $_POST["generoS"];
$pt1 = $_POST["pt1"];
$pd1 = $_POST["pd1"];
$pt2 = $_POST["pt2"];
$pd2 = $_POST["pd2"];
$st1 = $_POST["st1"];
$sd1 = $_POST["sd1"];
$st2 = $_POST["st2"];
$sd2 = $_POST["sd2"];

$catalogoVOD = $doc->getElementsByTagName('CatalogoVOD')->item(0);
$perfiles = $doc->getElementsByTagName('perfiles')->item(0);
$peliculas = $doc->getElementsByTagName('peliculas')->item(0);
$series = $doc->getElementsByTagName('series')->item(0);
$doc->formatOutput = true;

$perfil = $doc->createElement('vod:perfil');
$us = $doc->createAttribute('usuario');
$newUsuario = $doc->createTextNode($usuario);
$idi = $doc->createAttribute('idioma');
$newIdioma = $doc->createTextNode($idioma);

$us->appendChild($newUsuario);
$idi->appendChild($newIdioma);
$perfil->appendChild($us);
$perfil->appendChild($idi);
$perfiles->appendChild($perfil);

$gPelicula = $doc->createElement('menu:genero');
$nomG = $doc->createAttribute('nombre');
$newGenero = $doc->createTextNode($generoP);
$tPelicula = $doc->createElement('menu:titulo');
$newT1 = $doc->createTextNode($pt1);
$duracionT = $doc->createAttribute('duracion');
$newD1 = $doc->createTextNode($pd1);
$tPelicula2 = $doc->createElement('menu:titulo');
$newT2 = $doc->createTextNode($pt2);
$duracionT2 = $doc->createAttribute('duracion');
$newD2 = $doc->createTextNode($pd2);

$duracionT->appendChild($newD1);
$duracionT2->appendChild($newD2);
$tPelicula->appendChild($newT1);
$tPelicula2->appendChild($newT2);
$tPelicula->appendChild($duracionT);
$tPelicula2->appendChild($duracionT2);
$nomG->appendChild($newGenero);
$gPelicula->appendChild($nomG);
$gPelicula->appendChild($tPelicula);
$gPelicula->appendChild($tPelicula2);

$peliculas->appendChild($gPelicula);

$gSerie = $doc->createElement('menu:genero');
$nomGS = $doc->createAttribute('nombre');
$newGeneroS = $doc->createTextNode($generoS);
$tSerie = $doc->createElement('menu:titulo');
$newT1s = $doc->createTextNode($st1);
$duracionS = $doc->createAttribute('duracion');
$newD1s = $doc->createTextNode($sd1);
$tSerie2 = $doc->createElement('menu:titulo');
$newT2s = $doc->createTextNode($st2);
$duracionS2 = $doc->createAttribute('duracion');
$newD2s = $doc->createTextNode($sd2);

$duracionS->appendChild($newD1s);
$duracionS2->appendChild($newD2s);
$tSerie->appendChild($newT1s);
$tSerie2->appendChild($newT2s);
$tSerie->appendChild($duracionS);
$tSerie2->appendChild($duracionS2);
$nomGS->appendChild($newGeneroS);
$gSerie->appendChild($nomGS);
$gSerie->appendChild($tSerie);
$gSerie->appendChild($tSerie2);

$series->appendChild($gSerie);


$doc->appendChild($catalogoVOD);
$doc->save('serviciovod.xml');

$comilla = '"';

echo "<input type='submit' value='Abrir nuevo XML'onclick=" . $comilla . "location.href='http://localhost/tecnologiasweb/practicas/p15/serviciovod.xml'" . $comilla . ">";

?>

</html>