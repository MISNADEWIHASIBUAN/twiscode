@extends('layouts.app', ['title' => 'Edit Customers Data', 'page' => 'customer'])

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Pages</a>
    </li>
    <li class="breadcrumb-item active">Customers</li>
  </ol>
</nav>
@endsection

@section('content')
  <div class="card">
    <div class="card-header">Ubah Data Perusahaan</div>
    <div class="card-body">
      <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
          <label class="form-label" for="basic-icon-default-name">Nama Perusahaan</label>
          <div class="input-group input-group-merge">
            <span id="basic-icon-default-name2" class="input-group-text"
              ><i class="bx bxs-briefcase"></i
            ></span>
            <input
              type="text"
              class="form-control"
              id="basic-icon-default-name"
              name="nama"
              value="{{ $customer->nama_perusahaan }}"
              placeholder="..."
              aria-label="..."
              aria-describedby="basic-icon-default-name2"
              required
            />
          </div>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Logo Perusahaan</label>
          <div class="input-group input-group-merge">
            <span id="formFile2" class="input-group-text"
              ><i class="bx bx-file"></i
            ></span>
            <input class="form-control" name="logo" type="file" value="" id="formFile" aria-describedby="formFile2" accept="image/*">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
    </div>
  </div>
@endsection