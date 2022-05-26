<?php

namespace App\Services;

set_time_limit(500);

class Http{
    public $retorno;
    public $code;

    public function get($url){
        ob_start();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        $this->executar($ch);
    }

    public function post($url, $parametros){
        ob_start();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);

        $this->executar($ch);
    }

    private function executar($ch){
        curl_exec($ch);

        $this->retorno = ob_get_contents();
        $this->code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        ob_end_clean();
        curl_close($ch);
    }
}
