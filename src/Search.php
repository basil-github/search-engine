<?php

namespace SearchEngine;

class Search
{
    public  $key;
    public $domain;
    public  function __construct($key, $domain)
    {
        $this->key = $key;
        $this->domain = $domain;
    }


    public  function search($query)
    {
        $queryParam = null;
        foreach ($query as $key => $value) {
            $queryParam .= $value . ',+';
        }
        $url = "https://serpapi.com/search.json?q=$queryParam&l&google_domain=$this->domain&api_key=$this->key";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $res = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($res, true);
        return $res;
    }
}