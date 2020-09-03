function alphanumeric(inputtxt)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(inputtxt.value.match(letters))
{
alert('Your registration number have accepted : you can try another');
document.form1.text1.focus();
return true;
}
else
{
alert('Please input alphanumeric characters only');
return false;
}
}