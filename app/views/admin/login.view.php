<?php

$pageTitle = 'PURR | Login';
require_once realpath(VIEW_PATH . 'partials/head.view.php');

?>
<body>
    
    <form class="form" action="/admin/login" method="post">
        <h1 class="form__title">PURR Administrator</h1>
        <div class="form__field">

            <?php if(isset($data['errorMsg'])) : ?>
                <p class="form__response-msg"><?php echo $data['errorMsg'] ?></p>
            <?php endif; ?>

            <input class="form__username" type="text" name="username" placeholder="Username" required>
            <input class="form__password" type="password" name="password" placeholder="Password" required>
            <button class="form__login">Log in</button>
        </div>
    </form>

</body>
</html>