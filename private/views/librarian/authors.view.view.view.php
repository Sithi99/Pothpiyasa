<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pothpiyasa</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/includes/header.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/nav.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/viewAuthor.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/all.min.css">
</head>
<body>
<div class="header">
        <p class="operation">View Author</p>
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

<div class="bodyContainer01">
 

        <?php if($row):?>

        <img src="<?= ROOT ?>/uploads/<?=$row[0]->ImgUrl?>" alt="" srcset="" class="imageProfile" id="imageProfile">
        <!-- <img src="image/profile.jpg" alt="" class="imageProfile"> -->
        <div class="moreInfo"><label for="moreInfomation" class="more">More Info</label></div>

       
        



        <label for="id" class="id">Author ID</label>
        <label for="idView" class="idView"><?=$row[0]->AuthorID?></label>
        <label for="name" class="name">Name</label>
        <label for="nameView" class="nameView"><?=$row[0]->Name?></label>
        <label for="sex" class="sex">Sex</label>
        <label for="sexView" class="sexView"><?=$row[0]->Sex?></label>
        <label for="email" class="email">Email</label>
        <label for="emailView" class="emailView"><?=$row[0]->Email?></label>
        <label for="id" class="staffId">Added By</label>
        <label for="staffidView" class="staffidView"><?=get_staff_name('StaffID', $row[0]->AddStaffID)?></label>
        <!-- <label for="date" class="date">Added Date</label>
        <label for="dateView" class="dateView"></label>
        -->

            <div class="books"><label for="books" class="booksTitle">Books of Written</label></div>
            <?php
            
              $rows = viewbooksforauthor($row[0]->AuthorID);
              
            
            ?>

            <div class="container2">

                     <?php if ($rows): ?>

                        <table class="author_table">

                        <?php 
                       
                        foreach ($rows as $row): 

                                ?>
                    
                                <td>
                                    <img src="<?= ROOT ?>/uploads/<?=$row->Image?>" class="book_image"> <br>
                                    <lable class="book_title"><?= $row->Title?></lable>                                
                                 </td>
                                
                                


                                

                     

                        <?php endforeach; ?>
                </table>
                                
                    <?php else: ?>
                            <h4 class="nofound">No Books were found at this time</h4>
                    <?php endif; ?>
                
                <?php endif;?>


            </div>
            

        </div>
        

        <button class="backbtn_view"><a href="<?= ROOT ?>/authors">Back</a></button>
       
       
                
    </div>
    





<?php include('../private/views/librarian/includes/footer.view.php'); ?>