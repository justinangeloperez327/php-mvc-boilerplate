<h2>Edit User</h2>

<form action="/users/update/<?= $user['id'] ?>" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name']) ?>" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required><br><br>

    <button type="submit">Update</button>
    <a href="/users">Cancel</a>
</form>
