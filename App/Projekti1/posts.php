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
                        <li class="pure-menu-selected">
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
                <h1 class="subhead">Posts <a class="pure-button button-small button-secondary" href="add-post.php">Add New</a></h1>

                </div>


                <div class="pure-u-1 pure-u-md-2-3">
                        <div class="column-block">
                            <table class="pure-table pure-table-horizontal">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                    include(dirname(__FILE__)."\Controllers\Connection.php");
                                    $query = "SELECT * FROM posts";
                                    $result = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                            <td><?php echo $row['id'] ?> </td>
                                            <td><?php echo $row['title'] ?> </td>
                                            <td><?php echo $row['content'] ?> </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                ?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>


    </div>
</body>
</html>
