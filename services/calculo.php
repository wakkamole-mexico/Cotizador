<?php
// ************************************ LOAD MAILCHIMP LIBRARY************************************
include(dirname(__FILE__) . '/MailChimp.php');
use \DrewM\MailChimp\MailChimp;
// ************************************ END LOAD MAILCHIMP ************************************

$datos = json_decode($_POST['datos']);

$pagoMensual = 0;

$mem = "";

if($datos->t1 != "" || $datos->c2 != ""){
    $pagoMensual = 50000;
    $mem = "ALL IN";
}else{
    $pagoMensual = 25000;
    $mem = "LIGHT";
}

$renta_mensual = $pagoMensual;
$aums = $datos->aums;
$cobro_anual = $aums * ($datos->asesoria/100);
$cobro_mensual = $cobro_anual / 12;
$revenue_asesor_mensual = $cobro_mensual - $renta_mensual;
$revenue_share = ($renta_mensual / $cobro_mensual)*100;


$resultado = [
    "renta_mensual" => $renta_mensual,
    "aums" => $aums,
    "cobro_anual" => $cobro_anual,
    "cobro_mensual" => $cobro_mensual,
    "revenue_asesor_mensual" => $revenue_asesor_mensual,
    "revenue_share" => $revenue_share,
    "mem" => $mem
];

//print_r($resultado);

// ************************************ MAILCHIMP ************************************
function subscribe_add_tags($email)  {
    // *************** LOADING API KEY AND LIST ID
    $mailchimp_api_key = "ac7a6d9028701a52354ed4716f53953b-us6";
    $mailchimp_list_id = "9a8b825bf1";

    $MailChimp = new MailChimp($mailchimp_api_key);
    $list_id = $mailchimp_list_id;  //  <--- PLAYGROUND LIST_ID
    $hashed= md5(strtolower($email));
    // *************** CHANGE TAG NAME HERE
    $payload = '{ "tags": [ { "name": "Bootcamp", "status": "active" }  ] }';

    //$payload_json = json_decode($payload, true);
    $result_subscribe = $MailChimp->post("lists/$list_id/members", [
        'email_address' => $email,
        'status'        => 'subscribed',
    ]);
    $result_tag = $MailChimp->post("lists/$list_id/members/$hashed/tags", $payload_json);



    //   this error success produces NOTHING in the Response from MailChimp
    // because it doesn't seem to send anything, but if not error then success I guess
    // so you can still capture its status
    /*if ($MailChimp->success()) {
        print_r($result_subscribe);
        print_r($result_tag);
    } else {
        echo 'Error Subscribing and or Tagging Mailchimp<br>';
        print_r($result_subscribe);
        print_r($result_tag);
        echo $MailChimp->getLastError();
    }*/
}  // end function
// ************************************ END MAILCHIMP ************************************

subscribe_add_tags($datos->correo);


echo json_encode($resultado);

?>