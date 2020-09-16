<?php 
session_start(); 
 

if(!isset($_SESSION["nom"]))
{
	header('Location:index.php');
  exit();
}
else {
	$nom =  $_SESSION["nom"];
}
 
?>
<div id="demo"></div>

<script>
var el = '<?php echo "uploads/".$nom?>'; 
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      var obj = JSON.parse(this.responseText);
      document.getElementById("demo").innerHTML =obj.member.birth_date;
      console.log(obj);
    }
	};
	console.log(el);
  xhttp.open("GET",el+".json", true);
	xhttp.send();	

</script>

