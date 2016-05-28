<?php
    include "top.php";
    $date = date("Y-m-d");
    
    if (isset($_GET['user'])) {
        $user = $_GET['user'];
    }
    if (isset($_GET['win'])) {
        $win = $_GET['win'];
    }
    if (isset($_GET['totalMoves'])) {
        $totalMoves = $_GET['totalMoves'];
    }
    if (isset($_GET['userMoves'])) {
        $userMoves = $_GET['userMoves'];
    }
    if($user != null && $win != null && $date != null && $totalMoves != null && $userMoves != null){
        
        $sql = "INSERT INTO game ('id', 'userMoves', 'totalMoves', 'date', 'win', 'user')
                VALUES ('null', '". $userMoves ."', '". $totalMoves ."', '". $date ."', '". $win ."', '". $user ."')";
        
        $data = array();
        
        $data[] = $userMoves;
        $data[] = $totalMoves;
        $data[] = $date;
        $data[] = $win;
        $data[] = $user;
        
        $query = 'INSERT INTO game SET ';
        $query .= 'userMoves = ?, ';
        $query .= 'totalMoves = ?, ';
        $query .= 'date = ?, ';
        $query .= 'win = ?, ';
        $query .= 'user = ? ';
        
        $results = $thisDatabaseWriter->insert($query, $data);

    }
    header( 'Location: http://nagel.w3.uvm.edu/sorryDb/index.php' ) ;
?>