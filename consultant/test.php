<?php
include_once ('classes/mysql.php');
$database = new Mysql();
$database->connect();
$query = "SELECT Adv_id, Adv_title FROM adverts";
$result = mysql_query($query) or die(mysql_error());

echo "<table border=\"1\" align=\"center\" style=\"border-color: black\">";
echo "<tr><th>Advert ID</th>";
echo "<th>&nbsp;&nbsp;Advert Title</th></tr>";
while ($row = mysql_fetch_array($result)) {
    echo '<tr>
                              <td>' . $row['Adv_id'] . '</td><td>&nbsp;&nbsp;' . $row['Adv_title'] . '</tr>';
}
echo '</table>';