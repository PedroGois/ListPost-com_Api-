<?php 
if (isset($_POST['idobj'])) 
$idobj=$_POST['idobj'];
?>

<?php
$url="https://jsonplaceholder.typicode.com/posts";
$posts=json_decode(file_get_contents($url));


foreach($posts as $Post) {
if($Post->id == $idobj){
echo "<html>
<div class='container mt-4'>
<div class='rounded border border-info text-center p-3'>";
echo "Esse é o Title : ".$Post->title."; <br>";
echo "<hr>";
echo "E esse é o Body : ".$Post->body."; <br>";
echo "<hr>";
echo "Do post de Id: ".$idobj."; <br>";
echo "</div>
</div>
</html>";
}
}
?>