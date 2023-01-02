<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pothpiyasa</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/includes/header.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/popupAuthor.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/nav.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/addAuthor.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/all.min.css">
</head>

<body>
    <div class="header">
        <p class="operation">Delete Preview</p>
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
    

   <?php if ($row):?>

   
    <form method="post" enctype="multipart/form-data">

        <label for="fullname" class="fnameLabel">Full Name</label>
        <input type="text" name="Name" class="fname" id="fname"  value="<?= get_var('Name',$row[0]->Name) ?>" disabled>
        

        <div class="errorName">
                    <?php if (isset($errors['Name'])): ?>
                    <p>
                        <?="*" . $errors['Name'] ?>
                    </p>
                    <?php endif; ?>
    

        <label for="sex" class="sexLabel">Sex</label>
        <select id="sex" class="sex" name="Sex" disabled >
            <!-- <option value="" disabled selected>  --- Choose Type ---</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option> -->

            <option <?=get_select('Sex','', $row[0]->Sex ?? "")?> value="" disabled selected >--- Choose Type ---</option>
                            <option <?=get_select('Sex','Male',$row[0]->Sex ?? "")?> value="Male">Male</option>
                            <option <?=get_select('Sex','Female',$row[0]->Sex ?? "")?> value="Female">Female</option>
                            <option <?=get_select('Sex','Other',$row[0]->Sex ?? "")?> value="Other">Other</option>
        
        </select>

        <label for="email" class="emailLabel">Email</label>
        <input type="email" name="Email" class="email" id="email" disabled value="<?= get_var('Email',$row[0]->Email) ?>">
        <?php 
           
        ?>

         <div class="errorEmail">
                    <?php if (isset($errors['Email'])): ?>
                    <p>
                        <?="*" . $errors['Email'] ?>
                    </p>
                    <?php endif; ?>


        

        <!-- <label for="authorImage" class="authorImageLabel">Upload Image</label> 
        <input type="file" id="imagefile" name="imagefile" class="imagefile" value=" "> -->

        <div class="errorImage">
                    <?php if (isset($errors['imagefile'])): ?>
                    <p>
                        <?="*" . $errors['imagefile'] ?>
                    </p>
                    <?php endif; ?>
        
        
        
        <div class="container4" id="imagecontainer">
            <img src="<?=ROOT?>/uploads/<?=$row[0]->ImgUrl?>" id="imagepreview" class="imagepreview">

        <button class="deleteauthorbtn" name="submit" type="submit"><a href="<?=ROOT?>/authors/delete/<?= $row[0]->AuthorID?>" >Delete</a></button>
        </div>
    </form>

    <?php else:?>
                <div style="text-align: center; position: absolute; top: 30%; left: 38%;">
                    <!-- Here, need to include popup -->
                    <h2>That user was not found!</h2>

                </div>
    <?php endif;?>


</div>
<button class="backbtn1"><a href="<?= ROOT ?>/authors">Back</a></button>


        
</div>

<?php 
        include('../private/views/includes/popup.delete2.view.php');?> 
        
    

    <?php $this->view('librarian/includes/footer'); ?>


 