<!doctype html>
<html lang="en">
<?php
        include(dirname(__FILE__)."\Controllers\Connection.php");

        if (isset($_POST['about-us'])) {
            $text = mysqli_real_escape_string($conn, $_POST['about-us']);
            $now = time();
            $sql = "UPDATE pages SET content = '$text',updated_at = '$now' WHERE page_name = 'about_us'";            
            mysqli_query($conn, $sql);
            echo "Updated successfully!";
        }


        $content = "";
        $query = "SELECT content FROM pages WHERE page_name = 'about_us'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $content = $row['content'];

            }
        } else {
            echo "0 results";
        }
 ?>
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="../css/pure-min.css">
    <link rel="stylesheet" href="../css/pure-responsive-min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
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
                        <li class="pure-menu-selected">
                            <a href="about-us-dashboard.php" class="pure-menu-link">About Us</a>
                        </li>
                        <li class="pure-menu">
                            <a href="users.php" class="pure-menu-link">Users</a>
                        </li>
                        <li class="pure-menu">
                            <a href="posts.php" class="pure-menu-link">Posts</a>
                        </li>
                        <li class="pure-menu">
                            <a href="add-post.php" class="pure-menu-link">Add Post</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content pure-u-1 pure-u-md-21-24">
            <div class="header-small">

                <div class="items">
                    <h1 class="subhead">About Us</h1>
                </div>


                <div class="pure-u-1 pure-u-md-2-3">
                        <div class="column-block">
                        
                        



                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  class="pure-form pure-form-stacked">
                        <label for="content">Content</label>
                            <textarea id="content" class="pure-input-1" rows="10">
                            <?php echo $content ?>
                            </textarea>
                            <br><br>
                            <button type="submit" class="pure-button button-success">Update</button>
                            </form>


                        </div>
                    </div>
            </div>
        </div>


    </div>
</body>
</html>
