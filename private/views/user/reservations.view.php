<?php include('../private/views/user/includes/header.view.php'); ?>

<body>
<div class="header">
        <p class="operation">Reservations</p>
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

<div class="container_view_reservations">
                <?php if ($rows): ?>

                        
                <table class="reservations_table">

                        <tr>
                                <th width="100">No</th>
                                <th width="100">Book ID</th>
                                <th width="300">Book Name</th>
                                <th width="100">Reserved Date</th>
                                <th width="200">Operations</th>

                        </tr>
                        <?php 
                        $i=0;
                        foreach ($rows as $row): 

                                ?>
                        <tr>
                                <td><?= ++$i; ?></td>
                                <td><?= $row->BookID ?></td>
                                <td><?= get_bookname('BookID', $row->BookID ) ?></td>
                                <td><?= $row->ReservedDate ?></td>


                                <td><button type='button' class='remove_reservations' id='remove_reservations'><i
                                                        class='fa-solid fa-trash'></i>&nbsp;<a 
                                                        href='<?= ROOT ?>/authors/edit/<?= $row->UserID ?>/<?= $row->BookID ?>'>
                                                        Remove</a></button>
                                        
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
        <button class="backbtnreservation"><a href="<?= ROOT ?>/userdashboard">Back</a></button>

 </div>


<?php include('../private/views/user/includes/footer.view.php'); ?>