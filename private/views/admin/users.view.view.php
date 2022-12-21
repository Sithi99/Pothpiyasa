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

        <form method="POST">

                <select class="user_filter" id="user_filter" class="user_filter" name="user_filter">
                        <option value="">--- Filter By Position ---</option>
                        <option value="Library-Staff Members">Library-Staff Members</option>
                        <option value="Lecturers">Lecturers</option>
                        <option value="Students">Students</option>
                        <option value="Non-Academic Members">Non-Academic Members</option>
                </select>

                <button id="filter_search" name="filter_search" class="filter_search_btn1">Filter</button>
        </form>

        <form method="POST">

                <select class="user_filter_typo" id="user_filter_typo" class="user_filter_typo" name="user_filter_typo">
                        <option value="">--- Filter By  ---</option>
                        <option value="FirstName">--- Filter By First Name ---</option>
                        <option value="LastName">--- Filter By Last Name ---</option>
                        <option value="Sex">--- Filter By Sex ---</option>
                        <option value="Email">--- Filter By Email ---</option>
                </select>

                <input class="user_filter_typo_input" name="user_filter_typo_input" type="text">

                <button id="filter_typo_search" name="filter_typo_search" class="filter_search_btn2">Filter</button>
        </form>

        <div class="container_view">


                <?php if ($rows): ?>
                <table class="user_table">
                        <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone No</th>
                                <th>Sex</th>
                                <th>Birthday</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Member Type</th>
                                <th>Added by</th>
                                <th>Operations</th>

                        </tr>
                        <?php foreach ($rows as $row): ?>
                        <tr>
                                <td>
                                        <?= $row->FirstName ?>
                                </td>
                                <td>
                                        <?= $row->LastName ?>
                                </td>
                                <td>
                                        <?= $row->PhoneNo ?>
                                </td>
                                <td>
                                        <?= $row->Sex ?>
                                </td>
                                <td>
                                        <?= $row->Birthday ?>
                                </td>
                                <td>
                                        <?= $row->Address ?>
                                </td>
                                <td>
                                        <?= $row->Email ?>
                                </td>
                                <td>
                                        <?= $row->MemberType ?>
                                </td>
                                <!-- Getting user name when gives id, this should -->
                                <td>
                                        <?= get_user_name('UserID', $row->AddStaffID) ?>
                                </td>

                                <td><button type='button' class='editbtn' id='editbtn'><i
                                                        class='fa-solid fa-pen'></i>&nbsp;<a
                                                        href='<?= ROOT ?>/users/edit/<?= $row->UserID ?>'>
                                                        Edit</a></button>

                                        <button type='button' class='deletebtn' id='deletebtn' onclick='openDeletePopup(<?= $row->UserID ?>)'><i
                                                        class='fa-solid fa-trash'></i>&nbsp;&nbsp;Delete</button>
                                                        
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
        </div>

        <?php include('../private/views/includes/popup.delete1.view.php'); ?>
        

        <?php include('../private/views/includes/footer.view.php'); ?>