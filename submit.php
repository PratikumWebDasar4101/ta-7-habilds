<?php
require_once("db.php");

if(isset($_POST["submit"]) || isset($_GET["nim"])) {
  $nama = $_POST["nama"];
  $nim = $_POST["nim"];
  $jk = $_POST["jk"];
  $prodi = $_POST["prodi"];
  $fak = $_POST["fak"];
  $asal = $_POST["asal"];
  $motto = $_POST["motto"];

  if (isset($_POST["edit"])) {
    $sql = "UPDATE mahasiswa SET nama='$nama', jenis_kelamin='$jk', program_studi='$prodi', fakultas='$fak', asal='$asal', motto='$motto' WHERE nim=$nim";
  }else if(isset($_GET["nim"])) {
    $nims = $_GET["nim"];
    $sql = "DELETE FROM mahasiswa WHERE nim='$nims'";
  }else {
    $sql = "INSERT INTO mahasiswa VALUES('$nama', '$nim', '$jk', '$prodi', '$fak', '$asal', '$motto')";
  }

  if(mysqli_query($conn, $sql)) {
    header("Location: data.php");
  }else {
    echo "Gagal Input Data" . mysqli_error($conn);
  }
}else {
  header("Location: notfound.php");
}
