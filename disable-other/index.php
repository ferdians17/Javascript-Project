<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<style>
*
{
	font-family: sans-serif;
	box-sizing: border-box;
}
body
{
	margin: 0;
	padding: 0;
}
.container
{
	width: 100%;
	padding: 40px 20px;
}
.input-area
{
	width: 100%;
	padding: 7.5px 10px;
}
.input
{
	width: 100%;
	padding: 7.5px 10px;
}
</style>
</head>
<body>

	<div class="container">
		<div class="input-area">
			<label for="nama">Nama Lengkap:</label>
			<input type="text" class="input">
		</div>
		<div class="input-area">
			<label for="email">Alamat Email:</label>
			<input type="email" class="input">
		</div>
		<div class="input-area">
			<label for="password">Password:</label>
			<input type="password" class="input">
		</div>
		<div class="input-area">
			<label for="password_lagi">Password Lagi:</label>
			<input type="password" class="input">
		</div>
		<div class="input-area">
			<label for="alamat">Alamat Lengkap:</label>
			<input type="text" class="input">
		</div>
	</div>
	
<script>
	const input_area = document.querySelectorAll(".input-area");

	input_area.forEach(area =>
	{
		let input = area.querySelector("input");
		input.disabled = true;

		area.addEventListener("click", ()=>
		{
			input.disabled = false;
			input.focus();
		});

		area.addEventListener("mouseleave", ()=>
		{
			input.disabled = true;
		});
	});
</script>
</body>
</html>