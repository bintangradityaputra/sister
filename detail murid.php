<?php
session_start();

if ($_SESSION['level'] != 'admin' || empty($_SESSION['login'])) {
  header('location:login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Data Murid | TK Dharma Wanita</title>
  <style>
    h5,
    h1 {
      text-align: center;
      font-weight: bold;
      color: white;
    }

    p {
      text-align: center;
      color: white;
    }

    body {
      background-image: url('bg.jpg');
      background-size: cover;
    }
  </style>
</head>

<body>
  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%;">
    <h3 class="w3-bar-item">Admin</h3>
    <a href="home admin.php" class="w3-bar-item w3-button">Dashboard</a>
    <a href="admin_data murid.php" class="w3-bar-item w3-button">Data Murid</a>
    <a href="admin_data murid a.php" class="w3-bar-item w3-button">Data Murid A</a>
    <a href="admin_data murid b.php" class="w3-bar-item w3-button">Data Murid B</a>
    <a href="admin_data guru.php" class="w3-bar-item w3-button">Data Guru</a>
    <a href="admin_tambah murid.php" class="w3-bar-item w3-button">Tambah Data Murid</a>
    <a href="admin_tambah guru.php" class="w3-bar-item w3-button">Tambah Data Guru</a>
    <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
  </div>

  <div style="margin-left:15%">

    <div class="shadow mb-3 bg-body rounded">
      <div class="w3-container" style="background-color: rgb(19, 110, 155); color:white;">
        <h1>TK DHARMA WANITA BALONGREJO</h1>
      </div>
    </div>

    <?php
    include "koneksi.php";
    $id = $_GET["id_murid"];
    $sql = "SELECT * FROM murid WHERE id_murid = '$id'";
    $hasil = mysqli_query($koneksi, $sql);

    while ($row = mysqli_fetch_array($hasil)) {
    ?>

      <div class="container mt-2">
        <section>
          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <h3 style="color:black; font-weight:bold;">Data Lengkap</h3>
                  <hr>
                  <img src="<?php echo $row["foto"]; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 style="color:black;"><?php echo $row["nama_murid"] ?></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0" style="color:black;">ID Murid</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row["id_murid"]; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0" style="color:black;">Nama Lengkap</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row["nama_murid"]; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0" style="color:black;">Tanggal Lahir</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row["tgl_lahir_murid"]; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0" style="color:black;">Gender</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row["gender_murid"]; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0" style="color:black;">Nama Ayah</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row["nama_ayah"]; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0" style="color:black;">Nama Ibu</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row["nama_ibu"]; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0" style="color:black;">No.Telpon Orang Tua</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row["no_tlp_ortu"]; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0" style="color:black;">Alamat</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row["alamat"]; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0" style="color:black;">Kelas</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $row["kelas"]; ?></p>
                    </div>
                  </div>
                  <hr>


                  <!-- <table class="table table-hover" style="text-align: center;">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                <?php
                include "koneksi.php";
                $id = $_GET["id_murid"];

                $sql = "SELECT * FROM murid WHERE id_murid = '$id'";
                $hasil = mysqli_query($koneksi, $sql);
                $no = 1;

                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                  <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $row["id_murid"]; ?></td>
                    <td><?php echo $row["nama_murid"]; ?></td>
                    <td><?php echo $row["tgl_lahir_murid"]; ?></td>
                    <td><?php echo $row["gender_murid"]; ?></td>
                    <td><?php echo $row["kelas"]; ?></td>
                    <td>
                      <img src="<?php echo $row["foto"]; ?>" alt="foto" width="200">
                    </td>
                  </tr>

                <?php
                } ?>
              </tbody>
            </table> -->

                <?php } ?>
                </div>

              </div>
</body>

</html>