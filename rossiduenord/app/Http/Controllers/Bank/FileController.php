<?php

namespace App\Http\Controllers\Bank;

use App\File;
use App\Folder;
use App\User;
use App\Http\Middleware\Bank;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class FileController extends Controller
{
    //$files = File::where('id', Auth::user()->id)->get();

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $folders = Folder::all();
        return view('bank.file_storage.create', compact('folders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required | string',
            'folder_id' => 'required | integer | exists:folders,id',
            'file' => 'required',
        ]);

        $bank_file = Storage::put('banc_file', $validated['file']);
        $validated['file'] = $bank_file;

        File::create($validated);
        return redirect()->route('bank.folder.show')->with('message', "Nuovo file inserito!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {

        return view('bank.file_storage.show', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        $folders = Folder::all();
        return view('bank.file_storage.edit', compact('file', 'folders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file, Folder $folder)
    {
        $validated = $request->validate([
            'title' => 'nullable | string',
            'folder_id' => 'nullable | integer | exists:folders,id',
            'file' => 'nullable',
        ]);
        //dd($validated);
        if($request->hasFile('file')){
            $bank_file = Storage::put('banc_file', $validated['file']);
            $validated['file'] = $bank_file;
        }
        $file->update($validated);
        $folder = $validated['folder_id'];
        return redirect()->route('bank.folder.show', compact('folder'))->with('message', "file modificato!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = File::find($id);
        $file->delete();
        return redirect()->back()->with('message', "Il file e stato eliminato!");
    }
}
