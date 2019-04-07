<?php
if(isset($_POST["textt"]))
{
	$CONNPDO = new PDO("sqlite:../text.db");
	$CONNPDO -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	if($CONNPDO != null)
	{
		$text = $_POST["textt"];
		$getdata_PRST = $CONNPDO->prepare("SELECT COUNT(id) AS number FROM text WHERE id = 1");
		$getdata_PRST->execute() or die($CONNPDO->errorInfo());
		
		while($getdata_RSLT = $getdata_PRST->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_NEXT))
		{
			$count = $getdata_RSLT["number"];
		}
		
		if($count == 0)
		{
			$adddata_PRST = $CONNPDO -> prepare("INSERT into text(text) VALUES (:text)");
			$adddata_PRST -> bindValue(":text",$text,SQLITE3_TEXT);
			$adddata_PRST -> execute() or die($CONNPDO->errorInfo());
			
			echo $text;
		}
		else
		{
			$adddata_PRST = $CONNPDO -> prepare("UPDATE text SET text = :text WHERE id = 1");
			$adddata_PRST -> bindValue(":text",$text,SQLITE3_TEXT);
			$adddata_PRST -> execute() or die($CONNPDO->errorInfo());
			
			echo $text;
		}
	}
	
}

?>