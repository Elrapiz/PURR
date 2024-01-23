<div class="nav">
    <div class="wrapper">
        <nav class="nav__wrapper">
            <ul class="nav__list">
                <li class="<?php if($_SERVER['REQUEST_URI'] === '/admin') echo 'current' ?> nav__item"><a href="/admin">Dashboard</a></li>
                <li class="nav__item"><a href="/admin/university">University</a></li>
                <li class="nav__item"><a href="/admin/rr">Ratings and review</a></li>
                <li class="nav__item"><a href="/admin/public-type">Public type</a></li>
                <li class="nav__item"><a href="/admin/users">Users</a></li>
                <li class="nav__item"><a href="/admin/user-accounts">Users account</a></li>
            </ul>
        </nav>
    </div>
</div>