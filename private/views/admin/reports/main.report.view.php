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


            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/issued_books'>
                    <h3>Issued Books</h3>
                </a>
            </div>

            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/returned_books'>
                    <h3>Returned Books</h3>
                </a>
            </div>

            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/withdrawn_books'>
                    <h3>Withdrawn Books</h3>
                </a>
            </div>


            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/damaged_books'>
                    <h3>Withdrawn Books(T)</h3>
                </a>
            </div>


            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/lost_books'>
                    <h3>Lost Books</h3>
                </a>
            </div>



            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/damaged_books'>
                    <h3>Damaged Books</h3>
                </a>
            </div>



            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/fine_report'>
                    <h3>Fine Report</h3>
                </a>
            </div>

            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/fine_report'>
                    <h3>Fine Payment</h3>
                </a>
            </div>

            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/missing'>
                    <h3>Photocopies</h3>
                </a>
            </div>


            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/inventory_report'>
                    <h3>Donors/Vendors</h3>
                </a>
            </div>

            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/missing'>
                    <h3>Inventory Missing</h3>
                </a>
            </div>


            <div class="outside_box">
                <a href='<?= ROOT ?>/reports/inventory_report'>
                    <h3>Inventory Report</h3>
                </a>
            </div>


            <button class="backbtn"><a href="<?= ROOT ?>">Back</a></button>

        </div>



        <?php include('../private/views/includes/footer.view.php'); ?>