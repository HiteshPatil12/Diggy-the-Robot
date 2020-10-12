<?php
//Code to print last location of Diggy the robot, Hitesh 13/10/2020
const NORTH = 1;
const EAST = 2;
const SOUTH = 3;
const WEST = 4;

$direction = [ 1 => "NORTH", 2 => "EAST", 3 => "SOUTH", 4 => "WEST"];

const MULTIPLIER_1 = 1;
const MULTIPLIER_2 = 1;
const MULTIPLIER_3 = -1;
const MULTIPLIER_4 = -1;

$x = $argv[1];
$y = $argv[2];

if(!is_numeric($x) || !is_numeric($y)){
	die("\nCo-ordinates must be Integer\n");
}

$presentDirection = $argv[3];

if($presentDirection != 'NORTH' && $presentDirection != 'EAST' && $presentDirection != 'SOUTH' && $presentDirection != 'WEST'){
	 die("\nWrong Direction\n");
}

$presentDirectionNumber = constant($presentDirection);
echo "PDN_".$presentDirectionNumber."\n"; 
$path = $argv[4];
echo "path_". $path."\n";
for($i = 0; $i < strlen($path); $i++ ){

	switch($path{$i}){
		case 'R':
			if($presentDirectionNumber == 4){
				$presentDirectionNumber = 1;
			} else {
				$presentDirectionNumber++;
				echo "R_switch_". $presentDirectionNumber."\n";
			}
			break;
			
        case 'L':
            if($presentDirectionNumber == 1){
                    $presentDirectionNumber = 4;
            } else {
                    $presentDirectionNumber--;
                    echo "L_switch_". $presentDirectionNumber."\n";
            }
            break;
            
        case 'W':
			if( !($presentDirectionNumber % 2) ){
				$x += ($path{$i+1} * constant("MULTIPLIER_".$presentDirectionNumber) );
			} else {
				$y += ($path{$i+1} * constant("MULTIPLIER_".$presentDirectionNumber) );
			}
			echo "W_switch_". $presentDirectionNumber."\n";
			echo "X:". $x."\n";
			echo "Y:". $y."\n";
			$i++;
            break;
            
		default:
    			if(is_numeric($path{$i})){
    				echo "\nNumber should be associated with 'W' walk ranging from 0 - 9\n";
    			} else {
    				echo "\nProvided char '".$path{$i}."' is not valid\n";
    			}
			break;
	}

}

echo $x." ".$y." ".$direction[$presentDirectionNumber]."\n";

?>
