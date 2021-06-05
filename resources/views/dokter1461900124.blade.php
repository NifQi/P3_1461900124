<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data Dokter</title>
<style> table { border-collapse: collapse; border-spacing: 0; width: 100%;
border: 1px solid #ddd;
}
thead { background-color: #f2f2f2;
}
th, td { text-align: left; padding: 8px;
} tr:nth-child(even){background-color: #f2f2f2}
.tambah{ padding: 8px 16px ; text-decoration: none;
}
</style>
</head>
<body>
<div style="overflow-x:auto;">
<a class="tambah" href="{{route(
'dokter1461900124.create')}}"> Tambah Data Dokter </a>
<table>
<thead>
<tr>
<th>No</th>
<th>ID</th>
<th>Nama Dokter</th>
<th>Jabatan</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php $no=1; ?>
@foreach ($dokter as $dokter)
<tr>
<td>{{$no++}}</td>
<td>{{$dokter->id}}</td>
<td>{{$dokter->nama}}</td>
<td>{{$dokter->jabatan}}</td>
<td>
<a href="">Edit </a>
|
<a href=""> Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</body>
