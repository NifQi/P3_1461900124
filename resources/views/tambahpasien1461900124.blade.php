<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tambah Data Pasien</title>
<style> * {
box-sizing: border-box;
}
input[type=text], input[type=number]{ width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;
}
label {
padding: 12px 12px 12px 0;
display: inline-block;
}
input[type=submit] { background-color: #04AA6D; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; float: right;
}
input[type=submit]:hover { background-color: #45a049; }
.container { border-radius: 5px; background-color: #f2f2f2; padding: 20px; }
.col-25 { float: left; width: 25%; margin-top: 6px; }
.col-75 { float: left; width: 75%; margin-top: 6px; }
/* Clear floats after the columns */
.row:after { content: ""; display: table; clear: both; }
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
.col-25, .col-75, input[type=submit] { width: 100%; margin-top: 0;
}
}
</style>
</head>
<body>
<h2>Tambah Data Pasien</h2>
<div class="container">
<form action="{{route('pasien1461900124.store')}}" method="POST">
@csrf
<div class="row">
<div class="col-25">
<label>ID</label>
</div>
<div class="col-75">
<input type="number" name="id"> </div>
</div>
<div class="row">
<div class="col-25">
<label>Nama Lengkap</label>
</div>
<div class="col-75">
<input type="text" name="nama">
</div>
</div>
<div class="row">
<div class="col-25">
<label>Alamat</label>
</div>
<div class="col-75">
<input type="text" name="alamat">
</div>
</div>
<div class="row">
<input type="submit" value="Submit"> </div>
</form>
</div>
</body>
