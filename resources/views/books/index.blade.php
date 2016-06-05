@extends('views.barang')
@section('main')

<h1>Welcome to storage application</h1>
<p>{{link_to_route ('barang.create', 'Tambah Barang Baru' )}}</p>

@if ($booksList->count())
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nama Barang</th>
      <th>Banyak Barang</th>
      <th>Tanggal Masuk Barang</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($listbarang as $barang)
    <tr>
      <td>{{$barang->id}}</td>
      <td>{{$barang->namabarang}}</td>
      <td>{{$barang->banyakbarang}}</td>
      <td>{{$barang->tanggalbarang}}</td>
    </tr>

    <td>
      {{link_to_route('barang.show', 'Read', array($barang->id), array('class' => 'btn btn-primary'))}}
    </td>

    <td>
      {{link_to_route('barang.edit','Update', array($barang->id),array ('class'=>'btn btn-warning'))}}
    </td>

    <td>
      {{ Form::open(array('method=>"DELETE", 'route'=>array(barang.destroy)))}}
      {{ Form::submit('Delete', array ('class'=>'btn btn-danger'))}}
      {{ Form::close()}}
    </td>

    @endforeach

  </tbody>
</table>

@else
  Belum ada barang apapun
@endif

@stop
