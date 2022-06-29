<?php

//exemplo cURL GET aula da JSON
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://viacep.com.br/ws/21511275/json/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$retorno = curl_exec($ch);
curl_close($ch);

echo "<pre>$retorno</pre>";






$data = '2022-06-18T16:06';
list($ano, $mes, $dia) = explode("-", $data);
$data_certa = $dia.'/'.$mes.'/'.$ano;

list($data, $hora) = explode("T", $data);

echo $data;
echo $hora; 

 /* $data = date('l\, jS \of F Y');

 
 

 echo 'System Date/Time: '.date("Y-m-d | h:i:sa").'<br>';  */



                  

                    

                    

