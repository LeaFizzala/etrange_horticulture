
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title><?php if (isset($data['title'])) echo $data['title']; ?> - Étrange Horticulture</title>
    <?php if (isset($data['description'])) { ?>
        <meta name="description" content="<?= $data['description'] ?>">
    <?php } ?>
</head>
<body>
<?php include 'inc/menu.php'; ?>
<main class="container">

    <?php require $templatePath ?>
</main>
<?php include '_footer.php'; ?>
</body>
</html>