<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="about">
    <a class="kembali fa fa-chevron-circle-left fa-4x" aria-hidden="true" href="index.php?beranda"></a>
    <script src="script.js"></script>
    <div class="latar">
      <form class="form-horizontal" method="POST" action="index.php?editProduk">
        <table align="center" style="width:30%;">
          <?php while($row = $this->model->fetch($data)){ ?>
          <tr>
            <td align="center" colspan="3">
              <p class="judul1">UBAH PRODUK</p>
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <input name="kd_produk" type="text" class="inp form-control" readonly="" value="<?php echo $row[0];?>">
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <input name="nama_produk" type="text" class="inp form-control" value="<?php echo $row[1];?>">
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <input name="harga" type="text" class="inp form-control" value="<?php echo $row[3];?>">
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <input name="jumlah" type="text" class="inp form-control" value="<?php echo $row[4];?>">
            </td>
            <td style="width:20px;"></td>
          </tr>
          <tr>
            <td colspan="3">
              <textarea name="keterangan" id="" cols="30" rows="5" class="inp form-control" value="<?php echo $row[2];?>"><?php echo $row[2];?></textarea>
            </td>
          </tr>
          <tr>
            <?php } ?>
            <td colspan="3">
              <button type="Submit" class="b3 inp btn btn-warning" href="reservation.html">Simpan</button>
            </td>
          </tr>
        </table>
      </form>
    </div> 
    
  </body>
</html>