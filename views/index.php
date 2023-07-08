<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bravo-mailer is a project, a mini web platform for sending mail using an API provided.">
    <meta name="keywords" content="Bravo, mailer, smtp, sending-mail,kabirou,alassane">
    <meta name="author" content="Kabirou ALASSANE">
    <meta name="robots" content="index, follow">
    <title>Welcome {{ $pageTitle }} | Bravo-Mailer</title>
    <link rel="favicon" type="image/ico" href="/favicon.ico">
</head>

<body style="overflow-x:hidden;">
    <header>
        <?php require_once 'partials/header.php' ?>
    </header>
    <div>
        <?php include $viewPath ?>
    </div>
    <footer class="footer-update">
        <?php require_once 'partials/footer.php' ?>
    </footer>
</body>

</html>