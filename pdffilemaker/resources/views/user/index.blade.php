@extends('template')
  
@section('content')
    <div class="row mt-2 mb-4">
        <div class="col-lg-12 margin-tb">
            <div class="float-left p-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Logo_Kota_Malang_color.png" class="img" alt="image" width="100" height="100"/>
            </div>
            <div class="justify-content-center p-4">
                <h2>Nota Perhitungan Sementara PDF Maker</h2>
                
            </div>
            <div class="float-right p-4">
                <a class="btn btn-success" href="{{ route('user.create') }}"><i class="bi bi-file-plus"></i> Tambah Reklame</a>
            </div>
        </div>
    </div>
  
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card card-default">
        <div class="card-body p-4 table-responsive">

            <form class="form" method="get" action="{{ route('user.index') }}">
                <div class="form-group w-100 mb-3">
                    <input type="text" name="search" class="form-control w-100 d-inline" id="search" placeholder="Masukkan keyword">
                </div>
                <div class="form-group w-60 mb-3">
                    <button type="submit" class="btn btn-success mb-1"><i class="bi bi-recycle"></i> Refresh</button>
                    <button type="submit" class="btn btn-primary mb-1"><i class="bi bi-search"></i> Cari</button>
                    <a type="submit" class="btn btn-danger mb-1 float-right" target="_blank" href="{{ URL::to('/user/cetak') }}"><i class="bi bi-printer"></i> Export to PDF</a>
                </div>
            </form>

            <table class="table table-bordered table-striped table-sm table-hover mb-4">
                <tr>
                    <th width="20px" class="text-center">No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis</th>
                    <th>Panjang</th>
                    <th>Lebar</th>
                    <th>Sisi</th>
                    <th>Jumlah</th>
                    <th>Kelas Jalan</th>
                    <th>Tarif Pajak</th>
                    <th>Tarif Jambong</th>
                    <th>Listrik</th>
                    <th>Jumlah Pajak</th>
                    <th>Jumlah jambong</th>
                    <th>Gambar</th>
                    <th width="150px"class="text-center">Action</th>
                </tr>
                @foreach ($user as $noprit)
                <tr>
                    <td class="text-center">{{ $user->count() * ($user->currentPage() - 1) + $loop->iteration }}</td>
                    <td>{{ $noprit->nama }}</td>
                    <td>{{ $noprit->alamat }}</td>
                    <td>{{ $noprit->jenis }}</td>
                    <td>{{ $noprit->panjang }}</td>
                    <td>{{ $noprit->lebar }}</td>
                    <td>{{ $noprit->sisi }}</td>
                    <td>{{ $noprit->jumlah }}</td>
                    <td>{{ $noprit->kelas_jalan }}</td>
                    <td>Rp. {{ $noprit->tarif_pajak }}</td>
                    <td>Rp. {{ $noprit->tarif_jam }}</td>
                    <td>Rp. {{ $noprit->listrik }}</td>
                    <td>Rp. {{ $noprit->subtot_pajak }}</td>
                    <td>Rp. {{ $noprit->subtot_jam1 }}</td>
                    <td class="text-center"><image src="{{ asset('image/'.$noprit->filename) }}" style="height:200px; width:250px"/></td>
                    <td class="text-center">
                        <form action="{{ route('user.destroy',$noprit->id) }}" method="POST">
        
                            <a class="btn btn-info btn-sm" href="{{ route('user.show',$noprit->id) }}"><i class="bi bi-envelope-open" style="font-size:150%"></i></a>
        
                            <a class="btn btn-primary btn-sm" href="{{ route('user.edit',$noprit->id) }}"><i class="bi bi-pencil-square" style="font-size:150%"></i></a>
        
                            @csrf
                            @method('DELETE')
        
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" ><i class="bi bi-trash"  style="font-size:150%"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

            <div class="d-flex justify-content-center">
                {!! $user->links() !!}
            </div> 

        </div>
    </div>
  
@endsection