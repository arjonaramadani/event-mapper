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
                        <li class="pure-menu-selected">
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
                    <h1 class="subhead">Dashboard</h1>
                </div>

                <div class="pure-g">

                    <div class="pure-u-1 pure-u-md-1-3">
                        <div class="column-block">
                            <div class="column-block-header column-success">
                                <h2>Accounts</h2>
                                <span class="column-block-info">1000 <span>this month</span></span>
                            </div>
                            <ul class="column-block-list">
                                <li>Today <span class="buble-success button-small pull-right">100</span></li>
                                <li>Yesterday <span class="buble-secondary button-small pull-right">1000</span></li>
                                <li>Total <span class="buble-warning button-small pull-right">10000</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <div class="column-block">
                            <div class="column-block-header column-warning">
                                <h2>Posts</h2>
                                <span class="column-block-info">1000 <span>this month</span></span>
                            </div>
                            <ul class="column-block-list">
                                <li>Today <span class="buble-success button-small pull-right">100</span></li>
                                <li>Yesterday <span class="buble-secondary button-small pull-right">1000</span></li>
                                <li>Total <span class="buble-warning button-small pull-right">10000</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <div class="column-block">
                            <div class="column-block-header">
                                <h2>Options</h2>
                                <span class="column-block-info">1000 <span>this month</span></span>
                            </div>
                            <ul class="column-block-list">
                                <li>Today <span class="buble-success button-small pull-right">100</span></li>
                                <li>Yesterday <span class="buble-secondary button-small pull-right">1000</span></li>
                                <li>Total <span class="buble-warning button-small pull-right">10000</span></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-3">
                        <div class="column-block">
                            <table class="pure-table pure-table-horizontal">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Post Title 1</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Post Title 2</td>
                                    <td>Draft</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pure-u-1 pure-u-md-2-3">
                        <div class="column-block">
                            <table class="pure-table pure-table-horizontal">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Full Name 1</td>
                                    <td>nickname1@domain.local</td>
                                    <td>User</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Full Name 2</td>
                                    <td>nickname2@domain.local</td>
                                    <td>Moderator</td>
                                    <td>Awaiting</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
