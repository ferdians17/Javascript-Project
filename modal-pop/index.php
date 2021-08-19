<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modal Box - Pop Up Modal</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
	<button class="btn-red" de="#tambah">Tambah Data</button>
	<button class="btn-red" de="#hapus">Hapus Data</button>
	<button class="btn-red" de="#update">Update Data</button>
</div>

<!-- modal box punya id tambah -->
<div class="modal-box" id="tambah">
	<div class="modal-content">
		<button class="close" de="#tambah">&times;</button>
		<div class="modal-head">
			<h3>Tambah Data</h3>
		</div>
		<div class="modal-body">
			<p>
				Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Quam est laborum aliquid voluptatum cupiditate hic corrupti deleniti aliquam ullam alias!
			</p>
		</div>
	</div>
</div>
<!-- modal box punya id hapus -->
<div class="modal-box" id="hapus">
	<div class="modal-content">
		<button class="close" de="#hapus">&times;</button>
		<div class="modal-head">
			<h3>Hapus Data</h3>
		</div>
		<div class="modal-body">
			<p>
				Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Quam est laborum aliquid voluptatum cupiditate hic corrupti deleniti aliquam ullam alias!
			</p>
		</div>
	</div>
</div>
<!-- modal box punya id update -->
<div class="modal-box" id="update">
	<div class="modal-content">
		<button class="close" de="#update">&times;</button>
		<div class="modal-head">
			<h3>Update Data</h3>
		</div>
		<div class="modal-body">
			<p>
				Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Quam est laborum aliquid voluptatum cupiditate hic corrupti deleniti aliquam ullam alias!
			</p>
		</div>
	</div>
</div>

<script src="app.js"></script>
</body>
</html>