<!DOCTYPE html>
<html>
<head>
  <title>Edit Data</title>
</head>
<body>
  <form action="<?php echo base_url('Mahasiswa/aksiedit') ?>" method="post">
  <table>
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td>
        <input type="text" value="<?php echo $data_mhs->nim; ?>" disabled>
        <input type="hidden" name="nim" value="<?php echo $data_mhs->nim; ?>">
      </td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $data_mhs->nama; ?>" name="nama"></td>
    </tr>
    <tr>
      <td>Jurusan</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $data_mhs->jurusan; ?>" name="jurusan"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="SIMPAN"></td>
    </tr>
  </table>
  </form>
</body>
</html>