<h2>Users</h2>
<a href="/create">Create new User</a>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Age</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['surname'] ?></td>
            <td><?= $user['age'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['phone'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
