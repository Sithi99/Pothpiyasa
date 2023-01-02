<<<<<<< Updated upstream
<div class="container_onlineUsers">
    <div class="onlineUsers">
        <h1>Online Users</h1>

        <?php if (isset($errors) && (!empty($errors))): ?>
        <p class="error">
            <?="*" . $errors['UserName'] ?>
        </p>
        <?php endif; ?>
    </div>

=======
<div class="container_onlineUsers">
    <div class="onlineUsers">
        <h1>Online Users</h1>
        <img src="<?= ROOT ?>/img/onlineUsers.png">
    </div>

>>>>>>> Stashed changes
</div>