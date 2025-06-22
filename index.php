<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <title>Mark Estareja</title>
</head>

<body>
    <?php
    include 'PHP/header.php';
    ?>
    <main>

        <?php
        include 'PHP/project.php';
        include 'PHP/about.php';
        include 'PHP/contact.php';

        ?>
    </main>
    <footer>
        
        <?php
        include 'PHP/footer.php';
        ?>
    </footer>
    


    <script src="./script.js"></script>
</body>

</html>