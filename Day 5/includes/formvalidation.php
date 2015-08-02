<?php

if(isset($_POST['add'])){
	$teacher = new Teacher();
	$teacher->initialize($_POST['id'],$_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['address'],$_POST['contact'],$_POST['course']);
	$repository->add($teacher);
}

?>