<?php

$pageTitle = 'PURR | Admin';

require_once realpath(VIEW_PATH . 'partials/head.view.php');
require_once realpath(VIEW_PATH . 'partials/admin/header.view.php');
?>
<div class="wrapper">
    <main>
        <?php require_once realpath(VIEW_PATH . 'partials/admin/nav.view.php') ?>
    
        <div class="manager">
            <?php
    
            switch($_SERVER['REQUEST_URI']) {
                case '/admin/university':
                    render(realpath(VIEW_PATH . 'partials/admin/university.view.php'));
                    break;
    
                case '/admin/rr':
                    render(realpath(VIEW_PATH . 'partials/admin/ratingandreview.view.php'));
                    break;
    
                case '/admin/public-type':
                    render(realpath(VIEW_PATH . 'partials/admin/publictype.view.php'));
                    break;
    
                case '/admin/users':
                    render(realpath(VIEW_PATH . 'partials/admin/users.view.php'));
                    break;
    
                case '/admin/user-accounts':
                    render(realpath(VIEW_PATH . 'partials/admin/useraccounts.view.php'));
                    break;
    
                default:
                    render(realpath(VIEW_PATH . 'partials/admin/dashboard.view.php'));
                    break;
            }
            ?>
        </div>

        <script src="/assets/js/admin/main.js"></script>

    </main>
</div>
<?php require_once realpath(VIEW_PATH . 'partials/footer.view.php') ?>