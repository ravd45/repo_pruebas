<?php 

// $s = '06/10/2011 19:00:02';
// $date = strtotime($s);
// echo date('d/m/y H:i:s', $date);

// $fi ='10-04-2019 00:00:00';
// $ff ='10-08-2019 00:00:00';
// $h = '04-04-2019 00:00:00';
// $fecha_inicial = strtotime($fi);
// $fecha_final = strtotime($ff);
// $hoy = strtotime($h);
// $porcentaje = 40 ;


// //$difd = date_diff($fecha_final, $fecha_inicial);
// $difd = 25;
// echo  $difd.' diferencia de horas<br>';
// $total_horas = $difd * 24;
// echo  $total_horas.' total horas<br>';
// $horas_restantes = $total_horas / 3;
// echo $horas_restantes.' horas restantes<br>';
// $dif_hoy = 15;
// //$dif_hoy = date_diff($fecha_final, $hoy);
// echo $dif_hoy .' diferencia hoy <br>';
// $horas_restantes_hoy = $dif_hoy * 24;
// echo $horas_restantes_hoy .' dias restantes desde hoy';

// if ($horas_restantes_hoy >= 0) {

// if ($horas_restantes >= $horas_restantes_hoy) {
// 	echo '<br>if 1';
// 	switch ($porcentaje) {
// 		case ($porcentaje <= 66):
// 			echo '<p style="color:red;">Rojo</p>';
// 			break;
// 		case ($porcentaje >= 67 && $porcentaje <= 89):
// 			echo '<p style="color:yellow;">Amarillo</p>';
// 			break;
// 		case ($porcentaje >= 90 && $porcentaje <= 100):
// 			echo '<p style="color:green;">Verde</p>';
// 			break;
// 			}
// }else{
// 	if (($horas_restantes * 2 )>= $horas_restantes_hoy) {
// 		echo '<br>if 2';
// 		switch ($porcentaje) {
// 		case ($porcentaje <= 33):
// 			echo '<p style="color:red;">Rojo</p>';
// 			break;
// 		case ($porcentaje >= 33 && $porcentaje <= 66):
// 			echo '<p style="color:yellow;">Amarillo</p>';
// 			break;
// 		case ($porcentaje >= 67 && $porcentaje <= 100):
// 			echo '<p style="color:green;">Verde</p>';
// 			break;
// 		}
// 	}else{
// 		if (($horas_restantes * 3 )>= $horas_restantes_hoy) {
// 			echo '<br>if 3';
// 			switch ($porcentaje) {
// 		case ($porcentaje >= 0 && $porcentaje <= 33):
// 			echo '<p style="color:green;">Rojo</p>';
// 			break;
// 		case ($porcentaje >= 34 && $porcentaje <= 66):
// 			echo '<p style="color:green;">Amarillo</p>';
// 			break;
// 		case ($porcentaje >= 67 && $porcentaje <= 100):
// 			echo '<p style="color:green;">Verde</p>';
// 			break;
// 	}
// 		}else{
// 			echo '<br>aún no empieza el plazo';
// 		}	
// 	}
// }
// } else{
// 	echo 'aún no empieza el plazo';
// }

// $base_url = 'http://qual-edu.org/levantamiento_de_requerimientos/index.php';

// $nueva = substr($base_url, 0,52);
// echo $nueva;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

    <style>
        @import "compass/css3";

.wrapper {
  // the wrapper acts as the submenus' positioned parent
  position: relative;
}

ul {
  width: 200px;
  max-height: 250px;
  
  // use scrolling if necessary, but don't show a horizontal scrollbar
  overflow-x: hidden;
  overflow-y: auto;
}

li {
  // the submenus cannot have a positioned parent inside the scrollable list
  position: static;
  
  // submenu
  .wrapper {
    // position on top of the menu item
    position: absolute;
    
    // these are not useful because our positioned parent is not the menu item
    //top: 0;
    //left: 75%;
    
    // show on top of the menu item
    z-index: 10;
    
    // do not show the submenu by default
    display: none;
  }
  
  // display the submenu when we hover on the menu item
  &:hover > .wrapper {
    display: block;
  }
}

// for decoration purposes
$c1: #0E8CE0;
$c2: #0064B3;
$c3: #00B99B;

ul {
  margin: 1em;
  color: white;
  font-family: sans-serif;
  font-size: 16px;
}

li {
  padding: 1em;
  
  ul {
    margin: 0;
  }
  
  .wrapper {
    cursor: auto;
    li {
      padding: 0.5em;
    }
  }
  
  &:nth-child(2n) {
    background: $c1;
  }
  &:nth-child(2n+1) {
    background: $c2;
  }
  &.parent {
    background: $c3;
    cursor: pointer;
  }
}
    </style>

 <div class="wrapper">
  <ul>
    <li>Abc</li>
    <li>Def</li>
    <li>Ghi</li>
    <li>Jkl</li>
    <li class="parent">Mno >
      <div class="wrapper">
        <ul>
          <li>Abc</li>
          <li>Def</li>
          <li>Ghi</li>
          <li>Jkl</li>
          <li class="parent">Mno >
            <div class="wrapper">
              <ul>
                <li>Abc</li>
                <li>Def</li>
                <li>Ghi</li>
                <li>Jkl</li>
                <li>Mno</li>
                <li>Pqr</li>
                <li>Stu</li>
                <li>Vw</li>
                <li>Xyz</li>
              </ul>
            </div>
          </li>
          <li>Pqr</li>
          <li>Stu</li>
          <li>Vw</li>
          <li>Xyz</li>
        </ul>
      </div>
    </li>
    <li>Pqr</li>
    <li>Stu</li>
    <li>Vw</li>
    <li>Xyz</li>
    <li class="parent">Abc >
      <div class="wrapper">
        <ul>
          <li>Abc</li>
          <li>Def</li>
          <li>Ghi</li>
          <li>Jkl</li>
          <li>Mno</li>
          <li>Pqr</li>
          <li>Stu</li>
          <li>Vw</li>
          <li>Xyz</li>
        </ul>
      </div>
    </li>
    <li>Def</li>
    <li>Ghi</li>
    <li>Jkl</li>
    <li>Mno</li>
    <li>Pqr</li>
    <li>Stu</li>
    <li>Vw</li>
    <li>Xyz</li>
  </ul>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(function() {
  // whenever we hover over a menu item that has a submenu
  $('li.parent').on('mouseover', function() {
    var $menuItem = $(this),
        $submenuWrapper = $('> .wrapper', $menuItem);
    
    // grab the menu item's position relative to its positioned parent
    var menuItemPos = $menuItem.position();
    
    // place the submenu in the correct position relevant to the menu item
    $submenuWrapper.css({
      top: menuItemPos.top,
      left: menuItemPos.left + Math.round($menuItem.outerWidth() * 0.75)
    });
  });
});
</script>
</body>
</html>