<!DOCTYPE html>
<html>        
<body>
<?php 
$url="https://jsonplaceholder.typicode.com/posts";
$posts=json_decode(file_get_contents($url));

foreach($posts as $Post) {

echo "<html>
<div class='container  justify-content-center m-4'>
<div class='rounded border border-info text-center p-3'>";
echo"<pre>";
print_r($Post);
echo "<form action='detalhePost' method='post'>
        <input type='hidden' name='idobj' value=".$Post->id.">
        <input type='submit' class='btn  border border-info' name='visu' value='Detalhar'>
    </form>
    </div>
</div>
</html>";
echo "<hr>";
}


?>
