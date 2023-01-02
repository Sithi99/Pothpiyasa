<?php include('../private/views/librarian/includes/header.view.php'); ?>

<body>
<div class="header">
        <p class="operation">View Racks</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?=ROOT?>/logout">Logout</a></p>
</div>

<!-- navigation bar -->

<?php 
   include('../private/views/librarian/includes/nav.view.php');
 ?>

<!-- body -->

<form method="POST">

                <select class="rack_filter_type" id="rack_filter_type" name="rack_filter_type">
                        <option value="">--- Filter By  ---</option>
                        <option value="RackID">Rack ID</option>
                        <option value="CategoryID">Category ID</option>
                        <option value="Name">Category Name</option>
                        
                </select>

                <input class="rack_filter_typo_input" name="rack_filter_typo_input" type="text">

                <button id="filter_type_rack" name="filter_type_rack" class="filter_type_rack">Filter</button>
        </form>



<div class="container_view_rack">
                <?php if ($rows): ?>

                        
                <table class="rack_table">

                        <tr>
                                <th>No</th>
                                <th>Rack</th>
                                <th>No of Books</th>
                                <th>Book Category</th>
                                <th>Added by</th>
                                <th>Operations</th>

                        </tr>
                        <?php 
                        $i=0;
                        foreach ($rows as $row): 

                                ?>
                        <tr>
                                <td><?= ++$i; ?></td>
                                <td><?= $row->RackID ?></td>
                                <td><?= $row->NoOfBooks ?></td>
                                <td><?= get_BookCategory('CategoryID', $row->CategoryID) ?></td>
                                <!-- Getting staff member name when given id -->
                                <td><?= get_staff_name('StaffID', $row->AddStaffID) ?></td>


                                <td><button type='button' class='editbtn_rack' id='editbtn_rack'><i
                                                        class='fa-solid fa-pen'></i>&nbsp;<a class="a1"
                                                        href='<?= ROOT ?>/racks/edit/<?= $row->RackID ?>/<?= $row->CategoryID ?>'>
                                                        Edit</a></button>
                                        <button type='button' class='deletebtn_rack' id='deletebtn_rack' disabled><i
                                                        class='fa-solid fa-trash'></i>&nbsp;<a
                                                        href='<?= ROOT ?>/racks/delete/<?= $row->AuthorID ?>'>
                                                        Delete</a></button>
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
        <button class="backbtn_rack"><a href="<?= ROOT ?>/librariandashboard">Back</a></button>

 </div>


<?php include('../private/views/librarian/includes/footer.view.php'); ?>