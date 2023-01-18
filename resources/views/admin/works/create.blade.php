@extends('layouts.app', ['title' => 'Create Works', 'page' => 'work'])

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Pages</a>
    </li>
    <li class="breadcrumb-item active">Works</li>
  </ol>
</nav>
@endsection

@section('content')
  <div class="card">
    <div class="card-header">Tambah Data Pekerjaan</div>
    <div class="card-body">
      <form action="{{ route('work.store') }}" method="POST" autocomplete="off">
        @csrf
        <div class="mb-3">
          <label class="form-label" for="basic-icon-default-name">Nama Pekerjaan</label>
          <div class="input-group input-group-merge">
            <span id="basic-icon-default-name2" class="input-group-text"
              ><i class="bx bxs-briefcase"></i
            ></span>
            <input
              type="text"
              class="form-control"
              id="basic-icon-default-name"
              name="nama"
              value="{{ old('nama') }}"
              placeholder="..."
              aria-label="..."
              aria-describedby="basic-icon-default-name2"
              required
            />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-icon-default-description">Deskripsi</label>
          <div class="input-group input-group-merge">
            <span id="basic-icon-default-description2" class="input-group-text"
              ><i class="bx bx-comment"></i
            ></span>
            <textarea
              id="basic-icon-default-description"
              class="form-control"
              name="deskripsi"
              placeholder="..."
              aria-label="..."
              aria-describedby="basic-icon-default-description2"
            >{{ old('deskripsi') }}</textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
    </div>
  </div>
@endsection