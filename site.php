<?php
	$total=0;
	if ((strlen($_GET['text'])==True) and (strlen($_GET['text1'])==True)){
		if ($_GET['OP']=='+'){
			$total= $_GET['text'] + $_GET['text1'];
		}else if($_GET['OP']=='-'){
			$total= $_GET['text'] - $_GET['text1'];
		}else if($_GET['OP']=='*'){
			$total= $_GET['text'] * $_GET['text1'];
		}else if($_GET['OP']=='/'){
			$total= $_GET['text'] / $_GET['text1'];
		}else{
			$total= "Operation invalid";
		}
	}else{
	$total= "Insert Number";	
	}
?>

<!DOCTYPE html>

	<html lang="en">
	
		<head>
			<title>Simple Calculator</title>
			<meta charset="UTF-8" />
			<meta name="viewport" type="divice=device-width,initial-sclae=1.0" />
			<link rel="stylesheet" href="style.css" />
		</head>
		<body>
			<img src="./background.jpg" alt="background" class="pic_background">
			<form action="site.php" method="GET" class="forms" >
				<div class="input1">
					1<sup>st</sup> Number  :<input name="text" type="name" />
				</div>
				<div class="OP">
					Operation :<input name="OP" type="name" />
				</div>
				<div  class="input2">
					2<sup>nd</sup> number :<input name="text1" type="name" />
				</div>
				<div class="lastchild">
					<button type="submit" class="submit">Submit</button>
				</div>
				<div>
					<label name="total" type="text" 
					class="total">Ans:"<?php echo($total); ?>"</label>
				</div>
			</form>			
		</body>
	
	</html>
	
