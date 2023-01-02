<?php include('../private/views/includes/header.view.php'); ?>

<body>
        <div class="header">
                <p class="operation">View Members</p>
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

        <div class="container_view">

                <h4>No users were found at this time</h4>
        
        </div>




        <?php include('../private/views/includes/footer.view.php'); ?>