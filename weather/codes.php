<?php

    if(isset($_REQUEST['submit']))
    {  
        if(empty($_REQUEST['name']))
        {
            echo "<script>
            alert('please, fill your input field');
            window.location.href='code.php';
            </script>";
        }
        $curl=curl_init();
        
        curl_setopt($curl,CURLOPT_URL,'https://api.openweathermap.org/data/2.5/weather?q='.$_GET["name"].
        '&appid=10e73b0e2069a80f12e07620cf90a459');

        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        
        $result= curl_exec($curl);
        $result=(json_decode($result,true));

   

        if($result['cod']==200)
            {
            
                $tempcel=$result['main']['temp']-273;
                $channel=" <b>".$result['name']." , ".$result['sys']['country'].": ".intval($tempcel)."&deg;C</b><br/><br/>";
                $channel .=" <b>Weather condition : </b>".$result['weather']['0']['description']."<br/><br/>";
            
                $channel .=" <b>Atmospher pressure: </b>".$result['main']['pressure']."hpa <br/><br/>";

                $channel .=" <b>Wind Speed : </b>".$result['wind']['speed']." meter/sec<br/><br/>";
                $channel .=" <b>Cloudness : </b>".$result['clouds']['all']."% <br/><br/>";

                date_default_timezone_set('Asia/Kolkata');
                $sunrise=$result['sys']['sunrise'];

                $channel.="<b>Sunrise : </b>".date(" g:i a",$sunrise)."<br/><br/>";
                $channel.="<b>Current time : </b>".date("F j, Y, g:i a" )."<br/><br/>";
            }
        else
            {
                echo "<script>
                alert('your city is not valid');
                window.location.href='code.php';
                </script>";
            }

    }


?>