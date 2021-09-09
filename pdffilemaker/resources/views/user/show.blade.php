@extends('template')
  
@section('content')
    <div class="row mt-2 mb-4">
        <div class="col-lg-12 margin-tb">
            <div class="float-left p-4">
                <h2> Show Post</h2>
            </div>
            <div class="float-right p-4">
                <a class="btn btn-secondary" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-md-center">
        <div class="card" style="width: 40rem;">
            <div class="card-body">
                <img src="{{ asset('image/'.$user->filename) }}" class="card-img-top mx-auto d-block" style="height:200px; width:250px"/>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Nama : {{ $user->nama }}&emsp;&emsp;Nama : {{ $user->nama }}</h5>
                <br/>
                <h5 class="card-title text-center">Alamat : {{ $user->alamat }}&emsp;&emsp;Lokasi : {{ $user->alamat }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5>Jenis : {{ $user->jenis }}</h5></li>
                <li class="list-group-item"><h5>Ukuran : {{ $user->panjang }}x{{ $user->lebar }}x{{ $user->sisi }}</h5></li>
                <li class="list-group-item"><h5>Jumlah : {{ $user->jumlah }}</h5></li>
                <li class="list-group-item"><h5>Kelas Jalan : {{ $user->kelas_jalan }}</h5></li>
                <li class="list-group-item"><h5>Tarif Pajak : {{ $user->tarif_pajak }}</h5></li>
                <li class="list-group-item"><h5>Tarif Jambong : {{ $user->tarif_jam }}</h5></li>
                <li class="list-group-item"><h5>Listrik : {{ $user->listrik }}</h5></li>
                <li class="list-group-item"><h5>Jumlah Pajak : {{ $user->subtot_pajak }}</h5></li>
                <li class="list-group-item"><h5>Jumlah Jambong : {{ $user->subtot_jam1 }}</h5></li>
            </ul>
            
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $user->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                {{ $user->alamat }}
            </div>
        </div>
    </div> -->
@endsection