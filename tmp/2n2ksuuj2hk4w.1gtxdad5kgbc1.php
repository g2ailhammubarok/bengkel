<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

  <base href="<?= ($BASE.'/'.$UI) ?>" />
  <!-- Document title -->
  <title><?= ($site) ?></title>

  <meta name="robots" content="noindex, nofollow" />

  <!-- Favicons -->
  <link rel="icon" href="../../ui/assets/img/AdminLTELogo.png" />
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="../../ui/assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../ui/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../ui/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../ui/assets/css/style.css">
  <link rel="stylesheet" href="../../ui/assets/css/components.css">
  <!-- Custom style -->
  <link rel="stylesheet" href="../../ui/assets/css/app-custom.css">
  
  <style>
	.bg-app {
	  background-color: #6372e6;
	  color: white;
	}
  </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
			<h5 class="page-title"><?= ($page_title) ?></h5>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="fa fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifikasi</div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fa fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../../ui/assets/img/img.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Halo, Administrator</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Menu Pengguna</div>
              <a href="javascript:void(0)" class="dropdown-item has-icon" data-toggle="modal" data-target="#change_password">
                <i class="fas fa-user-cog"></i> Ganti Password
              </a>
			  <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Pengaturan
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Keluar
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= ($BASE.'/') ?>">PD. Nusa Jaya Pump</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= ($BASE.'/') ?>">NJP</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li>
              <a href="<?= ($BASE.'/') ?>" class="nav-link"><i class="fas fa-tachometer-alt text-primary"></i><span>Dashboard</span></a>
            </li>
			<li class="menu-header">Data Master &amp; Transaksi</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-table" style="color:teal"></i><span>File Master</span></a>
              <ul class="dropdown-menu">
                <li><a href="../../item" class="nav-link">Master Barang</a></li>
                <li><a href="../../customer" class="nav-link">Master Pelanggan</a></li>
                <li><a href="../../model" class="nav-link">Master Model</a></li>
              </ul>
            </li>
			<li>
              <a href="#" class="nav-link"><i class="fas fa-file-signature text-warning"></i><span>Penawaran</span></a>
            </li>
			<li>
              <a href="../../invoice/create" class="nav-link"><i class="fas fa-file-invoice text-success"></i><span>Invoice</span></a>
            </li>
			<li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-copy text-info"></i><span>Laporan</span></a>
              <ul class="dropdown-menu">
                <li><a href="" class="nav-link">Laporan Banjarmasin</a></li>
                <li><a href="" class="nav-link">Laporan PPN</a></li>
                <li><a href="" class="nav-link">Laporan Cash</a></li>
              </ul>
            </li>
			<li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-cubes text-dark"></i><span>Stock</span></a>
              <ul class="dropdown-menu">
                <li><a href="../../stock" class="nav-link">Master Stock</a></li>
                <li><a href="../../supplier" class="nav-link">Master Supplier</a></li>
                <li class="dropdown-divider"></li>
                <li><a href="" class="nav-link">Transaksi Pembelian</a></li>
                <li><a href="" class="nav-link">Laporan Pembelian</a></li>
              </ul>
            </li>
			<li class="menu-header">Pengaturan</li>
            <li>
              <a href="../../user" class="nav-link"><i class="fas fa-users"></i><span>Kelola Data Pengguna</span></a>
            </li>
            <li><a href="" class="nav-link"><i class="fas fa-info-circle text-danger"></i><span>Tentang Aplikasi</span></a></li>
          </ul>
        </aside>
      </div>
	  
	  <div class="modal fade" id="change_password" role="dialog">
	    <div class="modal-dialog">
		  <div class="modal-content">
		    <div class="modal-header bg-info">
			  <h5 class="modal-title"><span>Ganti Password</span></h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span>&times;</span>
			  </button>
		    </div>
		    <form action="<?= ($BASE.'/user/update/'.$SESSION['id']) ?>" method="POST">
		      <div class="modal-body">
				<div class="container p-2">
				  <div class="form-group row">
					<label>Username</label>
					<input name="user_name" class="form-control form-control-sm" value="<?= ($SESSION['username']) ?>" readonly>
				  </div>
				  <div class="form-group row">
					<label>New Password <span class="text-danger">*</span></label>
					<input type="password" name="user_password" class="form-control form-control-sm" required>
				  </div>
				</div>
			  </div>
			  <div class="modal-footer bg-light">
				<button type="button" class="btn btn-danger btn-sm btn-form" data-dismiss="modal">Close</button>
				<button type="submit" name="update" class="btn btn-primary btn-sm btn-form">Update</button>
			  </div>
		    </form>
		  </div>
	    </div>
	  </div>
	  
	  <div class="main-content">
        <section class="section">