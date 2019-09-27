<?php 

$ids = ["insert into planeaxesc_reactivo (id_ct, id_reactivo, n_almn_eval, n_aciertos,id_periodo) values (<br>"

];


foreach ($ids as $key => $value) {
   for ($i=0; $i < 61500 ; $i++) { 
       echo $value;
   }
}


 ?>