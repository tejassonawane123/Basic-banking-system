<?php
session_start();
$con=mysqli_connect("localhost:3307","root","","banking system");
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/110.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:skyblue;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:yellow;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: red;
		font-size:17px;
		font-weight:bold;
		background:#ee10e;
	}
	.button:hover{
		background-color:yellow;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Akash"){
				 var arr=["Utkarsh","Dhaval","Tejas","Shubham","Gaurav","Krishna","Vaishnavi","Sagar","Amaan"];
				 }
				 else if(a==="Utkarsh"){
					var arr=["Akash","Yash","Tejas","Shubham","Gaurav","Krishna","Vaishnavi","Sagar","Amaan"];
				}
				else if(a==="Dhaval"){
					var arr=["Akash","Utkarsh","Tejas","Shubham","Gaurav","Krishna","Vaishnavi","Sagar","Amaan"];
				}
				else if(a==="Tejas"){
					var arr=["Akash","Utkarsh","Dhaval","Shubham","Gaurav","Krishna","Vaishnavi","Sagar","Amaan"];
				 }
				 else if(a==="Shubham"){
					var arr=["Akash","Utkarsh","Dhaval","Tejas","Gaurav","Krishna","Vaishnavi","Sagar","Amaan"];
				 }
				 else if(a==="Gaurav"){
					var arr=["Akash","Utkarsh","Dhaval","Tejas","Shubham","Krishna","Vaishnavi","Sagar","Amaan"];
				 }
				 else if(a==="Krishna"){
					var arr=["Akash","Utkarsh","Dhaval","Tejas","Shubham","Gaurav","Vaishnavi","Sagar","Amaan"];
				 }
				 else if(a==="Vaishnavi"){
					var arr=["Akash","Utkarsh","Dhaval","Tejas","Shubham","Gaurav","Krishna","Sagar","Amaan"];
				 }
				 else if(a==="Sagar"){
					var arr=["Akash","Utkarsh","Dhaval","Tejas","Shubham","Gaurav","Krishna","Vaishnavi","Amaan"];
				 }
				 else if(a==="Amaan"){
				 var arr=["Akash","Utkarsh","Dhaval","Tejas","Shubham","Gaurav","Krishna","Vaishnavi","Sagar"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:red;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Sender Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Akash">Akash</option>
			<option value="Utkarsh">Utkarsh</option>
			<option value="Dhaval">Dhaval</option>
			<option value="Tejas">Tejas</option>
			<option value="Shubham">Shubham</option>
			<option value="Gaurav">Gaurav</option>
			<option value="Krishna">Krishna</option>
			<option value="Vaishnavi">Vaishnavi</option>
			<option value="Sagar">Sagar</option>
			<option value="Amaan">Amaan</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
			<option value="Akash">Akash</option>
			<option value="Utkarsh">Utkarsh</option>
			<option value="Dhaval">Dhaval</option>
			<option value="Tejas">Tejas</option>
			<option value="Shubham">Shubham</option>
			<option value="Gaurav">Gaurav</option>
			<option value="Krishna">Krishna</option>
			<option value="Vaishnavi">Vaishnavi</option>
			<option value="Sagar">Sagar</option>
			<option value="Amaan">Amaan</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>