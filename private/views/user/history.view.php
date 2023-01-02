<?php include('../private/views/user/includes/header.view.php'); ?>

<body>
<div class="header">
        <p class="operation">History</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?=ROOT?>/logout">Logout</a></p>
</div>

<!-- navigation bar -->

<?php 
   include('../private/views/user/includes/nav.view.php');
 ?>

<!-- body -->

<div class="container_view_history">
               
       
        <button class="backbtnreservation"><a href="<?= ROOT ?>/userdashboard">Back</a></button>

 </div>


<?php include('../private/views/user/includes/footer.view.php'); ?>