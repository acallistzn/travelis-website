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


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-plane-alt'></i>
			<span class="text">Travelis</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
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
			<li>
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

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>

			<ul class="box-info">
				<li style="width: 330px;">
					<i class='bx bxs-landscape' ></i>
					<span class="text">
						<h3>411</h3>
						<p>Wisata</p>
					</span>
				</li>
				<li style="width: 330px;">
					<i class='bx bxs-buildings' ></i>
					<span class="text">
						<h3>102</h3>
						<p>Hotel</p>
					</span>
				</li>
				<li style="width: 330px;">
					<i class='bx bxs-plane-take-off' ></i>
					<span class="text">
						<h3>513</h3>
						<p>Total Lokasi</p>
					</span>
				</li>
			</ul>


			<div class="table-data" style="width: 1020px;">
				<div class="order">
					<div class="head">
						<h3>Rincian Pesanan</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Username</th>
								<th>Tanggal</th>
                                <th>Tujuan</th>
                                <th>Jumlah</th>
								<th>Total harga</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>User1</p>
								</td>
								<td>12-12-2020</td>
                                <td>Wisata XXX</td>
                                <td>2</td>
								<td>Rp 000,000</td>
							</tr>
							<tr>
								<td>
									<p>User2</p>
								</td>
								<td>12-12-2020</td>
                                <td>Wisata XXX</td>
                                <td>5</td>
								<td>Rp 000,000</td>
							</tr>
							<tr>
								<td>
									<p>User3</p>
								</td>
								<td>12-12-2020</td>
                                <td>Wisata XXX</td>
                                <td>5</td>
								<td>Rp 000,000</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Rekomendasi Wisata</h3>
					</div>
					<ul class="todo-list">
						<li>
							<p>Todo List</p>
						</li>
						<li>
							<p>Todo List</p>
						</li>
						<li>
							<p>Todo List</p>
						</li>
						<li>
							<p>Todo List</p>
						</li>
						<li>
							<p>Todo List</p>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="<?php echo base_url('assets/js/script-dash.js'); ?>"></script>
</body>
</html>