<?php
require_once("db.php");

$nim = $_GET["nim"];
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Details <?php echo $row["nama"] ?></title>
</head>
<body>
  <h1>Info Detail <?php echo $row["nama"] ?></h1>
  <table cellpadding="5">
    <tr>
      <td>Nama</td>
      <td><?php echo $row["nama"] ?></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td><?php echo $row["nim"] ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><?php echo $row["jenis_kelamin"] ?></td>
    </tr>
    <tr>
      <td>Program Studi</td>
      <td><?php echo $row["program_studi"] ?></td>
    </tr>
    <tr>
      <td>Fakultas</td>
      <td><?php echo $row["fakultas"] ?></td>
    </tr>
    <tr>
      <td>Asal</td>
      <td><?php echo $row["asal"] ?></td>
    </tr>
    <tr>
      <td>Motto</td>
      <td><?php echo $row["motto"] ?></td>
    </tr>
    <tr>
      <td colspan="2"><a href="form_edit.php?nim=<?php echo $row['nim'] ?>">Edit</a> | <a href="submit.php?nim=<?php echo $row['nim'] ?>">Hapus</a></td>
    </tr>
  </table>
</body>
</html>
