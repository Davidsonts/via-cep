<?php

namespace Davidsonts\ViaCep;

class ViaCep {
  
    private $url = 'https://viacep.com.br/ws/';
    
    public static function pegarEnderecoPorCep($cep) {
      $url = self::$url . $cep . '/json/';
      $json = file_get_contents($url);
      $data = json_decode($json);
      return $data;
    }
    
    public static function pegarEnderecoPorUfLocalidadeLogradouro($uf, $localidade, $logradouro) {
      $url = self::$url . $uf . '/' . $localidade . '/' . $logradouro . '/json/';
      $json = file_get_contents($url);    
      $data = json_decode($json); 
      return $data;
    }
}