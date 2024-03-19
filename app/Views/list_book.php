<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Books</title>

</head>
<body>
<?= view('templates/header') ?>
<h2>List of Books</h2>
<?php if(isset($books) && $books): ?>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Cover</th>
        </tr>
        <?php foreach($books as $book): ?>
            <tr>
                <td><?= esc($book['title']) ?></td>
                <td><?= esc($book['author']) ?></td>
                <td><a href="<?= site_url('books/viewBook/' . $book['id']) ?>"><img src="<?= base_url('uploads/' . $book['cover_image']) ?>" alt="Cover" style="width:100px;"></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No books found.</p>
<?php endif; ?>
<?= view('templates/footer') ?>
</body>
</html>