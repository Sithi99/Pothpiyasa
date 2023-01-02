<?php include('../private/views/includes/header.view.php'); ?>

<body>
        <div class="header">
                <p class="operation">Fine Report</p>
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


        <form method="POST">

                <select class="issue_user_filter_typo" id="user_filter_typo" class="user_filter_typo" name="issue_user_filter_typo">
                        <option value="">--- Filter By  ---</option>
                        <option value="BookID">--- Filter By Book ID ---</option>
                        <option value="UserID">--- Filter By Member ID ---</option>
                        <option value="StaffID">--- Filter By Staff ID ---</option>
                </select>

                <input class="issue_user_filter_typo_input" name="issue_user_filter_typo_input" type="text">

                <button id="issue_filter_typo_search" name="issue_filter_typo_search" class="issue_filter_search_btn2">Filter</button>

                <button id="issue_download" name="issue_download" class="issue_download_btn">Download</button>

        </form>

        <div class="issue_container_view">


                <?php if ($rows): ?>
                <table class="user_table">
                        <tr>
                                <th>Book ID</th>
                                <th>Book Title</th>
                                <th>Member ID</th>
                                <th>Member Name</th>
                                <th>Staff ID</th>
                                <th>Staff Name</th>
                                <th>Fine Amount</th>

                        </tr>
                        <?php foreach ($rows as $row): ?>
                        <tr>
                                <td>
                                        <?= $row->BookID ?>
                                </td>
                                <td>
                                        <?= get_bookname('BookID', $row->BookID) ?>        
                                </td>
                                <td>
                                        <?= $row->UserID ?>
                                </td>
                                <td>
                                         <?= get_user_name('UserID', $row->UserID) ?>              
                                </td>
                                <td>
                                        <?= $row->StaffID ?>
                                </td>
                                <td>
                                        <?= get_staff_name('StaffID', $row->StaffID) ?>
                                </td>
                                <td>
                                        <?= $row->FineAmount ?>
                                </td>
                        </tr>

                        <?php endforeach; ?>
                </table>

                <?php else: ?>
                <div class="result_notfound_container">
                        <img src="<?= ROOT ?>/img/notfound.png" class="notfound_png">
                        <br>
                        <h4 class="No_result">No results found</h4>
                        <br>
                        <h5 class="No_result_para">We couldn't find what you search for. <br>Try searching again!</h5>
                </div>
                <?php endif; ?>

                <button class="report_backbtn"><a href="<?= ROOT ?>/reports">Back</a></button>

        </div>




        <?php include('../private/views/includes/footer.view.php'); ?>