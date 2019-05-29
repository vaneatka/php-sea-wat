<?php   
// 0- apa
// 1- ship
// 2- miss
// 4- hit

// optimize code / switch
// for in for



$map=[
    [0,1,0,0,0,0,0,0,0,0],
    [0,1,0,2,0,0,0,0,0,0],
    [0,1,0,0,0,0,0,0,0,0],
    [0,4,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0]
]


?>


<?php  if($map[0][0]==0) {?>
<img src="icons/water.png" alt="">
<?php   }?>

<?php  if($map[0][0]==1) {?>
<img src="icons/ship.png" alt="">
<?php   }?>

<?php  if($map[0][0] == 2) {?>
<img src="icons/miss.png" alt="">
<?php   }?>

<?php  if($map[0][0]==4) {?>
<img src="icons/explode.png" alt="">
<?php   }?>