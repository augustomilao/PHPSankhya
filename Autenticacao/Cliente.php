<?php

namespace PHPSankhya\Autenticacao;


use Dotenv\Dotenv;
use Guzzle\Http\Client;
use PHPSankhya\Construtores\ContrutorJson;

class Cliente
{
    private $jsession;
    private $client;
    private $url;


    public function ClienteXML() {}

    public function ClienteJSON() {}

    public function RecuperaToken() {}

    public function Login()
    {
        $url = "";
        $cliente = new Client();
        $cliente->get($url, [
            "body" => ContrutorJson::JsonLogin("", "")
        ]);
        return $cliente;
    }

    public function Logout() {}
}
