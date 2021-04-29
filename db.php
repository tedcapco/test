<?php
error_reporting(0);


$conn =  mysqli_connect("127.0.0.1", 'root', '', 'test');

if (!$conn) {
    echo "
    	<div class='alert alert-danger'>
  			<strong>Danger!</strong> DATABASE ERROR CONNECTION.
		</div>";	
} else {

	echo "
		<div class='alert alert-success'>
  			<strong>Success!</strong> A proper connection to MySQL was made!.
		</div> " . PHP_EOL;
}
?>