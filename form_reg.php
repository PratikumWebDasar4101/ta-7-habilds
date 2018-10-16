<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>
  <form action="submit.php" method="POST">
    <h2>Form Registrasi</h2>
    <table cellpadding="5">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Nim</td>
        <td><input type="text" name="nim"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
          <input type="radio" name="jk" value="Pria">Pria<br>
          <input type="radio" name="jk" value="Wanita">Wanita
        </td>
      </tr>
      <tr>
        <td>Program Studi</td>
        <td>
          <select name="prodi">
            <option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
            <option value="D3 Informatika">D3 Informatika</option>
            <option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
            <option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
            <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Fakultas</td>
        <td>
          <select name="fak">
            <option value="Ilmu Terapan">Ilmu Terapan</option>
            <option value="Informatika">Informatika</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Komunikasi Bisnis">Komunikasi Bisnis</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Asal</td>
        <td><input type="text" name="asal"></td>
      </tr>
      <tr>
        <td>Motto Hidup</td>
        <td><textarea name="motto" cols="30" rows="10"></textarea></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="submit" value="Registrasi"></td>
      </tr>
    </table>
  </form>
</body>
</html>
