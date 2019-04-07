<?php

	$CONNPDO = new PDO("sqlite:../text.db");
	$CONNPDO -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	if($CONNPDO != null)
	{
		$getdata_PRST = $CONNPDO->prepare("SELECT text FROM text WHERE id = 1");
		$getdata_PRST->execute() or die($CONNPDO->errorInfo());
		
		while($getdata_RSLT = $getdata_PRST->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_NEXT))
		{
			$text = $getdata_RSLT["text"];
		}
	
		echo $text;
	}
?>