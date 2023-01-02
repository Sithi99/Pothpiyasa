<?php include('../private/views/user/includes/header.view.php'); ?>


<body>
    <div class="header">
        <p class="operation">Search Book</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?=ROOT?>/logout">Logout</a></p>
    </div>

    <!-- navigation bar -->

    <?php 
      $this->view('user/includes/nav'); 
    ?>

    <!-- body -->

    <div class="bodyContainer01">

<!-- form -->

<div class="bodyContainer02">
    <form method="post" enctype="multipart/form-data">

    <h3 class="opac_name">OPAC (Online Public Access Category)</h4>

    <label for="Title" class="TitleLabel">Title</label>
        <input type="text" name="Title" class="Title" id="Title"  value="<?= get_var('Title') ?>">

        <div class="errorTitle">
        <?php if (isset($errors['Title'])): ?>
                    <p>
                        <?="*" . $errors['Title'] ?>
                    </p>
                    <?php endif; ?>


                    </div>

        <label for="Author" class="AuthorLabel">Author</label>
        <input type="text" name="Author" class="Author" id="Author" value="<?= get_var('Author') ?>">
        <div class="errorAuthor">
        <?php if (isset($errors['Author'])): ?>
                    <p>
                        <?="*" . $errors['Author'] ?>
                    </p>
                    <?php endif; ?>


                    </div>


        <label for="Subject" class="SubjectLabel">Subject</label>
        <input type="text" name="Subject" class="Subject" id="Subject" value="<?= get_var('Subject') ?>">
        <div class="errorSubject">
        <?php if (isset($errors['Subject'])): ?>
                    <p>
                        <?="*" . $errors['Subject'] ?>
                    </p>
                    <?php endif; ?>


                    </div>

        <label for="ISBN" class="ISBN1Label">ISBN</label>
        <input type="number" name="ISBN1" class="ISBN1" id="ISBN1" value="<?= get_var('ISBN1') ?>">
        <div class="errorISBN1">
        <?php if (isset($errors['ISBN1'])): ?>
                    <p>
                        <?="*" . $errors['ISBN1'] ?>
                    </p>
                    <?php endif; ?>


                    </div>


       

        <div class="hrtag"></div>
        
        
        

        <label for="title" class="titleLabel">Title</label>
        <select id="title" class="title" name="title" >
            
            <option <?=get_select('title','')?> value="" >--- Choose Title ---</option>
            <?php 
                    $book = new Book();
                    $data1 = $book->findAll();
                    for ($i=0; $i < count($data1); $i++) { 
                        
                      echo "<option ". get_select('title',$data1[$i]->BookID) . " value='".$data1[$i]->BookID."'" .">".$data1[$i]->Title."</option>"; 

            }
            ?>
                            
        
        </select>
        
        <label for="author" class="authorLabel">Author</label>
        <select id="author" class="author" name="author" >
            
            <option <?=get_select('author',' ')?> value=" " >--- Choose Author ---</option>
                <?php 
                        $author = new Author();
                        $data1 = $author->findAll();
                        for ($i=0; $i < count($data1); $i++) { 
                            
                        echo "<option ". get_select('author',$data1[$i]->AuthorID) . " value='".$data1[$i]->AuthorID."'" .">".$data1[$i]->Name."</option>"; 

                }
                ?>
        
        </select>


        <label for="subject" class="subjectLabel">Subject</label>
        <select id="subject" class="subject" name="subject" >
            
            <option <?=get_select('subject',' ')?> value=" " >--- Choose Subject ---</option>
                <?php 
                        $category = new bookCategory();
                        $data1 = $category->findAll();
                        for ($i=0; $i < count($data1); $i++) { 
                            
                        echo "<option ". get_select('subject',$data1[$i]->CategoryID) . " value='".$data1[$i]->CategoryID."'" .">".$data1[$i]->Name."</option>"; 

                }
                ?>
        
        </select>

        <label for="isbn" class="isbnLabel">ISBN</label>
        <select id="isbn" class="isbn" name="isbn" >
            
            <option <?=get_select('isbn',' ')?> value=" " >--- Choose ISBN ---</option>
                <?php 
                        $book = new Book();
                        $data1 = $book->findAll();
                        for ($i=0; $i < count($data1); $i++) { 
                            
                        echo "<option ". get_select('isbn',$data1[$i]->ISBN) . " value='".$data1[$i]->ISBN."'" .">".$data1[$i]->ISBN."</option>"; 

                }
                ?>
        
        </select>























      
        

        <button class="searchbtn" name="submit" type="submit">Search</button>
       
    </form>
</div>
<button class="backbtn"><a href="<?= ROOT ?>/userdashboard">Back</a></button>


        
</div>

    <?php $this->view('user/includes/footer'); ?>