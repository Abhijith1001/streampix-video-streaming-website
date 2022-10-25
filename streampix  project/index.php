<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streampix India - Watch TV Shows Online, Watch Movies Online</title>
    <link rel="icon" type="image/x-icon" href="android-chrome-512x512.png">
    <link rel="stylesheet" href="front.css?v=<?php echo time(); ?>">
</head>

<body>
    <header class="top">
        <img class="top-left" src="imgg/Xfinity-Streampix-Logotype-696x392-removebg-preview.png" alt="Logo da Netflix">
        <a href="logout.php"><button id="out">Logout</button></a>
    </header>

    <main>
        <h1 class="qes">Who is watching?</h1>
        <div class="content">
            <div class="profile">
                <a href="page2.php"> <img class="content-img" src="img7/perfil-alison.png" alt="Imagem do Perfil Matheus"></a>
                <p class="name-profile"><?php echo $user_data['user_name']; ?></p>
            </div>

            <div class="profile">
                <a href="kid.php"> <img class="content-img" src="img7/kids.jpg" alt="Imagem do Perfil Matheus"></a>
                <p class="name-profile">Kids</p>
            </div>

            <div class="profile">
                <img class="content-img" src="img7/adicionar-perfil.png" alt="Imagem Adicionar Perfil">
                <p class="name-profile">Add Profile</p>
            </div>
        </div>
        <button style="border-style: solid" class="content-botao">Manage Profile</button>
    </main>
</body>

</html>