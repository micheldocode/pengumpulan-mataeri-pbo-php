<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Constructor</title>
</head>
<body>
    <h1>Data User</h1>
    <?php
        //Memanggil / menggunakan class User.php
        require 'User.php';

        //Melakukan instansiasi class-objek
        $user = new User(2, "Rizky", "rizky@gmail.com", "Jakarta", "admin");

        //Memberi nilai / Assignment value
        $user->id = 2;
        $user->name = "Rizky";
        $user->email = "rizky@gmail.com";
        $user->address = "Jakarta";
        $user->role = "admin";
    ?>
    <ul>
        <li> <?php echo $user -> id; ?> </li>
        <li> <?php echo $user -> name; ?> </li>
        <li> <?php echo $user -> email; ?> </li>
        <li> <?php echo $user -> address; ?> </li>
        <li> <?php echo $user -> role; ?> </li>
    </ul>
</body>
</html>