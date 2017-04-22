<html>

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"; charset="utf-8">
<title>Server連線</title>
</head>

<body>
	<?php
	$link = mysql_connect("localhost", "groupa", "groupagroupa");
	if ($link) {echo "connect主機連結成功!..."<br>;}
	else { echo "connect主機連結失敗!!...<br>";}
	?>
</body>

</html>
