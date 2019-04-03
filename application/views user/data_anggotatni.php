<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<h1>Latihan CRUD</h1>

	<a href="data/add" class="btn btn-primary">Tambah Data Anggota Tni</a>

	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>pangkat</th>
				<th>jabatan</th>
				<th>nrp</th>
				<th>korps</th>
				<th>satuan</th>
				<th>matra</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($list_karyawan as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[name]</td>
					<td>$row[alamat]</td>
					<td>$row[email]</td>
					<td>$row[pangkat]</td>
					<td>$row[jabatan]</td>
					<td>$row[nrp]</td
					<td>$row[korps]</td>
					<td>$row[satuan]</td>
					<td>$row[matra]</td>
					<td>
						<a href='data/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
						<a href='data/delete/$row[id]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</div>
<script>
$(function (){$('#tablepersonel').DataTable({
"paging": true,
"lengthChange": true,
"searching": true,
"ordering": true,
"order": [[ 0, "desc" ]],
"info": true,
"autoWidth": false,
"dom": 'Bfrtip',
"buttons": [{
extend: 'excel',
className: 'fa fa-download',
messageTop: 'Data Personel',
text: ' Unduh Excel',
exportOptions: {
modifier: {
page: 'current'
},
columns: [0,1,2,3,4,5,6,7,8,9]

}
},
{
extend: 'print',
className: 'fa fa-print',
messageTop: 'Data Personel',
text: ' Print',
exportOptions: {
modifier: {
page: 'current'
},
columns: [0,1,2,3,4,5,6,7,8,9]
}

}],
"columnDefs": [
{
"targets": [2,3,7,9],
"visible": false,
"searchable": false
},
]
});
});


</script>	
</body>
</html>
