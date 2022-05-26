<?php
// ************************************ LOAD MAILCHIMP LIBRARY************************************
include(dirname(__FILE__) . '/MailChimp.php');
use \DrewM\MailChimp\MailChimp;
// ************************************ END LOAD MAILCHIMP ************************************


// ************************************ MAILCHIMP ************************************
function subscribe_add_tags($email)  {
    // *************** LOADING API KEY AND LIST ID
    $mailchimp_api_key = "ac7a6d9028701a52354ed4716f53953b-us6";
    $mailchimp_list_id = "9a8b825bf1";

    $MailChimp = new MailChimp($mailchimp_api_key);
    $list_id = $mailchimp_list_id;  //  <--- PLAYGROUND LIST_ID
    $hashed= md5(strtolower($email));
    // *************** CHANGE TAG NAME HERE
    $payload = '{ "tags": [ { "name": "HIGH POINT", "status": "active" }  ] }';

    $payload_json = json_decode($payload, true);
    $result_subscribe = $MailChimp->post("lists/$list_id/members", [
        'email_address' => $email,
        'status'        => 'subscribed',
    ]);
    $result_tag = $MailChimp->post("lists/$list_id/members/$hashed/tags", $payload_json);



    //   this error success produces NOTHING in the Response from MailChimp
    // because it doesn't seem to send anything, but if not error then success I guess
    // so you can still capture its status
    if ($MailChimp->success()) {
        print_r($result_subscribe);
        print_r($result_tag);
    } else {
        echo 'Error Subscribing and or Tagging Mailchimp<br>';
        print_r($result_subscribe);
        print_r($result_tag);
        echo $MailChimp->getLastError();
    }
}  // end function
// ************************************ END MAILCHIMP ************************************

echo subscribe_add_tags("pipo@hotmail.com");

?>