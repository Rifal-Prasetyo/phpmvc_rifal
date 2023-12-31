<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.min.css">
    <title>Halaman <?= $data['judul']; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">PHP MVC </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item  ">
                        <a class="nav-link <?php $info = $data['active'] == "home" ? "active text-primary" : "";
                                            echo $info ?>" href="<?= BASE_URL ?>/">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php $info = $data['active'] == "siswa" ? "active text-primary" : "";
                                            echo $info ?>" href="<?= BASE_URL ?>/Siswa">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php $info = $data['active'] == "about" ? "active text-primary" : "";
                                            echo $info ?>" href="<?= BASE_URL ?>/About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/About/pdo">Pdo</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>