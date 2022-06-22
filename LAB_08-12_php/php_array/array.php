<!DOCTYPE html>
<html>
<body>

<?php

//array_push
$txt = array("Open ","University ");
array_push($txt,"Bangladesh");

foreach($txt as $value)
{
	printf( "$value<br>");
}
var_dump($txt);


//array_pop
$txt = array("Open ","University ", "Bangladesh ");
array_pop($txt);

foreach($txt as $value)
{
	printf( "$value<br>");
}

//array_object_append
$txt_obj = new ArrayObject(array('Open ','University ', 'Bangladesh ')); 
$txt_obj->append('welcomes you'); 
 
foreach($txt_obj as $value)
{
	printf( "$value ");
}


//Multi-Dimentional Array
 
$AmazonProducts = array( array("BOOK", "Books", 50), array("DVDs", "Movies", 15), array("CDs", "Music", 20));
for ($row = 0; $row < 3; $row++) {
	for ($column = 0; $column < 3; $column++) { ?>
		 <p> | <?= $AmazonProducts[$row][$column] ?> 
	<?php } ?>
      </p>
<?php } 


?>

</body>
</html>