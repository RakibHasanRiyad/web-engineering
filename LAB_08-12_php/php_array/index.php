<!DOCTYPE html>
<html>
<body>

<?php


$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo "$txt";



$AmazonProducts = array( array("BOOK", "Books", 50), array("DVDs", "Movies", 15), array("CDs", "Music", 20));
for ($row = 0; $row < 3; $row++) {
	for ($column = 0; $column < 3; $column++) { ?>
		 <p> | <?= $AmazonProducts[$row][$column] ?> 
	<?php } ?>
      </p>
<?php } 


print"<p> rrrrrr</p>";

printf("<p> rrrrrr</p>");

echo "<p> rrrrrr</p>";
echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

</body>
</html>