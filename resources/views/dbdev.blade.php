<!-- UNTUK HALAMAN INDEX PADA SQLCONTROLLER -->

<!DOCTYPE html>
<html>
<head>
	<title> Menampilkan table dari SQL </title>
</head>
<body>
 
	{{-- <form action="/dbdev" method="get"> --}}
	<div class="container">
		<center>
			<h4> Export Laporan Excel </h4>
		</center>
		
	<a href="/dbdev/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

	<!-- untuk ngebuat tampilan table & kolom kolom yang ada didalamnya -->
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>PurchasingDoc</th>
				<th>CompanyCode</th>
				<th>PurchDocCategory</th>
				<th>PurchDocType</th>
				<th>ControlIndicator</th>
				<th>DeletionIndicator</th>
				<th>Status</th>
				<th>CreatedOn</th>
				<th>CreatedBy</th>
				<th>ItemNumberInterval</th>
				<th>LastItem</th>
				<th>Vendor</th>
			</tr>
		</thead>

		<tbody>
			<!-- untuk inisialisasi -->
			@php $i=1 @endphp
			@foreach ($dbdev as $d)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$d->PurchasingDoc}}</td>
				<td>{{$d->CompanyCode}}</td>
				<td>{{$d->PurchDocCategory}}</td>
				<td>{{$d->PurchDocType}}</td>
				<td>{{$d->ControlIndicator}}</td>
				<td>{{$d->DeletionIndicator}}</td>
				<td>{{$d->Status}}</td>
				<td>{{$d->CreatedOn}}</td>
				<td>{{$d->CreatedBy}}</td>
				<td>{{$d->ItemNumberInterval}}</td>
				<td>{{$d->LastItem}}</td>
				<td>{{$d->Vendor}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>

</body>
</html>