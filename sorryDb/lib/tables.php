<?php
print "</tr>";
foreach ($results as $row) {
    print "<tr>";
    for ($i = 0; $i < $columns; $i++) {
           print '<td>' . $row[$i] . '</td>';
       }
       print "</tr>";
}
?>