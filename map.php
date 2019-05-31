<?php   
// 0- apa
// 1- ship
// 2- miss
// 4- hit

// optimize code / switch
// for in for
session_start();




$map= $_SESSION['map'] ?? [
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
];


?>


<?php
foreach($map as $r=>$row){
    foreach($row as $c=>$col){
        if($col == 0){
            $icon= 'water.png';
        };
        if($col == 1){
            $icon= 'ship.png';
        };
        if($col == 2){
            $icon= 'miss.png';
        };
        if($col == 4){
            $icon= 'explode.png';
        };?>
        <a href="shoot.php?r=<?php print $r?>&c=<?php print $c ?>" >
        <img src="icons/<?php print $icon?>" alt=""/>
        </a>
        <?php
    }
?>
<br>
<?php
}

$_SESSION['map'] = $map;

?>
<hr>
<a href="die.php"> DIE</a>