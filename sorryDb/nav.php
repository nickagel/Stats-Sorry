

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="navbar-brand">SORRY Stats</div>
    </div>
        <ul class="nav navbar-nav">
        <?php
        if ($path_parts['filename'] == "index") {
            print '<li class="active"><a>Player</a></li>';
        } else {
            print '<li><a href="index.php">Player</a></li>';
        }
        
        if ($path_parts['filename'] == "leaderBoard") {
            print '<li class="active"><a>Leader Board</a></li>';
        } else {
            print '<li><a href="leaderBoard.php">Leader Board</a></li>';
        }
        
        ?>
    </ul>
  </div>
</nav>

