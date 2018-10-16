<?php
require_once("db.php");

if(isset($_GET["cari"])) {
  $value = $_GET["cari"];
  $sql = "SELECT * FROM mahasiswa WHERE nim like '%$value%'";
}else {
  $sql = "SELECT * FROM mahasiswa";
}
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Lihat Data</title>
</head>
<body>
  <table align="center" width="50%" cellpadding="5" border="1" style="border-collapse: collapse">
    <tr>
      <td colspan="2">
        <form action="data.php" method="get">
          <input type="text" name="cari" placeholder="Cari Mahasiswa">
          <input type="submit" value="Cari">
        </form>
      </td>
      <td>
        <a href="form_reg.php">Registrasi</a>
      </td>
    </tr>
    <tr>
      <th>Nama</th>
      <th>NIM</th>
      <th>Aksi</th>
    </tr>
    <?php if(mysqli_num_rows($result) > 0) { ?>
    <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td><?php echo $row["nama"] ?></td>
      <td><?php echo $row["nim"] ?></td>
      <td><a href="detail_user.php?nim=<?php echo $row["nim"] ?>">Details</a></td>
    </tr>
    <?php } }else { ?>
    <tr>
      <td colspan="3" align="center">0 Results</td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
