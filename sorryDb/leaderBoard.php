<?php

include "top.php";
print "<h1>Player Leaderboard</h1>";
$query = "SELECT user, sum(win) from game group by user order by sum(win) desc limit 10";
$columns = 2;
$results = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);
print "<table class='table table-striped'>";
print "<tr>";
print '<th>User</th>';
print '<th>Total Wins</th>';
include "lib/tables.php";
print "</table>";
include "footer.php";
?>
