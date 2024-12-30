@extends('layouts.admin')

@section('title')
Contact Us | 
@endsection

@section('style')
  @include('layouts.includes.datatablesCss') 
@endsection

@section('content')
  <div class="body flex-grow-1">
    <div class="container-lg px-4">
      <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            Contact Us List
          </div>
          <div class="card-body">
          {!! $dataTable->table(['class' => 'table table-striped'], false) !!}
          </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  @include('layouts.includes.datatablesJs') 
  @include('layouts.includes.deleteFunction')
@endsection