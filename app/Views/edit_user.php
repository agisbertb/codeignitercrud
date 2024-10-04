<h2>Edit User</h2>
<form action="/update/<?= $user['id'] ?>" method="post">
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" value="<?= $user['name'] ?>"><br><br>

    <label for="name">Surname:</label><br>
    <input type="text" name="surname" id="surname" value="<?= $user['surname'] ?>"><br><br>

    <label for="name">Age:</label><br>
    <input type="number" name="age" id="age" value="<?= $user['age'] ?>"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" value="<?= $user['email'] ?>"><br><br>

    <label for="phone">Phone:</label><br>
    <input type="text" name="phone" id="phone" value="<?= $user['phone'] ?>"><br><br>

    <button type="submit">Update</button>
</form>
