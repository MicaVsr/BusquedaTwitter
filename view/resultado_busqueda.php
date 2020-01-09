<?php
    $tweets=separar_datos();
    $twitter_status="https://twitter.com/i/web/status/";

    $pagina_siguiente='';

    foreach ($tweets as $tweet){
        $pagina_siguiente=$tweet['next_page'];
    }

    foreach ($tweets as $tweet){
        if (!empty($tweet['url'])){
            $html="<a href='".$tweet['url']."' target='_blank'>".$tweet['url']."</a>";
            $texto_con_url= str_replace($tweet['url'], $html, $tweet['text']);

            $tweet['text']=$texto_con_url;
        }
        echo"<div class='card tweet'>                
                <div class='card-content'>                    
                    <div class='card-body'>
                        <div class='datos-usuario'>
                            <img class='card-img' src='".$tweet['user_img']."' alt='Imagen de perfil'>
                            <div class='card-title'>
                                <p class='nombre'>".$tweet['name']."</p>
                                <a href='https://twitter.com/".$tweet['user_name']."' target='_blank'>@".$tweet['user_name']."</a>
                            </div>
                        </div>
                        <p class='card-text'>".$tweet['text']."</p>
                        <a href='".$twitter_status.$tweet['tweet_id']."' target='_blank'>Ver en Twitter</a>
                    </div>
                </div>";
                    if($tweet['es_rt_con_respuesta']==true){
                        echo "<div class='card-footer'>
                                <p>Retweet en respuesta a <a href='".$twitter_status.$tweet['rt_en_respuesta_a']."' target='_blank'>ver tweet</a></p>   
                             </div>";
                    }
        echo"
            </div>";
    }

    echo "<a href='javascript:history.back(-1)'>Atras</a>";
    /*echo "<input id='query' type='text' style='display: none' value='".$pagina_siguiente."' disabled>
            
            <a class='btn btn-success' id='siguiente'>Siguiente</a>";*/


    /*value='".$pagina_siguiente."'  controller/buscar.php".$pagina_siguiente."*/

?>