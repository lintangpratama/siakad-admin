<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">

    <title>List Mahasiswa</title>
</head>

<body>
    <!-- Array Data Mahasiswa -->
    <?php
    $dataMahasiswa = [
        [
            "nama" => "Abdur Rofi Maulidin",
            "nim" => 2008096059,
            "kelas" => "Teknologi Informasi - 4B",
            "alamat" => "Semarang",
            "prodi" => "Teknologi Informasi"

        ],
        [
            "nama" => "Julian Jacobs",
            "nim" => 2008093082,
            "kelas" => "Biologi - 4B",
            "alamat" => "Tangerang",
            "prodi" => "Biologi"
        ],
        [
            "nama" => "Rani Hudaya Anggraini",
            "nim" => 19029162821,
            "kelas" => "Teknologi Informasi - 4A",
            "alamat" => "Semarang",
            "prodi" => "Teknologi Informasi"

        ],
        [
            "nama" => "Sulaiman Al-Hamid",
            "nim" => 2008096529,
            "kelas" => "Fisika - 4A",
            "alamat" => "Jakarta",
            "prodi" => "Fisika"
        ],
        [
            "nama" => "Linda Musammah ",
            "nim" => 18092817812,
            "kelas" => "Teknologi Informasi - 4A",
            "alamat" => "Semarang",
            "prodi" => "Teknologi Informasi"
        ],
    ]
    ?>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand brand-logo" href="#">SIAKAD Admin</a>
        </div>
    </nav>

    <!-- Main section -->
    <main>
        <div class="container-lg pt-5">
            <!-- Heading -->
            <h1>List Mahasiwa</h1>
            <p>
                Berikut ini adalah list mahasiswa Program Studi Informatika
            </p>
            <!-- Heading  -->
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbdody>
                    <?php $i = 1 ?>
                    <?php foreach ($dataMahasiswa as $data) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $data["nama"] ?></td>
                            <td><?= $data["nim"] ?></td>
                            <td>
                                <a href="detail-mahasiswa.php?nama=<?= $data["nama"] ?>&nim=<?= $data["nim"] ?>&kelas=<?= $data["kelas"] ?>&alamat=<?= $data["alamat"] ?>&prodi=<?= $data["prodi"] ?>">
                                    <button type="button" class="btn btn-light">Detail</button>
                                </a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach ?>
                </tbdody>
            </table>
            <button type="button" id="logout" class="btn btn-danger float-end mt-3">Logout</button>
        </div>
    </main>

    <script>
        document.getElementById("logout").addEventListener("click", logoutHandler);

        function logoutHandler(e) {
            e.preventDefault();
            window.location.replace("login.php");
        }
    </script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>