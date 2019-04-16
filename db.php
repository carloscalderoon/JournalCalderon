<?php
// global database connection
$conn = new PDO('mysql:host=127.0.0.1:49719; dbname=localdb', 'azure','6#vWHD_$');

?>

<?php
try{
    $newdb = new PDO('mysql:host=127.0.0.1:49719; dbname=localdb', 'azure','6#vWHD_$');
    echo "<p> Connection Succesfully! </p>";

}
catch(PDOException $e){
    echo "<p> Connection Failed </p>";
}
?>