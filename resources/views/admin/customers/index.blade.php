@extends('layouts.app', ['title' => 'Works', 'page' => 'customer'])

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
    <h5 class="card-header">List Pelanggan <a href="{{ route('customer.create') }}"><button class="btn rounded-pill btn-primary float-end mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 26 26" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg> Pelanggan</button></a></h5>
    <div class="table-responsive text-nowrap px-4 py-3">
      <table class="table" id="customer-table">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Logo</th>
            <th>Nama Perusahaan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($customers as $customer)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                  <img src="{{ asset('/') . $customer->logo }}" style="height: 100px;" alt="">
                </td>
                <td class="text-wrap">
                  <div class="me-3">
                    {{ $customer->nama_perusahaan }}
                  </div> 
                </td>
                <td class="text-end">
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('customer.edit', $customer->id) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <form action="{{ route('customer.destroy', $customer->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="dropdown-item">
                          <i class="bx bx-trash me-1"></i> Delete
                        </button>
                      </form>
                      {{-- <a class="dropdown-item" href="#" onclick="openModal('{{ $customer->id }}', '{{ $customer->name }}', '{{ $customer->customername }}')"> <i class="bx bx-trash me-1"></i> Delete</a> --}}
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
        $("#customer-table").DataTable({
          processing: true,
          'pageLength': 4,
          "responsive": true, "lengthChange": false, "autoWidth": false,
        });
    </script>
@endpush