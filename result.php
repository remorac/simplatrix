<!DOCTYPE HTML>
<html>
	<body style="font-family:Arial">
		<font size=7>Matrix Reloaded</font><br>
		<font size=2>algorithm and code by habiburrahman [https://github.com/remorac/simple-matrix]</font><hr>
		<form action="index.php" method="post">
		RESULT<br><br>
		<?php
			$abaris=$_POST['abaris'];
			$akolom=$_POST['akolom'];
			$bbaris=$_POST['bbaris'];
			$bkolom=$_POST['bkolom'];
			
			//penjumlahan
			if (isset($_POST['adding'])) {
				echo "Adding";
				if ($akolom!=$bkolom || $abaris!=$bbaris) {
					echo "<br><h2>! Invalid Matrix !</h2>";
				} else {
					for ($i=0;$i<$abaris;$i++) {
						echo "<br>";
						for ($j=0;$j<$akolom;$j++) {
							?>
								<input type="text" name="<?php echo "r".$i.$j?>" value="<?php echo ($_POST['a'.$i.$j]+$_POST['b'.$i.$j])?>" size=1 style="text-align:right">
							<?php
						}
					}
				}
			}
			
			//perkalian
			if (isset($_POST['multiply'])) {
				echo "Multiply";
				if ($akolom!=$bbaris) {
					echo "<br><h2>! Invalid Matrix !</h2>";
				} else {
					for ($i=0;$i<$abaris;$i++) {
						echo "<br>";
						for ($j=0;$j<$bkolom;$j++) {
							$element=0;
							for ($k=0;$k<$akolom;$k++) {
								$element+=$_POST['a'.$i.$k]*$_POST['b'.$k.$j];
							}
							?>
								<input type="text" name="<?php echo "r".$i.$j?>" value="<?php echo $element?>" size=1 style="text-align:right">
							<?php
						}
					}
				}
			}
			
			//determinan dan invers
			if (isset($_POST['detinv'])) {
				$det=($_POST['a00']*$_POST['a11'])-($_POST['a01']*$_POST['a10']);
				echo "Determinan A: ".$det."<br><br>";
				echo "Invers A:";
				$element[0][0]=$_POST['a11'];
				$element[0][1]=0-$_POST['a01'];
				$element[1][0]=0-$_POST['a10'];
				$element[1][1]=$_POST['a00'];
				for ($i=0;$i<$abaris;$i++) {
					echo "<br>";
					for ($j=0;$j<$akolom;$j++) {
						?>
							<input type="text" name="<?php echo "i".$i.$j?>" value="<?php echo $element[$i][$j]?>" size=1 style="text-align:right">
						<?php 
					}
				}
			}
		?>
		<br><br><br>
		<input type="submit" name="restart" value="Start Again">
		</form>
	</body>
</html>
