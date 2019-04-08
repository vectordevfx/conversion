<?php

// basic conversion km/m/cm
function conversion($length,$fromUnit,$toUnit){
$array['km']['ladder'] = 3;
$array['km']["km"] = 1;
$array['km']["m"] = 1000;
$array['km']["cm"] = 100000;
$array['m']['ladder'] = 2;
$array['m']['m'] = 1;
$array['m']['cm'] = 100;
$array['m']['km'] = 1000;
$array['cm']['ladder'] = 1;
$array['cm']['cm'] = 1;
$array['cm']['m'] = 100;	
$array['cm']['km'] = 100000;	
	if ($array[$fromUnit]['ladder'] > $array[$toUnit]['ladder']){
		$result = $length * $array[$toUnit][$fromUnit];
		echo $length . ' ' . $fromUnit . ' = ';		
		echo rtrim(rtrim(sprintf('%.8F', $result), '0'), ".");
		echo ' ' . $toUnit;
	}
	else{
		$result = $length / $array[$toUnit][$fromUnit];	
		echo $length . ' ' . $fromUnit . ' = ';
		echo rtrim(rtrim(sprintf('%.8F', $result), '0'), ".");
		echo ' ' . $toUnit;
	}
}

// length, fromUnit, toUnit
conversion('10000','m','km');

// Test
echo '<br>';
conversion('1','cm','cm');
echo '<br>';
conversion('1','cm','m');
echo '<br>';
conversion('1','cm','km');
echo '<br>';
conversion('1','m','cm');
echo '<br>';
conversion('1','m','m');
echo '<br>';
conversion('1','m','km');
echo '<br>';
conversion('1','km','km');
echo '<br>';
conversion('1','km','m');
echo '<br>';
conversion('1','km','cm');
echo '<br>';
conversion('500','cm','cm');
echo '<br>';
conversion('500','cm','m');
echo '<br>';
conversion('500','cm','km');
?>
