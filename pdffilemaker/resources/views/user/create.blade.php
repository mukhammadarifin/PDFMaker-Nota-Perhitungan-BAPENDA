@extends('template')
  
@section('content')
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <div class="row mt-2 mb-4">
            <div class="col-lg-10 margin-tb">
                <div class="float-left p-4">
                    <h2>Create New Post</h2>
                </div>
                <div class="float-right p-4">
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
        <div class="card card-default">
            <div class="card-body p-4 table-responsive">
                <div class="container">
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Nama</strong></label>
                                <div class="col-sm-5">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                                </div>   
                            </div>
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Alamat</strong></label>
                                <div class="col-sm-5">
                                    <input type="text" name="alamat" class="form-control" value="{{old('alamat')}}" placeholder="Alamat" required>
                                </div>   
                            </div>
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Jenis</strong></label>
                                <div class="col-sm-5">
                                    <input type="text" name="jenis" class="form-control" value="{{old('jenis')}}" placeholder="Jenis" required>
                                </div>   
                            </div>
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Panjang</strong></label>
                                <div class="col-sm-5">
                                    <input type="text" name="panjang" class="form-control" value="{{old('panjang')}}" placeholder="Panjang" required>
                                </div>   
                            </div>
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Lebar</strong></label>
                                <div class="col-sm-5">
                                    <input type="text" name="lebar" class="form-control" value="{{old('lebar')}}" placeholder="Lebar" required>
                                </div>   
                            </div>
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Sisi</strong></label>
                                <div class="col-sm-5">
                                    <input type="text" name="sisi" class="form-control" value="{{old('sisi')}}" placeholder="Sisi" required>
                                </div>   
                            </div>
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Jumlah</strong></label>
                                <div class="col-sm-5">
                                    <input type="text" name="jumlah" class="form-control" value="{{old('jumlah')}}" placeholder="Jumlah" required>
                                </div>   
                            </div>
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Kelas Jalan</strong></label>
                                <div class="col-sm-5">
                                    <input type="text" name="kelas_jalan" class="form-control" value="{{old('kelas_jalan')}}" placeholder="Kelas Jalan" required>
                                </div>   
                            </div>
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Tarif Pajak</strong></label>
                                <div class="col-sm-5">
                                    <input type="text" name="tarif_pajak" class="form-control" value="{{old('tarif_pajak')}}" placeholder="Tarif Pajak" required>
                                </div>   
                            </div>
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Tarif Jambong</strong></label>
                                <div class="col-sm-5">
                                    <input type="text" name="tarif_jam" class="form-control" value="{{old('tarif_jam')}}" placeholder="Tarif Jambong" required>
                                </div>   
                            </div>
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Listrik</strong></label>
                                <div class="col-sm-5">
                                    <input type="text" name="listrik" class="form-control" value="{{old('listrik')}}" placeholder="Listrik" required>
                                </div>   
                            </div>
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"><strong>Foto</strong></label>
                                <div class="col-sm-5">
                                    <input type="file" name="filename" class="form-control">
                                </div>   
                            </div>
                            <!-- <div class="form-group row justify-content-center">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-5">
                                    <a href="#" class="adddetailnoprit btn btn-primary float-right">Tambah Jenis</a>
                                </div>   
                            </div>

                            <div class="detailnoprit"></div>
 -->
                            <div class="form-group row mt-5 justify-content-center">
                                <div class="col-sm-5 col-md-7 text-center">
                                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script type="text/javascript">
            $('.adddetailnoprit').on('click', function()
            {
                adddetailnoprit();
            });

            function adddetailnoprit()
            {
                var  detailnoprit = '<div><div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label"><strong>Jenis</strong></label><div class="col-sm-5"><input type="text" name="jenis[]" class="form-control" value="{{old('jenis')}}" placeholder="Jenis" required></div></div><div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label"><strong>Panjang</strong></label><div class="col-sm-5"><input type="text" name="panjang[]" class="form-control" value="{{old('panjang')}}" placeholder="Panjang" required></div></div><div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label"><strong>Lebar</strong></label><div class="col-sm-5"><input type="text" name="lebar[]" class="form-control" value="{{old('lebar')}}" placeholder="Lebar" required></div></div><div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label"><strong>Sisi</strong></label><div class="col-sm-5"><input type="text" name="sisi[]" class="form-control" value="{{old('sisi')}}" placeholder="Sisi" required></div></div><div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label"><strong>Jumlah</strong></label><div class="col-sm-5"><input type="text" name="jumlah[]" class="form-control" value="{{old('jumlah')}}" placeholder="Jumlah" required></div></div><div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label"><strong>Tarif Pajak</strong></label><div class="col-sm-5"><input type="text" name="tarif_pajak[]" class="form-control" value="{{old('tarif_pajak')}}" placeholder="Tarif Pajak" required></div></div><div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label"><strong>Tarif Jambong</strong></label><div class="col-sm-5"><input type="text" name="tarif_jam[]" class="form-control" value="{{old('tarif_jam')}}" placeholder="Tarif Jambong" required></div></div><div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label"><strong>Listrik</strong></label><div class="col-sm-5"><input type="text" name="listrik[]" class="form-control" value="{{old('listrik')}}" placeholder="Listrik" required></div></div><div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label"></label><div class="col-sm-5"><a href="#" class="remove btn btn-danger float-right">Hapus</a></div></div></div>';
                $('.detailnoprit').append(detailnoprit);
            };

            $('.remove').live('click', function()
            {
                $(this).parent().parent().parent().remove();
            });
        </script>

    </body>
</html>
@endsection