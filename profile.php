
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>

    <?php if (!empty($user)): ?>
        <p>
            <strong>Username:</strong>
            <?= esc($user['username']) ?>
        </p>

        <p>
            <strong>Full Name:</strong>
            <?= esc($user['full_name']) ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?= esc($user['email']) ?>
        </p>
    <?php else: ?>
        <p>User information not found.</p>
    <?php endif; ?>

    <p><a href="/">Back to Welcome</a></p>
</body>
</html>