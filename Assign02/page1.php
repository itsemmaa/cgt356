<?php
//notice the new line character \n
//concatenated the new line character instead of adding it directly in
//did this to emphasize the new line character, it could just as easily be written immediately following each line

//notice the escaping of the double quote \"

//notice the alignment of printed items - 5 spaces in front of title, meta, etc


echo("<doctype html>"."\n");
echo("<html>"."\n");
echo("<head>"."\n");
echo("     <meta charset=\"utf-8\">"."\n");
echo("     <title>Assign02 - Welcome to the Alpha page</title>"."\n");
echo("</head>"."\n");
echo("<body style=\"background-image:url(img/alpha.jpg); background-repeat: no-repeat;\">"."\n");
echo("     <h1>Welcome to the Alpha page<h1>"."\n");
echo("     <h4> <a href=\"index.php\">Return to the index page</a> </h4>"."\n");
echo("</body>"."\n");
echo("</html>"."\n");

?>