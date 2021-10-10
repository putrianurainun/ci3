<h3>Data Mahasiswa</h3>

<a href="<?php echo base_url('mahasiswa/create'); ?>">Add Data</a>
<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jurusan</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $count=0;
      foreach ($data_mhs as $row) {
      $count = $count+1;
       ?>
    <tr>
      <th><?php echo $count; ?></th>
      <td><?php echo $row->nim; ?></td>
      <td><?php echo $row->nama; ?></td>
      <td><?php echo $row->jurusan; ?></td>
      <td>
        <a href="<?php echo base_url('Mahasiswa/formEdit/'). $row->nim ?>">Edit</a>
        <a href="<?php echo base_url('Mahasiswa/aksidelete/'). $row->nim ?>">Delete</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>

<a href="<?php echo base_url('user'); ?>">Back</a>