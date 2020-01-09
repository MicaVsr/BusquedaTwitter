<?php

function separar_datos(){
    $datos_tweet=buscar_tweet();

    $tweets=Array();
    foreach ($datos_tweet['statuses'] as $dato){
        $tweet=Array();

            $user=$dato['user'];
        $tweet['user_img']=$user['profile_image_url_https'];
        $tweet['name']=$user['name'];
        $tweet['user_name']=$user['screen_name'];
        $tweet['text']=$dato['text'];

        $tweet['tweet_id']=$dato['id'];

        $tweet['es_rt_con_respuesta']=$dato['is_quote_status'];
        if($tweet['es_rt_con_respuesta']==true){
            $tweet['rt_en_respuesta_a']=$dato['quoted_status_id'];
        }

            $entities=$dato['entities'];
            $urls=$entities['urls'];
            if (!empty($urls)){
                foreach ($urls as $url){
                    $tweet['url']=$url['url'];
                }
            }else{
                $tweet['url']='';
            }

        $datos_busqueda=$datos_tweet['search_metadata'];
        $tweet['next_page']=$datos_busqueda['next_results'];
        $tweets[]=$tweet;
    }
    return $tweets;
}
?>