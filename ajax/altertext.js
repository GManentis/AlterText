$(document).ready(function()
{
	
	$("#insert").click(function()
	{
		var textt = $("#texto").val();
		
		$.ajax(
		{
			type: "POST",
			url: "ajax/StoreText.php" ,
			data: {textt:textt},
			/*contentType: "application/json; charset=utf-8",*/
			/*dataType: "json",*/
			success: Response
			
		});
		
		$("#end").click();
		
		
	});
	
	

	function Response(data)
	{
		var z = data;
		$("#results").html(z);
	}


	
});

function getText() 
{
	
	 try 
	 {				
		
		var xmlhttp;

		if (window.XMLHttpRequest) 
		{
			xmlhttp = new XMLHttpRequest();
			// most browsers
		} 
		else 
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			// internet explorer
		}
		
		
		xmlhttp.onreadystatechange = function() 
		{			
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
			{
				var strOut;			
				strOut = xmlhttp.responseText;
				document.getElementById("results").innerHTML = strOut;
				
			}
		}
		xmlhttp.open("POST", "ajax/GetText.php", true);			
		xmlhttp.send();
	}
	catch(err) 
	{
		alert(err);
	}
	
}

function getSelectedText() 
{
	var keimeno = document.getElementById("results").innerHTML;
	
    if (window.getSelection) 
	{
        txt = window.getSelection();
    } 
	else if (window.document.getSelection) 
	{
        txt = window.document.getSelection();
    } 
	else if (window.document.selection) 
	{
        txt = window.document.selection.createRange().text;
    }
    //document.getElementById("result").innerHTML = txt;  
	var new_txt = "<span style=\"color:red;\">" + txt + "</span>";
	
	
	 
	 //document.getElementById("result").innerHTML = txt;  
	var brandNew = keimeno.replace(txt,new_txt);
	
	 try 
	 {				
		
		var xmlhttp;

		if (window.XMLHttpRequest) 
		{
			xmlhttp = new XMLHttpRequest();
			// most browsers
		} 
		else 
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			// internet explorer
		}
		
		
		xmlhttp.onreadystatechange = function() 
		{			
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
			{
				var strOut;			
				strOut = xmlhttp.responseText;
				document.getElementById("results").innerHTML = strOut;
				
			}
		}
		xmlhttp.open("POST", "ajax/ModifyText.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");			
		xmlhttp.send("text="+brandNew);
	}
	catch(err) 
	{
		alert(err);
	}
	
}