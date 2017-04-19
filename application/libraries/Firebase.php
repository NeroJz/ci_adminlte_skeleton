<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: MacBookPro
 * Date: 16/10/2016
 * Time: 3:49 PM
 */
class Firebase
{
    /**
     * constructor
     * load firebase_configuration
     */
    public function __construct(){
        $this->load->config('firebase', TRUE);
    }

    /**
     * __get
     *
     * Enables the use of CI super-global without having to define an extra variable
     *
     * @param $var
     * @return mixed
     */
    public function __get($var)
    {
        return get_instance()->$var;
    }


    public function test(){
        echo $this->send_url;
    }

    /**
     * Send message
     * @param null $msg
     * @param string $type - single / group message, default single
     */
    public function send($msg = array(), $type = 'single'){
        $header = array(
            'Authorization: key=' . $this->config->item('api_key', 'firebase'),
            'Content-Type: ' . $this->config->item('content_type', 'firebase')
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->config->item('firebase_send_url', 'firebase'));
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($msg));
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

}