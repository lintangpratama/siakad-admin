<?php
if (isset($_POST["login"])) {
  if (($_POST["username"] == "admin") and ($_POST["password"] == "admin")) {
    header("Location: list-mahasiswa.php");
    exit;
  } else {
    $error = true;
  }
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

  <title>Admin Login</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand brand-logo" href="#">SIAKAD Admin</a>
    </div>
  </nav>

  <!-- Main section -->
  <main>
    <div class="container-lg pt-5">
      <!-- Heading -->
      <h1>Login</h1>
      <p>
        Masukkan data username dan password admin
      </p>
      <!-- Heading  -->

      <!-- Form -->
      <form action="" method="POST" class="pt-lg-5">
        <div class="mb-3 col-6 input">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" class="form-control block-form" name="username" placeholder="Masukkan Username" />
        </div>
        <div class="mb-3 col-6 input">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control block-form" name="password" id="exampleInputPassword1" placeholder="Masukkan Password" />
        </div>
        <button type="submit" name="login" class="btn bg-black text-white block-form mt-5 w-50 py-3 mb-5 input">
          Login
        </button>
      </form>
      <!-- Form -->
      <!-- Alert -->
      <?php if ($error) : ?>
        <div class="alert alert-danger text-center" role="alert">
          User atau password salah
        </div>
      <?php endif ?>
      <!-- Alert -->
    </div>
  </main>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>