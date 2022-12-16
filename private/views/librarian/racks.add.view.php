<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Author</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/includes/header.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/nav.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/addRack.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/all.min.css">
</head>

<body>
    <div class="header">
        <p class="operation">Add Rack</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="#">Logout</a></p>
    </div>

    <!-- navigation bar -->

    <?php 
       $this->view('librarian/includes/nav'); 
    ?>

    <!-- body -->

    <div class="bodyContainer01">

<!-- form -->

<div class="bodyContainer02">
    <form method="post" enctype="multipart/form-data">
        
    

        <label for="bookCategory" class="bookcategoryLabel">Book Category</label>
        <select id="bookcategory" class="bookcategory" name="bookcategory" required >
            <!-- <option value="" disabled selected>  --- Choose Type ---</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option> -->

            <option <?=get_select('bookCategory','')?> value="" disabled selected >--- Choose Type ---</option>
                            <option <?=get_select('bookCategory','Male')?> value="Male">Male</option>
                            <option <?=get_select('bookCategory','Female')?> value="Female">Female</option>
                            <option <?=get_select('bookCategory','Other')?> value="Other">Other</option>
        
        </select>

        <label for="noOfBooks" class="noOfBooksLabel">No of Books</label>
        <input type="number" name="noOfBooks" class="noOfBooks" id="noOfBooks" required value="<?= get_var('Email') ?>">

        <div class="errorNoofBooks">
                    <?php if (isset($errors['Email'])): ?>
                    <p>
                        <?="*" . $errors['Email'] ?>
                    </p>
                    <?php endif; ?>
                    </div>
        

       

      
        
        

        <button class="addrackbtn" name="submit" type="submit">Add Rack</button>
       
    </form>
</div>
<button class="backbtn"><a href="<?= ROOT ?>/librarian">Back</a></button>


        
</div>

    <?php $this->view('librarian/includes/footer'); ?>