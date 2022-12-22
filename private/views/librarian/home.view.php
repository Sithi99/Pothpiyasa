<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pothpiyasa</title>
    <link rel="stylesheet" href="<?=ROOT?>/css/librarian/dashboardLibrarain.css">
    <link rel="stylesheet" href="<?=ROOT?>/css/librarian/includes/header.css">
    <link rel="stylesheet" href="<?=ROOT?>/css/librarian/includes/nav.css">
    <link rel="stylesheet" href="<?=ROOT?>/css/librarian/includes/calendar.css">
    <link rel="stylesheet" href="<?=ROOT?>/css/all.min.css">
    
</head>
<body>
<div class="header">
        <p class="operation">Dashboard</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?=ROOT?>/logout">Logout</a></p>
</div>

<!-- navigation bar -->

<?php include('../private/views/librarian/includes/nav.view.php'); ?>


<div class="dashContainer1">
      <h1 class="overallAnalytics">Overall Analytics</h1> 
      <div class="totalBook">
            <h3 class="totalBookLabel">Total Books</h3>
            <p class="totalBookValue">120</p>
      </div>
      <div class="totalMem">
            <h3 class="totalMemLabel">Total Members</h3>
            <p class="totalMemValue">200</p>
      </div>
      <div class="borowedBook">
            <h3 class="totalBBookLabel">Borrowed Books</h3>
            <p class="totalBValue">25</p>
      </div>
      <div class="damedgeBook">
            <h3 class="totalDLabel">Dameged Books</h3>
            <p class="totalDValue">100</p>
      </div>
</div>


</div>
<div class="dashContainer2">
      <img src="<?= ROOT ?>/img/charts.png" alt="" srcset="" class="image01">
</div>
<div class="dashContainer3">
      <p class="onlineUsersTitle01" >Online Users</p>
      <p class="onlineUsersTitle02">7 Online Users [last 5 minutes]</p>
      <hr>
      
      <img src="<?= ROOT ?>/img/onlineUsers.png" alt="" srcset="" class="image02">
</div>

<!-- Calendar -->
<?php include('../private/views/librarian/includes/calendar.view.php'); ?>

    
<?php include('../private/views/librarian/includes/footer.view.php'); ?>
