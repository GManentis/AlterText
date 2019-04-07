<?php
if(isset($_POST["text"]))
{
	$CONNPDO = new PDO("sqlite:../text.db");
	$CONNPDO -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	if($CONNPDO != null)
	{
		$text = $_POST["text"];
		
	    $adddata_PRST = $CONNPDO -> prepare("UPDATE text SET text = :text WHERE id = 1");
		$adddata_PRST -> bindValue(":text",$text,SQLITE3_TEXT);
		$adddata_PRST -> execute() or die($CONNPDO->errorInfo());
			
		echo $text;
		
	}
	
}

?>