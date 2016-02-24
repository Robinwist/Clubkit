<h1>random shit</h1>



<?php

$sql = "SELECT * FROM clubkit_sports";
$result = $mysqli->query($sql);
while($row = mysqli_fetch_assoc($result)) {
    $sports[] = $row;

    echo $sports['name'];
//    echo "<img src=".$row['picture'].">";
}



//$sql = "SELECT * FROM products";
//$resultproducts = $mysqli->query($sql);
//$resultproducts = resultToArray($resultproducts)

?>