<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Arkademy</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <script src="script.js"></script>
    <div class="latar">
      <table align="center">
        <tr>
          <td align="center">
            <p class="judul1">Website Arkademy</p>
            <p class="judul2">Data Produk</p>
          </td>
        </tr>
        <tr>
          <td align="center" style="height:100px;">
            <a href="tambah.html"><button class="b1" style="font-size:13px; padding: 10px; width:100px">Baru</button></a>
          </td>
        </tr>
      </table>

    </div> 
    <div class="isi">
      <div class="tabel table-responsive">
        <table align="center" class="table table-border table-striped" style="width: 90%;">
        <tr>
          <th>Nama Barang</th>
          <th>Keterangan</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Pintasan</th>
        </tr>
        <?php
        while($row = $this->model->fetch($data)){
          echo "
          <tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>Rp.".number_format($row[2])."</td>
            <td>$row[3]</td>";
            ?><td>
                <a title="Edit" class="link fa fa-pencil fa-lg" href="index.php?viewEditProduk=<?php echo "$row[0]" ?>"></a>
                <a title="Delete" class="link fa fa-trash fa-lg" onclick="return(confirm('Hapus Data?'))" href="index.php?hapusProduk=<?php echo "$row[0]" ?>"></a>
              </td><?php
        } ?>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>