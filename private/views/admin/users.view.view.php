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
                <?php if ($rows): ?>
                <table class="user_table">
                        <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
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
                                <td><?= $row->FirstName ?></td>
                                <td><?= $row->MidName ?></td>
                                <td><?= $row->LastName ?></td>
                                <td><?= $row->Sex ?></td>
                                <td><?= $row->Birthday ?></td>
                                <td><?= $row->Address ?></td>
                                <td><?= $row->Email ?></td>
                                <td><?= $row->MemberType ?></td>
                                <!-- Getting user name when gives id, this should -->
                                <td><?= get_user_name('UserID', $row->AddStaffID) ?></td>

                                <td><button type='button' class='editbtn' id='editbtn'><i
                                                        class='fa-solid fa-pen'></i>&nbsp;<a
                                                        href='<?= ROOT ?>/users/edit/<?= $row->UserID ?>'>
                                                        Edit</a></button>
                                        <button type='button' class='deletebtn' id='deletebtn' disabled><i
                                                        class='fa-solid fa-trash'></i>&nbsp;<a
                                                        href='<?= ROOT ?>/users/delete/<?= $row->UserID ?>'>
                                                        Delete</a></button>
                                </td>

                        </tr>

                        <?php endforeach; ?>
                </table>

                <?php else: ?>
                <h4>No users were found at this time</h4>
                <?php endif; ?>
        </div>




        <?php include('../private/views/includes/footer.view.php'); ?>