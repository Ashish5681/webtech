<?php
//variable setting
$name= $_REQUEST['name'];
$email=$_REQUEST['email'];
$email=$_REQUEST['message'];
//check input fields
if (empty($name) || empty($email) || empty($message))
{
	echo"please fill all the field";
}
else
{
	mail("allinone3@gmail.com","All in one stock message",$message,"from=$name<$email>");
	echo"<script type='text/javascript'>alert('your message sent successfully');
	windows.history.log(-1);
	</script>
}
?>