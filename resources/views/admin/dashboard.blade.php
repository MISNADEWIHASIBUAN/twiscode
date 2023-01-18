@extends('layouts.app', ['title' => 'Dashboard', 'page' => 'dashboard'])

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Pages</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>
  </ol>
</nav>
@endsection

@section('content')
Dashboard
@endsection