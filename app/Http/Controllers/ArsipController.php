<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Pengunduh;
use App\Models\CodeArsip;
use App\Models\Category;
use Illuminate\Http\Request;
use Storage;
use View;
use Response;
class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        extract(request()->query());
        $arsip=Arsip::with('pembuat','category','codearsip');
        if ($ago??false) {
            if ($ago=='7day') {
                $date = \Carbon\Carbon::today()->subDays(7);
                $arsip->where('created_at','>=',$date);
            }else if ($ago=='lastmonth') {
                $month=\Carbon\Carbon::today()->subMonth(1)->format('m');
                $arsip->whereMonth('created_at','=',$month);
            }else if ($ago=='lastyear') {
                $year=\Carbon\Carbon::today()->subYear(1)->format('Y');
                $arsip->whereYear('created_at','=',$year);
            }
            $arsip=$arsip->latest()->get();
            return view('admin.arsip.laporan',compact('arsip'));
        }
        $arsip=$arsip->latest()->get();
        if (auth()->user()->role == 'user') {
            $view="admin.arsip.index_user";
        }else if(auth()->user()->role == 'petugas'){
            $view="admin.arsip.index_petugas";
        }else{
            $view="admin.arsip.index";
        }
        return view($view,compact('arsip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::get();
        return view('admin.arsip.create',compact('categories'));
    }
    public function getklasifikasi()
    {
        extract(request()->query());
        $name="-";
        if ($val??false) {
            $name=CodeArsip::where('code',$val)->first()->name;
        }
        return $name;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        extract($request->all());
        $data=[
        'category_id'=>$request->category_id,
        'kode'=>$request->kode,
          'user_id'=>auth()->id(),
          'namaarsip'=>$request->namaarsip,
          'keterangan'=>$request->keterangan,
    ];
    if($request->hasFile('file')){
        $path = $request->file('file')->store('public/berkas');
        $data['file'] = $path;
    }
    Arsip::create($data);
    return redirect('arsip');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function show(Arsip $arsip)
    {
        $ext=pathinfo($arsip->file, PATHINFO_EXTENSION);
        return view('admin.arsip.showfile',compact('arsip','ext'));
    }

    function downloadFile(Arsip $arsip){
        $arsip_id=$arsip->id;
        $user_id=auth()->id();
        $data=[
            'user_id'=>$user_id,
            'arsip_id'=>$arsip_id,
        ];
        //return $data;
        //dd('ok');
        Pengunduh::create($data); 
        $path = Storage::path($arsip->file);
  
        return response()->download($path);
  
    }
    public function downloadexcel()
    {
        extract(request()->query());
        $arsip=Arsip::with('pembuat','category','codearsip');
        if ($ago??false) {
            if ($ago=='7day') {
                $date = \Carbon\Carbon::today()->subDays(7);
                $arsip->where('created_at','>=',$date);
            }else if ($ago=='lastmonth') {
                $month=\Carbon\Carbon::today()->subMonth(1)->format('m');
                $arsip->whereMonth('created_at','=',$month);
            }else if ($ago=='lastyear') {
                $year=\Carbon\Carbon::today()->subYear(1)->format('Y');
                $arsip->whereYear('created_at','=',$year);
            }
        }
        $arsip=$arsip->latest()->get();
        return view('admin.arsip.index_excel',compact('arsip'));
    }


    public function detailunduhan(Arsip $arsip)
    {
        $arsip->load(['pengunduh','pengunduh.user:id,name']);
        // return $arsip;
        return view('admin.arsip.detailunduhan',compact('arsip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function edit(Arsip $arsip)
    {
        $categories=Category::get();
        return view('admin.arsip.edit',compact('arsip','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arsip $arsip)
    {
        extract($request->all());
        $data=[
        'category_id'=>$request->category_id,
        'kode'=>$request->kode,
          'user_id'=>auth()->id(),
          'namaarsip'=>$request->namaarsip,
          'keterangan'=>$request->keterangan,
    ];
    if($request->hasFile('file')){
        $path = $request->file('file')->store('public/berkas');
        $data['file'] = $path;
    }
    $arsip->update($data);
    return redirect('arsip');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arsip $arsip)
    {
        $arsip->delete();
    }
    public function downloadword(Request $request){
        extract(request()->query());
        $arsip=Arsip::with('pembuat','category','codearsip');
        if ($ago??false) {
            if ($ago=='7day') {
                $date = \Carbon\Carbon::today()->subDays(7);
                $arsip->where('created_at','>=',$date);
            }else if ($ago=='lastmonth') {
                $month=\Carbon\Carbon::today()->subMonth(1)->format('m');
                $arsip->whereMonth('created_at','=',$month);
            }else if ($ago=='lastyear') {
                $year=\Carbon\Carbon::today()->subYear(1)->format('Y');
                $arsip->whereYear('created_at','=',$year);
            }
        }
        $arsip=$arsip->latest()->get();
    
        $headers = array(
            "Content-type"        => "text/html",
            "Content-Disposition" => "attachment;Filename=report.doc"
        );
    
        $content =  View::make('admin.arsip.index_word', [
                        'arsip' => $arsip,
                    ])->render();
    
        return Response::make($content,200, $headers);
    }
}
