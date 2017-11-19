<!DOCTYPE html>
<html>
<head>
	<title>Dek-Horfood-Add Menu</title>
	<link rel="shortcut icon" type="" href="../img/icon.png">
</head>
<body>
	<?php include "account.php";?>
	<div class="container">
		<div class="pad">
			<form>
			<div class="ininfo">
				<div id="namemenu">
					<div class="row">
						<div class="col-sm-12" id="namemenu">
			    			<input type="file" name="img">
			    			<input type="text" name="ingre" placeholder="ชื่อเมนู">
						</div>
					</div>
				</div>
				<div id="textbox">
					<table>
						<tr>
							<td>
								<textarea class="box" name="ingre" autofocus placeholder="ชื่อวัตถุดิบ" rows="5" cols="25"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<textarea class="box" autofocus name="how" placeholder="วิธีการทำ" rows="10" cols="50"></textarea>
								<input class="fon" type="submit" name="" value="ADD-MENU">
							</td>
						</tr>
					</table>
				</div>
			</div>
			</form>
		</div>
	</div>
</body>
</html>