<?php
//komentai
/* a
*/
$game_name = 'mass effect';
$release_year = 11.95;
$awesome = true;

const BR = '<br/>';
define ('RELEASE_YEAR',2013);

echo "The game $game_name was released in".BR;

$num = '100.2';
var_dump(+$num);
echo BR;

$game_genres = array('rpg', array('adventure', 'action', 'puzzle'), 'adventure', 'action', 'puzzle', 'strategy', 'mmorpg', 'fps');
echo $game_genres[1][0].BR;
echo $game_genres[1][2].BR;
echo $game_genres[1].BR;
echo $game_genres[3].BR;

$years = array ('starcraft' => 1998, 'Witcher' => 2009, 'ME3'=> RELEASE_YEAR);
echo '<pre>';
print_r($years);
echo '</pre>';


echo '<pre>';
print_r($game_genres);
echo '</pre>';

function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

pre_r($years);

function add($x, $y){
	return $x + $y ;
	
}


?>