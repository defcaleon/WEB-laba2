<?php



$myStr=trim($_POST["text"]);

try {
	
	if($myStr==null){
		throw new Exception('empty text');
	}

	$counter=0;
	for($i=0;$i<strlen($myStr);$i++) 
	{
		

		if($myStr[$i]==='o'||$myStr[$i]==='O'){
			$counter++;
		}
	}

	echo "num of o and O is $counter";
}
catch (Exception $e) {
	echo $e->getMessage();
}




?>