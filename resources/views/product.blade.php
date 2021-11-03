@extends('adminapp.master')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">nama</th>
      <th scope="col">harga</th>
      <th scope="col">jumlah</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $product->nama }}</td>
            <td>{{ $product->harga }}</td>
            <td>{{ $product->jumlah }}</td>
            <td>
              <a href="{{ route('productDelete', $product->id) }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection