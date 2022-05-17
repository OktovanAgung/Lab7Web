<html>
<head>
<title>Program Sederhana</title>
</head>
<body>
<h1>Program Sederhana</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="date" name="tanggal_lahir"><br></td>
      </tr>
      <tr>
      <tr>
        <td>pekerjaan</td>
        <td>:</td>
        <td>
        <select name="pkj" autofocus>
          <option></option>
          <option value="Dokter">Dokter</option>
          <option value="Programmer">Programmer</option>
          <option value="Guru">Guru</option>
        </select>
        </td>
      </tr>
        <td><input type="submit"></td>
      </tr>
    </table>
</form>
<table>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><?php echo $_POST['nama'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><?php echo $_POST['tanggal_lahir'] ?></td>
  </tr>
  <tr>
    <td>Umur</td>
    <td>:</td>
    <td><?php include 'umur.php' ?> Tahun</td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $_POST['pkj'] ?></td>
  </tr>
  <tr>
    <td>Gaji</td>
    <td>:</td>
    <td><?php include 'gaji.php' ?></td>
  </tr>
</table>
</body>
</html>