<?php

namespace App\Http\Controllers;

use App\Models\CodeArsip;
use Illuminate\Http\Request;

class CodeArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codearsip=CodeArsip::get();
        return view('admin.codearsip.index',compact('codearsip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.codearsip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CodeArsip::create([
            'code'=>$request->code,
            'name'=>$request->name
        ]);
        return redirect('codearsip');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CodeArsip  $codeArsip
     * @return \Illuminate\Http\Response
     */
    public function show(CodeArsip $codearsip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CodeArsip  $codeArsip
     * @return \Illuminate\Http\Response
     */
    public function edit(CodeArsip $codearsip)
    {
        return view('admin.codearsip.edit',compact('codearsip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CodeArsip  $codeArsip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CodeArsip $codearsip)
    {
        $codearsip->update([
            'code'=>$request->code,
            'name'=>$request->name
        ]);
        return redirect('codearsip');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CodeArsip  $codeArsip
     * @return \Illuminate\Http\Response
     */
    public function destroy(CodeArsip $codearsip)
    {
        $codearsip->delete();
        
    }
}
