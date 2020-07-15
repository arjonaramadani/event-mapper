<html>
<?php include('header.php') ?>
<style>

</style>

<body>
<form method="post" action="Controllers/add-post.php">
  <div class="container">
    <h1>Add new post</h1>
    <hr>

    <label for="email"><b>Title:</b></label> <br>
    <input type="text" placeholder="Enter title" name="title" id="title" required>
    <br> <br>
    <label for="content"><b>Content:</b></label> <br>
    <textarea placeholder="Enter Content" name="content" id="psw" required></textarea>
    <br> <br>
    <select name="category" id="category">
    <option value="sport">Music</option>
    <option value="music">Sport</option>
    </select>
    <hr>
    <button type="submit" class="registerbtn">Post</button>
  </div>
  
</form>
</body>


<?php include('footer.php') ?>

</html>