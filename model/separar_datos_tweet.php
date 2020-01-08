<?php

separar_datos();
function separar_datos(){
    $datos_tweet=buscar_tweet();
    var_dump($datos_tweet);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $tweets=Array();
    foreach ($datos_tweet['statuses'] as $dato){
        $tweet['entities']=$dato['entities'];
        foreach ($tweet['entities'] as $entities){
            $tweet['urls']=$entities['urls'];
            /*foreach ($entities['urls'] as $urls){
                $tweet['url']=$urls['url'];
            }*/
        }
        $tweet['text']=$dato['text'];
        $tweets[]=$tweet;
    }
    print_r($tweets);

}
?>