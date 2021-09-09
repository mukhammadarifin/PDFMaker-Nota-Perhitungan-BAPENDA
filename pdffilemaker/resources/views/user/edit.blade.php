@extends('template')
  
@section('content')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="row mt-5 mb-5">
                    <div class="col-lg-11 margin-tb">
                        <div class="float-left">
                            <h2>Edit Post</h2>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-secondary" href="{{ route('user.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        
            <div class="card-body">
                <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Nama:</strong>
                                <input type="text" name="nama" value="{{ $user->nama }}" class="form-control" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Alamat:</strong>
                                <input type="text" name="alamat" value="{{ $user->alamat }}" class="form-control" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Jenis:</strong>
                                <input type="text" name="jenis" value="{{ $user->jenis }}" class="form-control" placeholder="Jenis" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Panjang:</strong>
                                <input type="text" name="panjang" value="{{ $user->panjang }}" class="form-control" placeholder="Panjang" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Lebar:</strong>
                                <input type="text" name="lebar" value="{{ $user->lebar }}" class="form-control" placeholder="Lebar" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Sisi:</strong>
                                <input type="text" name="sisi" value="{{ $user->sisi }}" class="form-control" placeholder="Sisi" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Jumlah:</strong>
                                <input type="text" name="jumlah" value="{{ $user->jumlah }}" class="form-control" placeholder="Jumlah" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Kelas Jalan:</strong>
                                <input type="text" name="kelas_jalan" value="{{ $user->kelas_jalan }}" class="form-control" placeholder="Kelas Jalan" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Tarif Pajak:</strong>
                                <input type="text" name="tarif_pajak" value="{{ $user->tarif_pajak }}" class="form-control" placeholder="Tarif Pajak" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Tarif Jambong:</strong>
                                <input type="text" name="tarif_jam" value="{{ $user->tarif_jam }}" class="form-control" placeholder="Tarif Jambong" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Tarif Pajak:</strong>
                                <input type="text" name="tarif_pajak" value="{{ $user->tarif_pajak }}" class="form-control" placeholder="Tarif Pajak" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Listrik:</strong>
                                <input type="text" name="listrik" value="{{ $user->listrik }}" class="form-control" placeholder="Listrik" required>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                <strong>Foto:</strong>
                                <input type="file" name="filename" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                            <img src="{{ asset('image/'.$user->filename) }}" class="card-img-top mx-auto d-block" style="height:200px; width:250px"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection