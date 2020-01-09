<?php

function buscar_tweet(){
    $query='?q=';
    $lenguaje='&lang=es';
    $cantidad='&count=20';

    if(!empty($_GET['palabra'])){
        $palabra= $_GET['palabra'];
        $palabra_espacios= str_replace(" ", "%20", $palabra); //reemplaza el espacio por %20 para evitar fallas
        $palabra=$palabra_espacios;
        define('QUERY', $query.$palabra.$cantidad.$lenguaje);
    }elseif(!empty($_SERVER['QUERY_STRING'])){
        $query="?".$_SERVER['QUERY_STRING'];
        define('QUERY', $query);
    }else{
        header('Location:../buscador.php');
        exit();
    }

    include ('../config/claves_twitter.php');
    define('API_URL', 'https://api.twitter.com/1.1/search/tweets.json');

    $autorizacion= "authorization: Bearer AAAAAAAAAAAAAAAAAAAAAPg3BwEAAAAAs2Fql7aYxoeSrHmOdCC%2FnuL2%2BN4%3DHKSQDPOyN4uSq9yX0f3Rqn9ppzsrQuX2TwLXIKYKyNt2zfAlNy";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_URL, API_URL.QUERY);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $autorizacion ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);

    $result = curl_exec($ch);
    curl_close($ch);

    $datos_tweets= json_decode($result, true);

    if(!empty($datos_tweets['statuses'])){
        return $datos_tweets;
    }else{
        echo "No se encontraron Tweets";
        exit();
    }


    /*curl --request GET \
   --url https://api.twitter.com/1.1/search/tweets.json \
   --header 'authorization: Bearer AAAAAAAAAAAAAAAAAAAAAPg3BwEAAAAAs2Fql7aYxoeSrHmOdCC%2FnuL2%2BN4%3DHKSQDPOyN4uSq9yX0f3Rqn9ppzsrQuX2TwLXIKYKyNt2zfAlNy' \
   --header 'content-type: application/json' \
   --data '{
               "query":"from:TwitterDev lang:en",
               "maxResults": "100",
               "fromDate":"<YYYYMMDDHHmm>",
               "toDate":"<YYYYMMDDHHmm>"
               }'*/

}
?>