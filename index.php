<?php
session_start();
?>

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

    <meta name="description"
        content="Mark Estareja is a passionate web developer in the Philippines, specifically from Angeles City, Pampanga, 2009 — specializing in modern, responsive websites using HTML, CSS, JavaScript, and PHP.">
    <meta name="keyword"
        content="Mark Estareja, Web Developer, Web Designer, Portfolio, Front-end developer, HTML, CSS, JavaScript, PHP, freelance developer, responsive design, web design Philippines, web design Angeles City, Pampanga, 2009">
    <meta name="author" content="Mark Estareja">
    <meta name="robots" content="index, follow">


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


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
        if (messageText != '') {

            Swal.fire({
                title: "Thank you!",
                text: messageText,
                icon: "success"
            });

            <?php unset($_SESSION['status']); ?>
        }
    </script>
</body>

</html>