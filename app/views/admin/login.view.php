<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PURR | Login</title>

    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/admin/login.css">

</head>
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