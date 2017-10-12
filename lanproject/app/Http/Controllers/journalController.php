<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\journal;

use Carbon\Carbon;

use Toastr;

use Alert;

class journalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('journal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('journal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'author'=>'required',
            'title'=>'required',
            'tglterbit'=>'required',
            'abstract'=>'required',
            'references'=>'required',
            'file'=>'required|mimes:pdf,doc,ppt,jpg,jpeg,png,xls,docx,pptx,xlsx,rar,zip|max:100000|file',
        ]);
         $data = journal::create($request->all());
         $file       = $request->file('file');
         $fileName   = md5($file->getClientOriginalName().Carbon::now()).$file->getClientOriginalName();
         $request->file('file')->move("file/journal/", $fileName);
         $data->file = $fileName;
         $data->save();
         Toastr::success('Aksi Berhasil', 'Tambah Journal Berhasil');
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $journal = journal::find($id);
        return view('journal.edit', compact('journal'));
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
      $this->validate($request,[
          'author'=>'required',
          'title'=>'required',
          'tglterbit'=>'required',
          'abstract'=>'required',
          'references'=>'required',
          'file'=>'mimes:pdf,doc,ppt,jpg,jpeg,png,xls,docx,pptx,xlsx,rar,zip|max:100000|file',
      ]);
       $data = journal::findOrFail($id);
       $update = $data->update($request->all());
       if ($request->hasfile('file')) {
           if($data->file <> '') $this->deleteFile($data->file);
           $file       = $request->file('file');
           $fileName   = md5($file->getClientOriginalName().Carbon::now()).$file->getClientOriginalName();
           $request->file('file')->move("file/journal/", $fileName);
           $data->file = $fileName;
           $data->save();
       }
       Toastr::success('Aksi Berhasil', 'Edit Journal Berhasil');
       return redirect('journals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = journal::findOrFail($id);
        \File::move('file/journal/'.$data->file,'file/journal/deleted/'.$data->file);
        $data->delete();
        Toastr::success('Aksi Berhasil', 'Delete Journal Berhasil');
        return redirect()->back();
    }
    public function deleteFile($filename)
     {
       $path =  'file/journal/';
       return \File::delete($path.$filename);
     }
}
