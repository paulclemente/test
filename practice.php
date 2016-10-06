<?php

	echo 'Hello World';

	$stupid = 'my life';
	echo '<br>';
	echo'stupid = ';

	echo"$stupid";

	echo '<br>';
	echo '<br>';
	$url = 'http://www.google.com';
	$linkName = 'Google';
	echo '<a href ="'.$url.'">'.$linkName.' </a>';
	$a = '32';
	$b = 'cats';
	echo $a.' '.$b;
	echo'<br>';
	echo "{$a} {$b}";
	echo '<br>';
	echo " god help the out{$a}cast ";
	echo ' god help the out'.$a.'cast ';
	echo $a. $b;

	echo '<br>';
	$array[] =array();
	$array[] = 'the world turned upside down';
	$array[] = 'freedom for america, freedom for france';

	print_r($array);

	echo '<br>';
	$asnest['hamilton'] = array( 'character' => 'Hamilton', 'lyric' => 'Got to start a new nation, got to meet my son');
	 $asnest['wicked'] = array( 'character' => 'Elphaba', 'lyric' => 'I hope your proud with how you would grovel in submission to feed your own
	 ambition.');

	 print_r($asnest['wicked']);
	
	echo '<br>';
	echo '<br>';
	foreach($asnest as $charac){
	echo $charac['character'];
	echo '&nbsp;';	
	}
	
	foreach($asnet as $variable){
		foreach($variable as $key => $value){
		echo $key . ' ' . $value. "\n";
		}
	}

?>
