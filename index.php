<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jadwal Daring SMANJ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Dion Montolalu" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="admin/icon.png">
  <!-- font-awesome icons -->
	<link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <script src="admin/assets/plugins/jquery-1.10.2.js"></script>
  <script src="admin/assets/plugins/bootstrap/bootstrap.js"></script>
  <!-- Sweet Alert -->
  <link rel="stylesheet" type="text/css" href="admin/sweetalert/dist/sweetalert.css">
  <script type="text/javascript" src="admin/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #00b33c; ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color:white; float: left; border-right:2px solid #bbb;"> <b>Jadwal Daring SMANJ</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li style="float: left; border-right:2px solid #bbb;"><a href="#" data-toggle="modal" data-target="#myModal2" style="color:white;"><strong><i class="fa fa-info-circle nav_icon"> INFO </i></strong></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="login.php" target="_blank"> <strong>LOGIN</strong></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-17">
      <form method="post" action="index.php">
      </form>
      <h1>Jadwal Daring SMA Nurul Jadid Paiton Probolinggo</h1>

      <table class="table table-bordered" style="border-color:#1976D2;">
      <thead>
        <tr style="background-color:#00b33c; color:white;">
          <th><center>No.</center></th>
          <th><center>Hari/tanggal</center></th>
          <th><center>Jam Ke</center></th>
          <th><center>MIPA</center></th>
          <th><center>IPS</center></th>
          <th><center>BHS</center></th>
          <th><center>KELAS</center></th>
        </tr>
      </thead>
      
      
       <tbody>
          <!-- ModalInfoWaliAsuh -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header" style="background-color:#00b33c;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <center><h4 class="modal-title"><b style="color:white;"><i class="fa fa-info-circle nav_icon"> </i> INFO</b></h4></center>
                  </div>
                  <div class="modal-body2">
                    <center><p>
                      Informasi Jadwal dan link meeting Hubungi Waka. Kurikulum 0852-5791-1282 (DIDIK RAHWINIYANTO)
                      <br><br>
                      Informasi Jaringan dan Panduan Hubungi Penjab IT 0822-6453-4176(ARIES PRAMUDIANTO)
                    </p></center>
                  </div>
                  <div class="modal-footer" style="background-color:#00b33c;">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">KELUAR</button>
                  </div>
                </div>
              </div>
            </div>
            </tbody>
            </table>
    </div> <!-- End class="col-md-12"-->
  </div> <!-- End class="row"-->
</div> <!-- End class="container"-->

</body>
</html>
