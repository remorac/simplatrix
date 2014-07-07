<!DOCTYPE HTML>
<html>
	<body style="font-family:Arial">
		<font size=7>Matrix Reloaded</font><br>
		<font size=2>algorithm and code by habiburrahman [https://github.com/remorac/simplatrix]</font><hr>
		<form action="input_element.php" method="post">
		What operation do you want?<br><br>
		<input type="radio" name="itipe" value="dynamic" checked>adding or multiply <br> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ordo Matrix A:  
			<input type="text" size=1 name="abaris" placeholder="baris" style="text-align:right"> x 
			<input type="text" size=1 name="akolom" placeholder="kolom" style="text-align:right"><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ordo Matrix B: 
			<input type="text" size=1 name="bbaris" placeholder="baris" style="text-align:right"> x 
			<input type="text" size=1 name="bkolom" placeholder="kolom" style="text-align:right">
			<br><br>
		<input type="radio" name="itipe" value="static">determinan and invers (hanya untuk ordo 2x2)<br><br>
		<input type="submit" name="mulai" value="OK, let's start">
		</form>
	</body>
</html>
