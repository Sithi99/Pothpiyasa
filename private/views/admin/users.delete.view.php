<?php include('../private/views/includes/header.view.php'); ?>


<body>
    <div class="header">
        <p class="operation">Delete User</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?= ROOT ?>/logout">Logout</a></p>
    </div>

    <!-- navigation bar -->

    <?php include('../private/views/includes/nav.view.php'); ?>

    <!-- body -->

    <div class="bodyContainer01">


        <div class="bodyContainer02">


        </div>

    </div>

    <?php include('../private/views/includes/popup.delete2.view.php'); ?>
    


    <?php include('../private/views/includes/footer.view.php'); ?>

    <?php if($flag[0]==1){
    echo '<script type="text/javascript">openPopup("'.ROOT.'/users");</script>';
}?>