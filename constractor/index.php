<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR CONSTUCTOR</title>
</head>
<body>
    <h1>Data User</H1>
    <?php
    //memangil/menggunakan class user.php
    require'User.php';
    //melakukan intstansiasi class-objek
   $user = new user(2,"ambatoll","admin123@gmail.com","bawah pusat","admin");

   //memberi/menimpa nilai  assignment value
   $user->id=2;
    $user->name="wenganteng";
    $user->email="admin123@gmail.com";
    $user->address="bawah pusat";
    $user->role="admin";

   ?>

   <ul>
    <li><?php echo $user->id ?></li>
    <li><?php echo $user->name?></li>
    <li><?php echo $user->email?></li>
    <li><?php echo $user->address?></li>
    <li><?php echo $user->role?></li>
   </ul>
    
</body>
</html>