<?php include('../private/views/includes/header.view.php'); ?>

<body>
        <div class="header">
                <p class="operation">Dashboard</p>
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
        <div class="adminDashboard_analytics">
                <h2>Overall Analytics</h2>

                <div class="admin_analytics">
                        <div class="admin_total_books analytics_item">
                                <h3>Total Books</h3>
                                <h3>620</h3>
                        </div>
                        <div class="admin_total_members analytics_item">
                                <h3>Total Members</h3>
                                <h3>420</h3>
                        </div>

                        <div class="admin_new_users analytics_item">
                                <h3>Today's New Users</h3>
                                <h3>5</h3>
                        </div>

                        <div class="admin_book_loans analytics_item">
                                <h3>Today's Book Loans</h3>
                                <h3>40</h3>
                        </div>

                        <img src="<?= ROOT ?>/img/admin/others/admin_report.png" alt="">
                </div>
        </div>

        <!-- Calendar -->
        <?php include('../private/views/includes/calendar.view.php'); ?>

        <!-- Online Users -->
        <?php include('../private/views/includes/onlineUsers.view.php'); ?>



        <?php include('../private/views/includes/footer.view.php'); ?>