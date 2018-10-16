<?php
require_once("db.php");

$nim = $_GET["nim"];
$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) > 0) {
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>
  <form action="submit.php" method="POST">
    <h2>Form Edit</h2>
    <table cellpadding="5">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $row["nama"] ?>"></td>
      </tr>
      <tr>
        <td>Nim</td>
        <td><input type="text" value="<?php echo $row["nim"] ?>" disabled><input type="hidden" name="nim" value="<?php echo $row["nim"] ?>"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
          <input type="radio" name="jk" value="Pria" <?php if($row["jenis_kelamin"] == "Pria"):echo "checked"; endif ?>>Pria<br>
          <input type="radio" name="jk" value="Wanita" <?php if($row["jenis_kelamin"] == "Wanita"):echo "checked"; endif ?>>Wanita
        </td>
      </tr>
      <tr>
        <td>Program Studi</td>
        <td>
          <select name="prodi">
            <option value="D3 Sistem Informasi" <?php if($row["program_studi"] == "D3 Sistem Informasi"):echo "selected"; endif ?>>D3 Sistem Informasi</option>
            <option value="D3 Informatika" <?php if($row["program_studi"] == "D3 Informatika"):echo "selected"; endif ?>>D3 Informatika</option>
            <option value="D3 Teknik Telekomunikasi" <?php if($row["program_studi"] == "D3 Teknik Telekomunikasi"):echo "selected"; endif ?>>D3 Teknik Telekomunikasi</option>
            <option value="D3 Komputerisasi Akuntansi" <?php if($row["program_studi"] == "D3 Komputerisasi Akuntansi"):echo "selected"; endif ?>>D3 Komputerisasi Akuntansi</option>
            <option value="D3 Teknik Komputer" <?php if($row["program_studi"] == "D3 Teknik Komputer"):echo "selected"; endif ?>>D3 Teknik Komputer</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Fakultas</td>
        <td>
          <select name="fak">
            <option value="Ilmu Terapan" <?php if($row["fakultas"] == "Ilmu Terapan"):echo "selected"; endif ?>>Ilmu Terapan</option>
            <option value="Informatika" <?php if($row["fakultas"] == "Informatika"):echo "selected"; endif ?>>Informatika</option>
            <option value="Teknik Elektro" <?php if($row["fakultas"] == "Teknik Elektro"):echo "selected"; endif ?>>Teknik Elektro</option>
            <option value="Komunikasi Bisnis" <?php if($row["fakultas"] == "Komunikasi Bisnis"):echo "selected"; endif ?>>Komunikasi Bisnis</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Asal</td>
        <td><input type="text" name="asal" value="<?php echo $row["asal"] ?>"></td>
      </tr>
      <tr>
        <td>Motto Hidup</td>
        <td><textarea name="motto" cols="30" rows="10"><?php echo $row["motto"] ?></textarea></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="hidden" name="edit" value="edit">
          <input type="submit" name="submit" value="Edit">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
<?php } ?>
