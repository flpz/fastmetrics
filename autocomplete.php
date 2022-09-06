<?php
$host="localhost";
$username="fastmet_flo";
$password="f4st49@fm";
$databasename="fastmet_s";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

$searchTerm = $_GET['term'];

$select =mysql_query("SELECT * FROM addresses WHERE address LIKE '%".$searchTerm."%'");
while ($row=mysql_fetch_array($select)) 
{
 $data[] = $row['address'];
}
//return json data
echo json_encode($data);
?>