<?php

namespace PHPSankhya\Construtores;

class ContrutorJson
{

    public static function JsonLogin($usuario, $senha)
    {
        $data = [
            "serviceName" => "MobileLoginSP.login",
            "requestBody" => [
                "NOMUSU" => [
                    "$" => "$usuario"
                ],
                "INTERNO" => [
                    "$" => "$senha"
                ],
                "KEEPCONNECTED" => [
                    "$" => "S"
                ]
            ]
        ];

        return json_encode($data);
    }
}
