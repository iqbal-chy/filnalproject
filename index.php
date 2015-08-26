<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo "ddd";
        echo "hello wrld";
        print "<table border=\"1\">";
		for($y=1; $y<=12; $y++){
			print "<tr>";
			for($x=1; $x<=12; $x++){
				print "\t<td> ";   //data cell
				print $x*$y;
				print "</td>";
			}
			print "</tr>";
		}
		print "</table>"

        ?>
    </body>
</html>
