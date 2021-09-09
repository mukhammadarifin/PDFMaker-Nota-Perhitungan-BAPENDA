@extends('home')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('admin.update', $row) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama User <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name', $row->name) }}" />
                <p class="form-text">Kosongkan jika tidak ingin mengubah nama.</p>
            </div>
            <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{ old('email', $row->email) }}" />
                <p class="form-text">Kosongkan jika tidak ingin mengubah email.</p>
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
                <p class="form-text">Kosongkan jika tidak ingin mengubah password.</p>
            </div>
            <div class="form-group">
                <label>Level <span class="text-danger">*</span></label>
                <select class="form-control" name="role" />
                @foreach($roles as $key => $val)
                @if($key==old('level', $row->level))
                <option value="{{ $key }}" selected>{{ $val }}</option>
                @else
                <option value="{{ $key }}">{{ $val }}</option>
                @endif
                @endforeach
                </select>
                <p class="form-text">Kosongkan jika tidak ingin mengubah level.</p>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('admin.index') }}">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection