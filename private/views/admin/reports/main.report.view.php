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
                <a href='<?= ROOT ?>'>
                    <div class="inside_box">
                        <h3>Issued Books</h3>
                    </div>
                </a>
            </div>

            <div class="outside_box">
                <a href='<?= ROOT ?>'>
                    <div class="inside_box">
                        <h3>Returned Books</h3>
                    </div>
                </a>
                </div>

                <div class="outside_box">
                    <a href='<?= ROOT ?>'>
                        <div class="inside_box">
                            <h3>Withdrawn Books</h3>
                        </div>
                    </a>
                </div>


                <div class="outside_box">
                    <a href='<?= ROOT ?>'>
                        <div class="inside_box">
                            <h3>Lost Books</h3>
                        </div>
                    </a>
                </div>



                <div class="outside_box">
                    <a href='<?= ROOT ?>'>
                        <div class="inside_box">
                            <h3>Damaged Books</h3>
                        </div>
                    </a>
                </div>



                <div class="outside_box">
                    <a href='<?= ROOT ?>'>
                        <div class="inside_box">
                            <h3>Fine Report</h3>
                        </div>
                    </a>
                </div>


                <div class="outside_box">
                    <a href='<?= ROOT ?>'>
                        <div class="inside_box">
                            <h3>Inventory Missing</h3>
                        </div>
                    </a>
                </div>
                

                <div class="outside_box">
                    <a href='<?= ROOT ?>'>
                        <div class="inside_box">
                            <h3>Inventory Report</h3>
                        </div>
                    </a>
                </div>


                <button class="backbtn"><a href="<?= ROOT ?>">Back</a></button>

            </div>



            <?php include('../private/views/includes/footer.view.php'); ?>