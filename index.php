<?php
//include('../../Glimpse/index.php');
require_once("phpGrid/conf.php");      
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>chess_zambia</title>
	</head>
	<body>
		<?php
			$dg = new C_DataGrid("SELECT fideid,name,title,rating,rapid_rating,blitz_rating,birthday FROM ratings_list", "fideid", "ratings_list");
			$dg->enable_advanced_search(true);
			$dg->enable_export('CSV');
			$dg -> display();
		?>
	</body>
</html