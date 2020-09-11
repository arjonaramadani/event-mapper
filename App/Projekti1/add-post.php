<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="../css/pure-min.css">
    <link rel="stylesheet" href="../css/pure-responsive-min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
        include(dirname(__FILE__)."\Controllers\Connection.php");

        print_r($_POST);
        // echo $_POST;
        echo "agsdgsadf";
        if (isset($_POST['title'])) {
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $content = mysqli_real_escape_string($conn, $_POST['content']);
            $sql = "INSERT INTO posts(title,content) VALUES ('$title','$content')";

            echo $sql;
            // mysqli_query($conn, $sql);
            
            // header('/posts.php');
        }

 ?>
    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-3-24">
            <div id="menu">
                <div class="pure-menu">
                    <p class="pure-menu-heading">
                        EVENT MAPPER
                        <a href="login.html" class="pure-button button-xxsmall">OUT &raquo;</a>
                    </p>
                    <ul class="pure-menu-list">
                        <li class="pure-menu">
                            <a href="dashboard.php" class="pure-menu-link">Dashboard</a>
                        </li>
                        <li class="pure-menu">
                            <a href="contacts.php" class="pure-menu-link">Contacts</a>
                        </li>
                        <li class="pure-menu">
                            <a href="about-us-dashboard.php" class="pure-menu-link">About Us</a>
                        </li>
                        <li class="pure-menu">
                            <a href="users.php" class="pure-menu-link">Users</a>
                        </li>
                        <li class="pure-menu">
                            <a href="posts.php" class="pure-menu-link">Posts</a>
                        </li>
                        <li class="pure-menu-selected">
                            <a href="add-post.php" class="pure-menu-link">Add Post</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <h1 class="subhead">New Post</h1>
                </div>


                <div class="pure-u-1 pure-u-md-2-3">
                        <div class="column-block">

                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="pure-form pure-form-stacked">
                        <fieldset>

                            <label for="title">Title <?php print_r($_POST) ?></label>
                            <input id="title" type="text" placeholder="Title" class="pure-input-1" >

                            <label for="content">Content</label>
                            <textarea id="content" class="pure-input-1" rows="10"></textarea>

                            <input type="hidden" name="id" value="1">
                            <button type="submit" class="pure-button button-success">Save</button>
                        </fieldset>
                    </form>

                        
                        </div>
                    </div>
            </div>
        </div>


    </div>
</body>
</html>
