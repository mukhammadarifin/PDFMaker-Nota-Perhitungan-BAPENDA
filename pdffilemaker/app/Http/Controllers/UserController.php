<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Noprit;
use Illuminate\Support\Facades\Hash;
use PDF;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $keyword = $request->search;
        $user = Noprit::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
  
        return view('user.index')->with('user', $user);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $nm = $request->filename;
        $namaFile = $nm->getClientOriginalName();
        
        //dd('berhasil');

        $noprit = new Noprit;
        $noprit->nama = $data['nama'];
        $noprit->alamat = $data['alamat'];
/*         $noprit->save();

        $detailnoprit = new DetailNoprit;
        $noprit->noprit_id = $noprit->id; */
        $noprit->jenis = $data['jenis'];
        $noprit->panjang = $data['panjang'];
        $noprit->lebar = $data['lebar'];
        $noprit->sisi = $data['sisi'];
        $noprit->jumlah = $data['jumlah'];
        $noprit->kelas_jalan = $data['kelas_jalan'];
        $noprit->listrik = $data['listrik'];
        $noprit->tarif_pajak = $data['tarif_pajak'];
        $noprit->tarif_jam = $data['tarif_jam'];
        $noprit->subtot_pajak = $data['panjang'] * $data['lebar'] * $data['sisi'] * $data['jumlah'] * $data['tarif_pajak'];
        $noprit->subtot_jam1 = $data['panjang'] * $data['lebar'] * $data['jumlah'] * $data['tarif_jam'];
        $noprit->subtot_jam2 = $data['panjang'] * $data['lebar'] * $data['jumlah'] * $data['tarif_jam'] + $data['listrik'];
        $noprit->filename =  $namaFile;

        $nm->move(public_path().'/image', $namaFile);
        
        $noprit->save();

        
        /* if($data['jenis'] > 0)
        {
            foreach ($data['jenis'] as $item => $value) {
                
                $data2 = array(
                    'noprit_id' => $noprit->id,
                    'jenis' => $data['jenis'][$item],
                    'panjang' => $data['panjang'][$item],
                    'lebar' => $data['lebar'][$item],
                    'sisi' => $data['sisi'][$item],
                    'jumlah' => $data['jumlah'][$item],
                    'listrik' => $data['listrik'][$item],
                    'tarif_pajak' => $data['tarif_pajak'][$item],
                    'tarif_jam' => $data['tarif_jam'][$item],
                );
                
                DetailNoprit::create($data2);
            }
        } */

        return redirect()->route('user.index')
                        ->with('success','Pembuatan Data Berhasil.');
    }

    public function show(Noprit $user)
    {
        return view('user.show',compact('user'));
    }

    public function edit($id)
    {
        $user = Noprit::findorfail($id);
        return view('user.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $ubah = Noprit::findorfail($id);
        $awal = $ubah->filename;

        $user = [
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'jenis' => $request['jenis'],
            'panjang' => $request['panjang'],
            'lebar' => $request['lebar'],
            'sisi' => $request['sisi'],
            'jumlah' => $request['jumlah'],
            'kelas_jalan' => $request['kelas_jalan'],
            'listrik' => $request['listrik'],
            'tarif_pajak' => $request['tarif_pajak'],
            'tarif_jam' => $request['tarif_jam'],
            'filename' => $awal,
        ];

        $request->filename->move(public_path().'/image', $awal);
        $ubah->update($user);
  
        return redirect()->route('user.index')
                        ->with('success','Updated successfully');
    }

    public function destroy($id)
    {
        $hapus = Noprit::findorfail($id);

        $file = public_path('/image/').$hapus->filename;
        
        if (file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();
  
        return redirect()->route('user.index')
                        ->with('success','Deleted successfully');
    }

    public function cetakPDF()
    {
        $user = Noprit::all();
  
        view()->share('user', $user);
        $pdf_doc = PDF::loadview('user.cetak', $user);

        /* return $pdf_doc->download('cetak.pdf'); */
        return $pdf_doc->stream('List Reklame.pdf');
    }
}
