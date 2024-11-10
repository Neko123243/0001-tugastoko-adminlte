<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
          <title> Mengubah Data Transaksi </title>
          
     </head>
     <body>
          
          <div class="container">
               <div class="judul my-3">
                    <h2>Mengubah Data Transaksi</h2>
               </div>

               <?php if (!$transaksi): ?>
                    <div class="alert alert-danger">
                         Data transaksi tidak ditemukan atau kode tidak valid.
                    </div>
               <?php else: ?>

               <form method="POST" class ="my-2">
                    
                    <div class="mb-3">
                         <label for="kd_brg" class="form-label fw-bold">Kode Barang</label>
                         <input type="text"  class="form-control" id="kd_brg" name="kd_brg"  value="<?php echo $transaksi['kd_brg'] ?>" required>
                    </div>
                    <div class="mb-3">
                         <label for="id_plg" class="form-label fw-bold">ID Pelanggan</label>
                         <input type="text"  class="form-control" id="id_plg" name="id_plg"  value="<?php echo $transaksi['id_plg'] ?>" required>
                    </div>                   
                    <div class="mb-3">
                         <label for="jumlah" class="form-label fw-bold">Jumlah</label>
                         <input type="number"  class="form-control" id="jumlah" name="jumlah"  value="<?php echo $transaksi['jumlah'] ?>" required>
                    </div>                

                    <div class="mb-4">
                         <a href="index.php?pindah=transaksi"      class="btn btn-info btn-sm">Kembali</a>
                         <button type="submit"    class="btn btn-success btn-sm" onclick="return confirm('Data berhasil di Edit');">Update</button>
                    </div>
               </form>
               <?php endif; ?>
          </div>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
          crossorigin="anonymous"></script>

     </body>
</html>