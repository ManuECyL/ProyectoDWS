<?
//cambiamos el entrenador de francia por Joau
//leer el documento cargar dom
//buscar la etiqueta nombre que tenga de valor francia
//cambiar el value por Joau
//salvar el documento

 $dom = new DOMDocument();
 $dom->load('mundial.xml');
 
// $raiz=$dom->childNodes[0];
// $nuevo=$dom->createElement('Entrenador','Joau');//creo el nuevo elemento entrenador

// $cambiar = false;

// foreach ($raiz->childNodes as $elementos) {
//     if ($elementos->nodeType==1) {
//         foreach ($elementos->childNodes as $datos) {
//             if ($datos->nodeType==1 && $datos->childNodes=='Francia') {
//                 $cambiar=true;
//             }
//             if ($cambiar==true && $datos->childNodes == 'Entrenador') {
//                 $elementos->replaceChild($nuevo,$datos);
//             }
//         }
//     }
// }


//buscando mediante el nombre 
$nombres = $dom->getElementsByTagName('Nombre');
foreach ($nombres as $nombre) {
    if($nombre->nodeValue == 'Francia'){
        $nombre->nextElementSibling->nodeValue="Maria";
    }
}

//guardo los cambios
if ($dom->save('mundial.xml')) {
    echo "Esta todo bien";
}
?>
