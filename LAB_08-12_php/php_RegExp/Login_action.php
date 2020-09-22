<?php



$text=$_POST['text'];
$pattern=$_POST['pattern'];

if (preg_match("/$pattern/", $text)) {
echo "$text is a valid ";
}
else
{
  echo "$text is NOT a valid ";
}

?>