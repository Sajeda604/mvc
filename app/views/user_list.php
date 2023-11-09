<!-- app/views/user_list.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <?php var_dump($users) ?>
    <ul>
    
        <?php foreach ($users as $user){ ?>
            <li><?= $user['username']; ?></li>
        <?php } ?>
    </ul>

    <h2>Add User</h2>
    <form method="post" action="index.php?action=addUser">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit">Add User</button>
    </form>
</body>
</html>
