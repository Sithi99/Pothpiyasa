<?php include('../private/views/includes/header.view.php'); ?>

<body>
    <div class="header">
        <p class="operation">Reports</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?= ROOT ?>/logout">Logout</a></p>
    </div>

    <!-- navigation bar -->

    <?php include('../private/views/includes/nav.view.php'); ?>

    <div class="report_container">
        <div class="report">

            <a href='<?= ROOT ?>/reports/issued_books'>
                <div class="outside_box">
                    <h3>Issued Books</h3>
                </div>
            </a>


            <a href='<?= ROOT ?>/reports/returned_books'>
                <div class="outside_box">
                    <h3>Returned Books</h3>
                </div>
            </a>

            <a href='<?= ROOT ?>/reports/withdrawn_books'>
                <div class="outside_box">
                    <h3>Withdrawn Books</h3>
                </div>
            </a>


            <a href='<?= ROOT ?>/reports/damaged_books'>
                <div class="outside_box">
                    <h3>Withdrawn Books (T)</h3>
                </div>
            </a>


            <a href='<?= ROOT ?>/reports/lost_books'>
                <div class="outside_box">
                    <h3>Lost Books</h3>
                </div>
            </a>



            <a href='<?= ROOT ?>/reports/damaged_books'>
                <div class="outside_box">
                    <h3>Damaged Books</h3>
                </div>
            </a>



            <a href='<?= ROOT ?>/reports/fine_report'>
                <div class="outside_box">
                    <h3>Fine Report</h3>
                </div>
            </a>

            <a href='<?= ROOT ?>/reports/fine_report'>
                <div class="outside_box">
                    <h3>Fine Payment</h3>
                </div>
            </a>

            <a href='<?= ROOT ?>/reports/missing'>
                <div class="outside_box">

                    <h3>Photocopies</h3>
                </div>
            </a>


            <a href='<?= ROOT ?>/reports/inventory_report'>
                <div class="outside_box">
                    <h3>Donors/Vendors</h3>
                </div>
            </a>

            <a href='<?= ROOT ?>/reports/missing'>
                <div class="outside_box">
                    <h3>Inventory Missing</h3>
                </div>
            </a>


            <a href='<?= ROOT ?>/reports/inventory_report'>
                <div class="outside_box">
                    <h3>Inventory Report</h3>
                </div>
            </a>



            <button class="backbtn"><a href="<?= ROOT ?>/AdminDashboard">Back</a></button>

        </div>



        <?php include('../private/views/includes/footer.view.php'); ?>