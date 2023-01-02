<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pothpiyasa</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/header.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/nav.css">
    <link rel="stylesheet" href="<?=ROOT?>/css/librarian/viewAuthorTable.css">
<link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/popupAuthor.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/all.min.css">
</head>
<body>
<div class="header">
        <p class="operation">View Authors</p>   

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

                <select id="author_filter_type" class="author_filter_type" name="author_filter_type">
                        <option value="">--- Filter By  ---</option>
                        <option value="AuthorID">Author ID</option>
                        <option value="Name">Author Name</option>
                        
                </select>

                <input class="author_filter_typo_input" name="author_filter_typo_input" type="text">

                <button id="filter_type_author" name="filter_type_author" class="filter_type_author">Filter</button>
        </form>




<div class="container_view_author">
                <?php if ($rows): ?>

                        
                <table class="author_table">

                        <tr>
                                <th width="70">No</th>
                                <th >Author Name</th>
                                <th width="120">Sex</th>
                                <th>Email</th>
                                <th>Added by</th>
                                <th>Operations</th>

                        </tr>
                        <?php 
                        $i=0;
                        foreach ($rows as $row): 

                                ?>
                        <tr>
                                <td><?= ++$i; ?></td>
                                <td ><a href='<?= ROOT ?>/authors/viewOne/<?= $row->AuthorID ?>' class="aname"><?= $row->Name ?></a></td>
                                <td><?= $row->Sex ?></td>
                                <td><?= $row->Email ?></td>
                                <!-- Getting staff member name when given id -->
                                <td><?= get_staff_name('StaffID', $row->AddStaffID) ?></td>


                                <td><button type='button' class='editbtn' id='editbtn'><i
                                                        class='fa-solid fa-pen'></i>&nbsp;<a class="a1"
                                                        href='<?= ROOT ?>/authors/edit/<?= $row->AuthorID ?>'>
                                                        Edit</a></button>
                                        <button type='button' class='deletebtn' id='deletebtn' onclick='openDeletePopup(<?= $row->AuthorID ?>)'><i
                                                        class='fa-solid fa-trash'></i>&nbsp;
                                                        Delete</button>
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
                <?php include('../private/views/includes/popup.deleteAuthor.view.php'); ?>

        </div>
        <button class="backbtn"><a href="<?= ROOT ?>/librariandashboard">Back</a></button>

 </div>


<?php include('../private/views/librarian/includes/footer.view.php'); ?>