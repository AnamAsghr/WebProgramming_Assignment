<?php
if (isset($_SESSION['_user'])) {
    $user = $_SESSION['_user'];
    $login_menu_item = "Hello " . $user["user_full_name"] . ' (<a href="logout.php">Logout</a>)';
}

?>

<header>
    <nav>
        <ul style="column-count: 3; list-style: none">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="addpost.php">Add Post</a></li>
            <li><a href="viewposts.php">View Post</a></li>

            
           
            <?php if(isset($login_menu_item)):?>
                <li><?=$login_menu_item?></li>
            <?php endif;?>
        </ul>
    </nav>
</header>
