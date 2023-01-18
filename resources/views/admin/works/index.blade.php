@extends('layouts.app', ['title' => 'Works', 'page' => 'work'])

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
    <h5 class="card-header">List Pekerjaan <a href="{{ route('work.create') }}"><button class="btn rounded-pill btn-primary float-end mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 26 26" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg> Pekerjaan</button></a></h5>
    <div class="table-responsive text-nowrap px-4 py-3">
      <table class="table" id="work-table">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Nama Pekerjaan</th>
            <th>Deskripsi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($works as $work)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                  <div class="text-primary me-3">
                    {{ $work->title }}
                  </div> 
                </td>
                <td class="text-wrap">
                  <div class="me-3">
                    {{ $work->deskripsi }}
                  </div> 
                </td>
                <td class="text-end">
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('work.edit', $work->id) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <form action="{{ route('work.destroy', $work->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="dropdown-item">
                          <i class="bx bx-trash me-1"></i> Delete
                        </button>
                      </form>
                      {{-- <a class="dropdown-item" href="#" onclick="openModal('{{ $work->id }}', '{{ $work->name }}', '{{ $work->workname }}')"> <i class="bx bx-trash me-1"></i> Delete</a> --}}
                    </div>
                  </div>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
  </div>
@endsection

@push('js')
    <script>
        $("#work-table").DataTable({
          processing: true,
          'pageLength': 2,
          "responsive": true, "lengthChange": false, "autoWidth": false,
        });
    </script>
@endpush