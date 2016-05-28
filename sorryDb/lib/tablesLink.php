<?php
print "</tr>";
foreach ($results as $row) {
    print "<tr class='clickable-row' data-href='url://http://nagel.w3.uvm.edu/sorryDb/index.php?user=" . $row[0] . "'>";
    for ($i = 0; $i < $columns; $i++) {
           print '<td>' . $row[$i] . '</td>';
       }
       print "</tr>";
}

?>