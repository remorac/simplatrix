<!DOCTYPE HTML>
<html>
	<body style="font-family:Arial">
		<font size=7>Matrix Reloaded</font><br>
		<font size=2>algorithm and code by habiburrahman [remorac.14@gmail.com]</font><hr>
		<form action="result.php" method="post">
			<?php
				if (isset($_POST['mulai'])) {
					if ($_POST['itipe']=="dynamic") {
						$abaris=$_POST['abaris'];
						$akolom=$_POST['akolom'];
						$bbaris=$_POST['bbaris'];
						$bkolom=$_POST['bkolom'];
						$judul="Adding or Multiply";
					} else {
						$abaris=2;
						$akolom=2;
						$bbaris=0;
						$bkolom=0;
						$judul="Determinant and Invers";
					}
					
					?>
						<input type="hidden" name="abaris" value="<?php echo $abaris?>">
						<input type="hidden" name="akolom" value="<?php echo $akolom?>">
						<input type="hidden" name="bbaris" value="<?php echo $bbaris?>">
						<input type="hidden" name="bkolom" value="<?php echo $bkolom?>">
					<?php
					
					echo $judul."<br>";
					
					?>
						<table cellspacing=50>
							<tr>
								<td>
									<?php 
										//input matriks A
										echo "<br>Matrix A:";
										for ($i=0;$i<$abaris;$i++) {
											echo "<br>";
											for ($j=0;$j<$akolom;$j++) {
												?>
													<input type="text" name="<?php echo "a".$i.$j?>" size=1 style="text-align:right">
												<?php 
											}
										}
									?>
								</td>
								<td>
									<?php 
										//input matriks B
										if ($_POST['itipe']=="dynamic") {
											echo "<br>Matrix B:";
											for ($i=0;$i<$bbaris;$i++) {
												echo "<br>";
												for ($j=0;$j<$bkolom;$j++) {
													?>
														<input type="text" name="<?php echo "b".$i.$j?>" size=1 style="text-align:right">
													<?php
												}
											}
										}
									?>
								</td>
							</tr>
						</table>
					<?php
				}
			?>
			<br><br>
			<?php 
				if ($_POST['itipe']=="dynamic") {
					?>
						<input type="submit" name="adding" value="Adding">
						<input type="submit" name="multiply" value="Multiply">
					<?php
				} else {
					?>
						<input type="submit" name="detinv" value="Determinant and Invers">
					<?php
				}
			?>
		</form>
	</body>
</html>
