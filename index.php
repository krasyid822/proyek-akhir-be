<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'daftar_peserta_codify');

$connection = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME);

$query = mysqli_query($connection, 'select * from daftar_peserta;');

$rows = [];
?>
<table border=1>
  <?php
      while ($data = mysqli_fetch_array($query)) {
        echo "<tr><td>". $data["nama_peserta"] ."</td></tr>";
      }
      mysqli_close($connection);
    ?>
</table>

<!-- // farid gantenk 123 among us -->