<?php
//Store the posted data into variables
$userID = $_POST["userID"];
$passwd = $_POST["passwd"];

//Example 1
//Do this example last, this is the way we actually want you to write the if statements when there is only 1 line in the body
if(($userID=="page1") && ($passwd=="alpha"))
		header("Location: page1.php");
else if(($userID=="page2") && ($passwd=="beta"))
	header("Location: page2.php");
else if(($userID=="page3") && ($passwd=="gamma"))
	header("Location: page3.php");
else
	header("Loction: error.php");


//Example 2
//Do this example second, as an example of collapsing the if statements
if(($userID=="page1") && ($passwd=="alpha")) {
	header("Location: page1.php");
}
else if(($userID=="page2") && ($passwd=="beta")) {
	header("Location: page2.php");
}
else if(($userID=="page3") && ($passwd=="gamma")) {
	header("Location: page3.php");
}
else {
	header("Location: error.php");
}


//Example 3
//Do this example first, to show the nesting
if($userID=="page1") {
	if($passwd=="alpha") {
		header("Location: page1.php");
	}
	else {
		header("Location: error.php");
	}
}
else if($userID=="page2") {
	if($passwd=="beta") {
		header("Location: page2.php");
	}
	else {
		header("Location: error.php");
	}
}
else if($userID=="page3") {
	if($passwd=="gamma") {
		header("Location: page3.php");
	}
	else {
		header("Location: error.php");
	}
}
else {
	header("Location: error.php");
}

?>