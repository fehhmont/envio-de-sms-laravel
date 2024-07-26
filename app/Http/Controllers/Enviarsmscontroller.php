<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Enviarsmscontroller extends Controller
{
   public function enviarSms()
   {

    $nome ="coloque um nome que voce deseja colocar na mensagem, pode ser qualquer nome";
    $senhaIagente ="coloque a sua senha aqui, senha do site usado para fazer login no (https://app.iagentesms.com.br/api-doc) ";
    $celular = "coloque o numero para o qual voce deseja envar o sms";
    $usuarioIagente = " coloque o seu email aqui, criado no site do sistema (https://app.iagentesms.com.br/api-doc) ";

    // codifica os dados no formato de um formulário www
    $mensagem = urlencode(" $nome, (coloque a mensagem que voce deseja enviar pro sms) ");

// concatena a url da api com a variável carregando o conteúdo da mensagem
    $url_api = "https://api.iagentesms.com.br/webservices/http.php?metodo=envio&usuario=$usuarioIagente&senha=$senhaIagente&celular=$celular&mensagem={$mensagem}";
    
    // realiza a requisição http passando os parâmetros informados
    $api_http = file_get_contents($url_api);
    // imprime o resultado da requisição
    echo $api_http;

}
}