<!DOCTYPE html>
<html>
<head>
  <title>Data</title>
</head>
<body>
  <h1>Data Pelanggan</h1>
  <table border="1">
    <tr>
      <th>Nama</th>
      <th>NoHP</th>
      <th>Jumlah</th>
    <tr>
    <?php foreach($pelanggan as $u){ ?>
      <td><?php echo $u->nama ?></td>
      <td><?php echo $u->noHP ?></td>
      <td><?php echo $u->jumlah ?></td>
    </tr>
    <?php } ?>
    </table> 
</body>
</html>