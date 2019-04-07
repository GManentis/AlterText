<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="jquery-3.3.1.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="ajax/altertext.js"></script>
</head>
<body onload="getText()">
<center>
<div class="container">
<h3 style="color:red;">
Insert Text and Mark Your Parts
</h3>
<br>
<hr>
<br>
</div>
<div class="container">
<span style="float:left;"><br><br><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Insert/Change Text</button></span>
<span id="results" style="float:right;overflow-x:auto;overflow-y:auto;width:800px;height:500px;word-wrap:break-word;" onmouseup="getSelectedText()"></span>
</div>
<!--Modal Part-->

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button id="end" type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 style="color:red;">Insert New Text</h3>
        </div>
        <div class="modal-body">
			<center>
            <textarea rows="10" cols="60" id="texto"></textarea> 
			<br>
			</center>
		<div class="modal-footer"><centeR><button class="btn btn-primary" id="insert">Submit!</button></center></div>
		</div>	
      </div>
      </div>	  
</div>
<!--modal end-->	  
</center>
</body>
</html>