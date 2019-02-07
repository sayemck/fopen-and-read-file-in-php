<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>exam</title>
</head>

<body>
<?php
	class exam{
		function __construct($cfile){
			$fp=fopen($cfile,'r');
				print "The ID/Number:";
				print "<br/>";
				while(!feof($fp)){
					print $y = fgets($fp);
					print "<br/>";
					
				}
			}
		
		function cread($cfile){
			$fp=fopen($cfile,'r');
				print "The ID/Number:";
				print "<br/>";
				while(!feof($fp)){
					$y = fgets($fp);
					print "<br/>";
					$tot =explode(":",$y);
					print $tot[1]; // 1 name show //0 number show
					
				}
			}
		}
		$exam = new exam('r39.txt');
		$exam->cread('r39.txt');
?>
</body>
</html>