<?php
include "top.php";
print "<h1>Player Stats</h1>";
$avg = "SELECT avg(userMoves), avg(totalMoves), max(date), count(user) from game";
$avgRes = $thisDatabaseReader->select($avg, "", 0, 1, 0, 0, false, false);
$query = "SELECT user, avg(userMoves), avg(totalMoves), max(date), count(user) from game group by user order by date desc";
$columns = 5;
$results = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);
print "<table class='table table-striped'>";
?>
<tr onclick="document.location = 'links.html';">
<?php
print '<th>User</th>';
print '<th>AVG Moves</th>';
print '<th>AVG Game Moves</th>';
print '<th>Last Game Played</th>';
print '<th>Total Games Played</th>';
print "</tr>";
print "<tr><td>Users</td><td>".$avgRes[0][0]."</td><td>".$avgResavg[0][1]."</td><td>".$avgRes[0][2]."</td><td>".$avgRes[0][3]."</td></tr>";
include "lib/tablesLink.php";
print "</table>";
include "footer.php";
?>