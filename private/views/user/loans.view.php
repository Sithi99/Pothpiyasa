<?php include('../private/views/user/includes/header.view.php'); ?>

<body>
<div class="header">
        <p class="operation">Loans</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?=ROOT?>/logout">Logout</a></p>
</div>

<!-- navigation bar -->

<?php 
   include('../private/views/user/includes/nav.view.php');
 ?>

<!-- body -->

<div class="container_view_loans">
                <?php if ($rows): ?>

                        
                <table class="loans_table">

                        <tr>
                                <th width="100">No</th>
                                <th width="100">Book ID</th>
                                <th width="300">Book Name</th>
                                <th width="100">Borrowed Date</th>
                                <th width="100">Return Date</th>
                                <th width="100">Fine (Rs.)</th>

                        </tr>
                        <?php 
                        $i=0;
                        foreach ($rows as $row): 

                                ?>
                        <tr>
                                <td><?= ++$i; ?></td>
                                <td><?= $row->BookID ?></td>
                                <td><?= get_bookname('BookID', $row->BookID ) ?></td>
                                <td><?= $row->IssuedDate ?></td>
                                <td><?= $row->DueDate ?></td>
                                <td><?= get_fine('UserID',$row->UserID , $row->BookID )  ?></td>


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
        <button class="backbtnloans"><a href="<?= ROOT ?>/userdashboard">Back</a></button>

 </div>


<?php include('../private/views/user/includes/footer.view.php'); ?>