<?php
if($categories->num_rows()>0){
	foreach ($categories->result() as $cat) {
		echo "<li>".$cat->category_name."</li>";	
	}
}
else{
	echo "Record Not Found";
}