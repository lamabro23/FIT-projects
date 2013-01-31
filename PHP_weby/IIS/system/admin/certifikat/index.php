<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<link rel="stylesheet" href="../../images/style.css" type="text/css" />
<?php include("../../core.php"); ?>
<?php include("../../head.php"); ?>	
</head>

<body>
			
<!-- wrap starts here -->
<div id="wrap">
		
	<!-- navigační lišta-->
	<?php 
		$current = 2;
		include("../menu.php"); 
	?>		

	<!-- content starts -->
	<div id="content">
	
		<div id="main">

			<?php
				if(isset($_GET['msg'])) {
					if($_GET['msg'] == 1) {
						$msg = 'Certifikat byl odstraněn.';
					} elseif ($_GET['msg'] == 2) {
						$msg = 'Certifikat byl vytvořen.';
					} elseif ($_GET['msg'] == 3) {
						$msg = 'Údaje o Certifikatu byly změněny.';
					} elseif ($_GET['msg'] == 4) {
						$msg = '<span style="color:red">Nebylo zadáno jméno.</span>';
					} elseif ($_GET['msg'] == 5) {
						$msg = '<span style="color:red">Špatně zadané jméno.</span>';
					}

					echo '<table><tr><td>'.$msg.'</td></tr></table>';
				}
			?>

			<form action="system.php" method="get">
				<table>
				<tr>
					<td colspan="2" align="center">
						<input class="button" type="button" onClick="location.href='system.php?vytvorit=1'" value="Přidat nový certifikát"/>
					</td>
				</tr>
				<tr>
					<td>
						<select name="certifikat" size="1">
						<?php

							$result = mysql_query('SELECT * FROM Certifikat');


							while ($row = mysql_fetch_array($result)) {
								echo '<option value="'.$row['ID'].'">'.$row['jmeno'] ;
							}
						?>
						</select>
					</td>
					<td>
						<input class="button" type="submit" value="Upravit Certifikat"/>
					</td>
				</tr>
				</table>
			</form>
		<!-- main ends -->	
		</div>

	<!-- content ends-->	
	</div>
		
	<!-- zápatí lišta-->
	<?php include("../../footer.php"); ?>


<!-- wrap ends here -->
</div>

</body>
</html>
