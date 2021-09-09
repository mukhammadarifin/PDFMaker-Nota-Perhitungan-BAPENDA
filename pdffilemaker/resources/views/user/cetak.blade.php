<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Data Reklame</title>
        <style type="text/css">
            table.static{
                position: relative;
                border: 1px solid #543535;
            }
            .center{
                text-align: center;
            }
            .full{
                width: 100%;
            }
            .tab1{
                display: inline-block;
                margin-left: 76px;
            }
            .tab2{
                display: inline-block;
                margin-left: 68px;
            }
            .tab3{
                display: inline-block;
                margin-left: 83px;
            }
            .tab4{
                display: inline-block;
                margin-left: 67px;
            }
            .tab5{
                display: inline-block;
                margin-left: 69px;
            }
            .tab6{
                display: inline-block;
                margin-left: 42px;
            }
            .tab7{
                display: inline-block;
                margin-left: 44px;
            }
            .tab8{
                display: inline-block;
                margin-left: 22px;
            }
            .tab9{
                display: inline-block;
                margin-left: 73px;
            }
            .tab10{
                display: inline-block;
                margin-left: 30px;
            }
            .tab11{
                display: inline-block;
                margin-left: 10px;
            }
        </style>
    </head>
    <body>
        <div class="center full">
            <h3>Data Reklame</h3>
        </div>
        <div class="form group">
            <table class="static" align="center" rules="all" border="1px" width="700px" cellpadding="3">
                <tr>
                    <th width="20px" class="text-center">No</th>
                    <th width="250px">Keterangan</th>
                    <!-- <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis</th>
                    <th>Ukuran</th>
                    <th>Jumlah</th>
                    <th>Kelas Jalan</th>
                    <th>Tarif Pajak</th>
                    <th>Tarif Jambong</th>
                    <th>Listrik</th> -->
                    <th width="250px">Gambar</th>
                </tr>
                <?php $no = 1 ?>
                
                @foreach ($user as $noprit)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>
                        Nama<span class="tab1"></span>: {{ $noprit->nama }}<br>
                        Alamat<span class="tab2"></span>: {{ $noprit->alamat }}<br>
                        Jenis<span class="tab3"></span>:  {{ $noprit->jenis }}<br>
                        Ukuran<span class="tab4"></span>: {{ $noprit->panjang }} x {{ $noprit->lebar }} x {{ $noprit->sisi }}<br>
                        Jumlah<span class="tab5"></span>: {{ $noprit->jumlah }}<br>
                        Kelas Jalan<span class="tab6"></span>: {{ $noprit->kelas_jalan }}<br>
                        Tarif Pajak<span class="tab7"></span>: Rp. {{ $noprit->tarif_pajak }}<br>
                        Tarif Jambong<span class="tab8"></span>: Rp. {{ $noprit->tarif_jam }}<br>
                        Listrik<span class="tab9"></span>: Rp. {{ $noprit->listrik }}<br>
                        Jumlah Pajak<span class="tab10"></span>: Rp. {{ $noprit->subtot_pajak }}<br>
                        Jumlah jambong<span class="tab11"></span>: Rp. {{ $noprit->subtot_jam1 }}<br>
                    </td>
                    <!-- <td>{{ $noprit->nama }}</td>
                    <td>{{ $noprit->alamat }}</td>
                    <td>{{ $noprit->jenis }}</td>
                    <td>{{ $noprit->panjang }}x{{ $noprit->lebar }}x{{ $noprit->sisi }}</td>
                    <td>{{ $noprit->jumlah }}</td>
                    <td>{{ $noprit->kelas_jalan }}</td>
                    <td>{{ $noprit->tarif_pajak }}</td>
                    <td>{{ $noprit->tarif_jam }}</td>
                    <td>{{ $noprit->listrik }}</td> -->
                    <?php 
                    $foto = public_path('image/default.png');
                        if($noprit->filename!=null){
                            $foto = public_path('image/'.$noprit->filename);
                        }
                    ?>
                    <td><center><img src="{{ $foto }}" style="height:200px; width:250px"/></center></td>
                </tr>
                @endforeach
            </table>
        </div>
              
    </body>
</html>