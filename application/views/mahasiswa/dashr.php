<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style-dashboard.css'); ?>">

	<title>AdminHub</title>
</head>
<body>

<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-plane-alt'></i>
			<span class="text">Travelis</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="<?php echo base_url('mahasiswa'); ?>">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('mahasiswa/dashw'); ?>">
					<i class='bx bxs-data' ></i>
					<span class="text">Wisata</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('mahasiswa/dashh'); ?>">
					<i class='bx bxs-building-house' ></i>
					<span class="text">Hotel</span>
				</a>
			</li>
			<li class="active">
				<a href="<?php echo base_url('mahasiswa/dashr'); ?>">
					<i class='bx bxs-camera-plus' ></i>
					<span class="text">Reels</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

    	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
		</nav>
		<!-- NAVBAR -->

<div class="container pt-5">
    <h3><?= $title ?></h3>
    <div class="row">
        <div class="col-md-12">
            <hr><a class="btn btn-primary mb-2" style="border-radius: 6px" href="<?= base_url('mahasiswa/add'); ?>">Tambah Data</a>
            <div mb-2>
                <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                <?php if ($this->session->flashdata('message')) :
                    echo $this->session->flashdata('message');
                endif; ?>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="tableMahasiswa">
                            <thead>
                                <tr class="table-success">
                                    <th>NAMA</th>
                                    <th>KOTA</th>
                                    <th>KATEGORI</th>
                                    <th>HARGA</th>
                                    <th>FOTO</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_mahasiswa as $row) : ?>
                                    <tr>
                                        <td><?= $row->Nama ?></td>
                                        <td><?= $row->JenisKelamin ?></td>
                                        <td><?= $row->Agama ?></td>
                                        <td><?= $row->NoHp ?></td>
                                        <td><?= $row->Email ?></td>
                                        <td>
                                            <a href="<?= site_url('mahasiswa/edit/' . $row->IdMhsw) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
                                            <a href="javascript:void(0);" data="<?= $row->IdMhsw ?>" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal dialog hapus data-->
<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>

<script>
    //menampilkan data ketabel dengan plugin datatables
    $('#tableMahasiswa').DataTable();

    //menampilkan modal dialog saat tombol hapus ditekan
    $('#tableMahasiswa').on('click', '.item-delete', function() {
        //ambil data dari atribute data 
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        //ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete 
        //pada controller mahasiswa
        $('#btdelete').unbind().click(function() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>mahasiswa/delete/',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>

</section>
	<!-- CONTENT -->
	

	<script src="<?php echo base_url('assets/js/script-dash.js'); ?>"></script>
</body>
</html>