 <script src="javascript/scriptReg.js" defer></script>
<?php
include_once('includes/init.php');

if(isset($_SESSION['username']))
{
	header('location:index.php');
}
else
{
	include_once('templates/init/common.php');
	include_once('templates/init/register.php');
}
?>
		