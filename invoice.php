<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hasil Pemesanan | Hotel Hebat</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="template2/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="row">

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-row">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Hotel Hebat
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
            
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Jumlah Kamar</th>
                    <th>Tipe Kamar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php  
                    include('koneksi.php');
                    $no = 1;
                    $query = mysqli_query($koneksi,"SELECT * FROM pemesanan ORDER BY id_pemesanan DESC LIMIT 1");
                    while($row = mysqli_fetch_array($query)){ 
                    ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row ['nama_pemesan'] ?></td>
                    <td><?php echo $row ['check_in'] ?></td>
                    <td><?php echo $row ['check_out'] ?></td>
                    <td><?php echo $row ['jumlah_kamar'] ?></td>
                    <td><?php echo $row ['tipe_kamar'] ?></td>
                  </tr>
                  <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
               
                <!-- /.col -->
                <div class="col-6">

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        
                      </tr>
                      
                    
                      
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no=print">
                <div class="col-12">
                 
                  <a href="index.php" ><button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                     HOME
                  </button></a>
                  <a href="invoice.php"><button onClick="window.print();"><i class="fas fa-print" ></i>        print</button></a>

                </div>
              </div>
            </div>
            
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="template2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="template2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="template2/dist/js/demo.js"></script>
</body>
</html>
