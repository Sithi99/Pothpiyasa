<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pothpiyasa</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/includes/header.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/nav.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/addCategory.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/popup.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/all.min.css">
</head>

<body>
    <div class="header">
        <p class="operation">Edit Rack</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?=ROOT?>/logout">Logout</a></p>
    </div>

    <!-- navigation bar -->

    <?php 
       $this->view('librarian/includes/nav'); 
    ?>

    <!-- body -->

    <div class="bodyContainer01">

<!-- form -->

<div class="bodyContainer02">
   
      <?php if($row):?>

   

    <form method="post" enctype="multipart/form-data">


        <label for="BookCategoryName" class="BookCategoryNameLabel">Category Name</label>
        <input type="text" name="Name" class="BookCategoryName" id="BookCategoryName"  value="<?= get_var('Name',$row[0]->Name) ?>" required>

        <div class="errorbookCategoryName">
        <?php if (isset($errors['bookCategoryName'])): ?>
                    <p>
                        <?="*" . $errors['bookCategoryName'] ?>
                    </p>
                    <?php endif; ?>


                    </div>
         

        <button class="addrackbtn" name="submit" type="submit">Update</button>
       
    </form>

    <?php else:?>
                <div style="text-align: center; position: absolute; top: 30%; left: 38%;">
                    <!-- Here, need to include popup -->
                    <h2>That user was not found!</h2>

                </div>
    <?php endif;?>


    
</div>
<button class="backbtn"><a href="<?= ROOT ?>/bookcategories">Back</a></button>


        
</div>

<?php 
        include('../private/views/includes/popup.edit.view.php');?> 
        
    

    <?php $this->view('librarian/includes/footer'); ?>


    
<!-- set the popup msg -->
<?php if($flag[0]==1){
    echo '<script type="text/javascript">openPopup("http://localhost/Pothpiyasa/public/bookcategories");</script>';
}?>