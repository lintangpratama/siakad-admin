<!-- Checking if params doesn't declared -->
<?php
if (!isset($_GET["nama"], $_GET["nim"], $_GET["kelas"], $_GET["alamat"], $_GET["prodi"])) {
    header("Location: list-mahasiswa.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <title>Detail Mahasiswa</title>
</head>

<body>
    <!-- Array Data Mahasiswa -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand brand-logo" href="#">SIAKAD Admin</a>
        </div>
    </nav>
    <!-- Main section -->
    <main>
        <div class="container-lg pt-5">
            <!-- Heading  -->
            <div class="card text-center">
                <div class="card-header bg-dark text-white">
                    Biodata Mahasiswa
                </div>
                <div class="card-body">
                    <h4 class="card-title"><?= $_GET["nama"] ?></h4>
                    <h4 class="card-title"><?= $_GET["nim"] ?></h4>
                    <p class="card-text mb-0"><?= $_GET["kelas"] ?></p>
                    <p class="card-text">Live at <?= $_GET["alamat"] ?></p>
                </div>
                <div class="card-footer text-muted bg-dark">
                    <?= $_GET["prodi"] ?> Student of Walisongo State Islamic Semarang
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>