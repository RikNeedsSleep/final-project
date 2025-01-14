@extends('template_backend.home')
@section('title', 'List Product')
@section('content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session('success') }}
    </div>
  @endif

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="welcome-wrapper shadow-reset res-mg-t mg-b-30">
      <a href="{{ route('create.mobil') }}" class="btn btn-primary btn-sm">Tambah Product</a><br><br>
      <table class="table table-striped table-hover table-sm table-bordered">
        <tr>
          <th>No</th>
          <th>Kategori</th>
          <th>Nama Product</th>
          <th>Harga</th>
          <th>Thumbnail</th>
          <th>Action</th>
        </tr>
        @foreach ($mobil as $result => $d)
          <tr>
            <td>{{ $result + $mobil->firstitem() }}</td>
            <td>{{ $d->merek->name }}</td>
            <td>{{ $d->type }}</td>
            <td>Rp. {{ $d->price }}</td>
            <td>
              <img src="{{ asset( $d->gambar ) }}" class="img-fluid" width="100" alt="">
            </td>
            <td>
              <form action="{{ route('mobil.destroy', $d->id) }}" method="post">
                @csrf
                @method('delete')
                <a href="{{ route('mobil.edit', $d->id) }}" class="btn btn-success btn-sm">Edit</a>
                <button type="submit" class="btn btn-danger btn-sm" name="button">Hapus</button>
              </form>
            </td>
          </tr>
        @endforeach
      </table>
      {{ $mobil->links() }}
    </div>
  </div>
@endsection
