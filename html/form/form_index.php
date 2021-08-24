<!DOCTYPE html>
<html>
	<head>
		<title>יצירת קשר:טופס</title>
		<meta charset="utf-8">
		<?php
			include '../misc/variables.php';
		?>
	</head>
	<body>
		<form dir="rtl" lang="he" action="../../backend/form.php" method="POST">
			<div class="prcf_container">
				<?php
					include 'form_header.php';
					include 'form_middle.php';
					include 'form_footer.php';
				?>
			</div>
		</form>
	</body>
</html>
