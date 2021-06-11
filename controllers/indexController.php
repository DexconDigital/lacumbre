<?php
require_once 'variables/config.php';
require 'modelo_inmueble.php';


$ch = curl_init();
    $headers =  'Authorization:B561rNGlLXtzYqvEAJ7I34CeHccolMkBV3ITTRbH-971';
    curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/12');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_USERPWD, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    $api = json_decode($result, true);

    console_log($api);

function inmuebles_destacados($r)
{
        $cantidad_inmuebles= count($r)-1;
        modelo_inmueble_destacadas($r, $cantidad_inmuebles);   
}


function cantidad_inmuebles_imprimir($r){
    if (is_array($r)) {
    $cantidad_inmuebles = count($r)-1;
    echo '<script>var cantidad_inmuebles = '.$cantidad_inmuebles.'</script>';
    }else{
        echo '<script>var cantidad_inmuebles;</script>';
    }
}

cantidad_inmuebles_imprimir($api);

