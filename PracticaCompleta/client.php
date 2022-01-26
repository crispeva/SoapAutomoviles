<?php
// How to Create a SOAP Client/Server in PHP (Added Authentification) - Part 02
// https://www.youtube.com/watch?v=6V_myufS89A

class client {
    public function __construct() {
        $params = array('location' => 'https://soap-automoviles.herokuapp.com/service-automoviles-auth.php',
            'uri' => 'https://soap-automoviles.herokuapp.com/',
            'trace' => 1);
        $this->instance = new SoapClient(null, $params);

        // set the header 
        // https://www.php.net/manual/en/reserved.classes.php
        $auth_params = new stdClass();
        $auth_params->username = 'ies';
        $auth_params->password = 'daw';

        // https://www.php.net/manual/en/class.soapheader.php
        // https://www.php.net/manual/en/class.soapvar.php

        $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);
        $header = new SoapHeader('https://soap-automoviles.herokuapp.com/service-automoviles-auth.php', 'authenticate', $header_params, false);
        $this->instance->__setSoapHeaders(array($header));

    }

    public function getMarcas() {
        return $this->instance->ObtenerMarcasUrl();
        //return $this->instance->__soapCall('getStudentName', $id_array);
    }
    public function getModelosMarcas($marca) {
        return $this->instance->ObtenerModelosPorMarca($marca);
        //return $this->instance->__soapCall('getStudentName', $id_array);
    }
}