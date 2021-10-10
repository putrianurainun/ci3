<!DOCTYPE html>
<html>
<head>
  <title>Create Data</title>
</head>
<body>
  <form method="post" action="<?php echo base_url('Mahasiswa/save'); ?>">
  <table>
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td><input type="text" name="nim" required></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
      <td>Jurusan</td>
      <td>:</td>
      <td><input type="text" name="jurusan" required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="SIMPAN"></td>
    </tr>
  </table>
  </form>
</body>
</html>