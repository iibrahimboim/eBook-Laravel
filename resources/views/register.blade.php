@extends('layout.app')

@section('content')
<form action="{{ route('register.store') }}" method="post" class="form-fieldset w-50 bg-white mx-auto mt-5">
    @csrf
  <div class="mb-3">
    <label class="form-label required">Nama Lengkap</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid" @enderror" autocomplete="off"
    value="{{ old('name') }}" />
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
  </div>
  <div class="mb-3">
    <label class="form-label required">Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid" @enderror" autocomplete="off"
    value="{{ old('email') }}" />
    @error('password')
        <small class="text-danger">{{$message}}</small>
    @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="tel" name="password" clas  s="form-control @error('password') is-invalid" @enderror" autocomplete="off"
    value="{{ old('password') }}" />
    @error('password')
        <small class="text-danger">{{$message}}</small>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary w-100">Buat Akun</button>
</form>
@endsection
