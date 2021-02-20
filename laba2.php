<?php



$myStr=trim($_POST["text"]);

try {
	
	if($myStr==null){
		throw new Exception('empty text');
	}

    $myStr = preg_replace('/\s+/', ' ', $myStr);

	$counter=0;
	for($i=0;$i<strlen($myStr);$i++) 
	{
		

		if($myStr[$i]==='o'||$myStr[$i]==='O'){
			$counter++;
		}
	}

	$strArr= explode(" ",$myStr);
	echo "num of o and O is $counter <br />";

	makeBigLetters($strArr);
	output($strArr);

}
catch (Exception $e) {
	echo $e->getMessage();
}


function makeBigLetters(&$arr){

    $i=2;
    while($i<count($arr)){

        $arr[$i]=strtoupper($arr[$i]);
        $i+=3;
    }
}

function output(&$arr){
    $color = 720371;

    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<strlen($arr[$i]);$j++){
            if($j % 3==2){
                echo "<p style=color: #$color >$arr[$i][$j]</p>";

            }else{
                echo "<p>$arr[$i][$j]</p>";
            }
        }
        echo " ";
    }
    echo "<br/>";
}

?>