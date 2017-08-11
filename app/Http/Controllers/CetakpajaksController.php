<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cetakpajak;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade as PDF;

class CetakpajaksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if($request->ajax())
        {
            
            $cetakpajaks=Cetakpajak::select(['nospm','perusahaan','uraian','bruto']);


            return Datatables::of($cetakpajaks)
            ->addColumn('action',function($cetakpajak)
            {
                return view ('datatable._action2',
                [
                    //'model' => $cetakpajak,
                    // 'form_url' => route('cetakpajaks.destroy', $cetakpajak->nospm),
                    'lihat_url'=>route('cetakpajaks.show',$cetakpajak->nospm)
                ]);
            })
            ->make(true);
        }
        
        $html=$htmlBuilder

        ->addColumn(['data'=>'nospm', 'name'=>'nospm', 'title'=>'nospm'])
        ->addColumn(['data'=>'perusahaan', 'name'=>'perusahaan', 'title'=>'perusahaan'])
        ->addColumn(['data'=>'uraian', 'name'=>'uraian', 'title'=>'uraian', 'orderable'=>false])
        ->addColumn(['data'=>'bruto', 'name'=>'bruto', 'title'=>'Nilai Kotor', 'orderable'=>false])


        ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'Aksi', 'orderable'=>false, 'searchable'=>false]);
        
        return view('cetakpajaks.index')->with(compact('html'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nospm)
    {
        $hasil= $this->ubahdigit($nospm,5);
        
        $cetakpajak = Cetakpajak::find($hasil);


       



        return view('cetakpajaks.show')
        ->with(compact('hasil', 'cetakpajak'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ubahdigit($nomor, $jumlahdigit)
    {
        //
        $str_nomor = (string) $nomor;
        $hasil=str_repeat('0', ($jumlahdigit-strlen($str_nomor))).$str_nomor;

        return $hasil;



    }

        public function pph21($nospm)
    {
        $hasil= $this->ubahdigit($nospm,5);
        
        $cetakpajak = Cetakpajak::find($hasil);

        $pdf=PDF::loadview('cetakpajaks.pph21',compact('cetakpajak', 'hasil'))->setPaper('a4', 'portrait');
        
        return $pdf->stream('PPh21_'.$hasil);


        // return view('cetakpajaks.pph21')
        // ->with(compact('nospm','cetakpajak'));



    }

            public function pph22($nospm)
    {
        $hasil= $this->ubahdigit($nospm,5);
        
        $cetakpajak = Cetakpajak::find($hasil);

        $pdf=PDF::loadview('cetakpajaks.pph22',compact('cetakpajak', 'hasil'))->setPaper('a4', 'portrait');
        
        return $pdf->stream('PPh22_'.$hasil);


        // return view('cetakpajaks.pph21')
        // ->with(compact('nospm','cetakpajak'));



    }

            public function pph23($nospm)
    {
        $hasil= $this->ubahdigit($nospm,5);
        
        $cetakpajak = Cetakpajak::find($hasil);

        $pdf=PDF::loadview('cetakpajaks.pph23',compact('cetakpajak', 'hasil'))->setPaper('a4', 'portrait');
        
        return $pdf->stream('PPh23_'.$hasil);


        // return view('cetakpajaks.pph21')
        // ->with(compact('nospm','cetakpajak'));



    }

            public function pph4ayat2($nospm)
    {
        $hasil= $this->ubahdigit($nospm,5);
        
        $cetakpajak = Cetakpajak::find($hasil);

        $pdf=PDF::loadview('cetakpajaks.pph4ayat2',compact('cetakpajak', 'hasil'))->setPaper('a4', 'portrait');
        
        return $pdf->stream('PPh4Ayat2_'.$hasil);


        // return view('cetakpajaks.pph21')
        // ->with(compact('nospm','cetakpajak'));



    }

            public function ppn($nospm)
    {
        $hasil= $this->ubahdigit($nospm,5);
        
        $cetakpajak = Cetakpajak::find($hasil);

        $pdf=PDF::loadview('cetakpajaks.ppn',compact('cetakpajak', 'hasil'))->setPaper('a4', 'portrait');
        
        return $pdf->stream('PPN_'.$hasil);


        // return view('cetakpajaks.pph21')
        // ->with(compact('nospm','cetakpajak'));



    }
}
