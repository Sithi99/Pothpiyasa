<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pothpiyasa</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/header.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/nav.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/viewBookCategory.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/all.min.css">
</head>

<body>
<div class="header">
        <p class="operation">View BookCategories</p>
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

                <select class="category_filter_type" id="category_filter_type" name="category_filter_type">
                        <option value="">--- Filter By  ---</option>
                        <option value="CategoryID">Category ID</option>
                        <option value="Name">Category Name</option>
                        
                </select>

                <input class="category_filter_typo_input" name="category_filter_typo_input" type="text">

                <button id="filter_type_category" name="filter_type_category" class="filter_type_category">Filter</button>
        </form>



<div class="container_view_category">
                <?php if ($rows): ?>

                        
                <table class="category_table">

                        <tr>
                                <th>No</th>
                                <th>Category ID</th>
                                <th>Category Name</th>
                                <th>Added by</th>
                                <th>Operations</th>

                        </tr>
                        <?php 
                        $i=0;
                        foreach ($rows as $row): 

                                ?>
                        <tr>
                                <td width="70"><?= ++$i; ?></td>
                                <td><?= $row->CategoryID ?></td>
                                <td><?= $row->Name ?></td>
                                <!-- Getting staff member name when given id -->
                                <td><?= get_staff_name('StaffID', $row->AddStaffID) ?></td>


                                <td><button type='button' class='editbtn_category' id='editbtn_category'><i
                                                        class='fa-solid fa-pen'></i>&nbsp;<a class="a1"
                                                        href='<?= ROOT ?>/bookcategories/edit/<?= $row->CategoryID ?>'>
                                                        Edit</a></button>
                                        <button type='button' class='deletebtn_category' id='deletebtn_category' disabled><i
                                                        class='fa-solid fa-trash'></i>&nbsp;<a
                                                        href='<?= ROOT ?>/bookcategories/delete/<?= $row->CategoryID ?>'>
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
        <button class="backbtn_category"><a href="<?= ROOT ?>/librariandashboard">Back</a></button>

 </div>


<?php include('../private/views/librarian/includes/footer.view.php'); ?>