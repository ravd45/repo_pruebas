<?php 

$ids = ["insert into planeaxesc_reactivo (id_ct, id_reactivo, n_almn_eval, n_aciertos,id_periodo) values (<br>"

];


foreach ($ids as $key => $value) {
   for ($i=0; $i < 6 ; $i++) { 
       echo $value;
   }
}


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Document</title>
 </head>
 <body>
    <style> 
    progress {
  border: none;
  width: 400px;
  height: 60px;
  background: crimson;
}

progress {
  color: lightblue;
}

progress::-webkit-progress-value {
  background: lightblue;
}

progress::-moz-progress-bar {
  background: lightcolor;
}

progress::-webkit-progress-value {
  background: red;
}

progress::-webkit-progress-bar {
  background: blue;
}
    </style>
     <progress max="100" value="75"></progress>
 </body>
 </html>