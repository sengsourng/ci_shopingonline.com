

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name; ?></title>
</head>
<body>
<?php 
// echo "ID :".$data['id']." and Name : ".$data['name']." and option : ".$data['option'];

echo "Cat ID:". $cat_id;

 //echo "ID :".$id." and Name : ".$name." and option : ".$option;

 foreach($category as $cat){
	 	echo $cat['cat_id'] . "-".$cat['cat_name'] . "-".$cat['cat_ico_class'];
	 	echo "<br/>";
 }




?>
</body>
</html>