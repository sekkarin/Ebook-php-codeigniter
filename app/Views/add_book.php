<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
</head>
<body>
<?= view('templates/header') ?>
<h2>Add a New Book</h2>
<form action="<?= site_url('books/add') ?>" method="post" enctype="multipart/form-data">
    Title: <input type="text" name="title" required><br>
    Category: <select name="category" required>
        <option value="Computer">Computer</option>
        <!-- Add more options here -->
    </select><br>
    ISBN: <input type="text" name="isbn" required><br>
    Author: <input type="text" name="author" required><br>
    Cover Image: <input type="file" name="cover_image" required><br>
    Book File (PDF): <input type="file" name="book_file" required><br>
    <input type="submit" value="Add Book">
    <?= view('templates/footer') ?>
</form>
</body>
</html>