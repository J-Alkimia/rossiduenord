<?php

namespace App\Http\Controllers\Business;

use App\{File, Folder};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(File $file)
    {
        $folders = Folder::all();
        return view('business.file_storage.create', compact('folders', 'file'));
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

        $business_file = Storage::put('business_file', $validated['file']);
        $validated['file'] = $business_file;

        $folder = $validated['folder_id'];
        File::create($validated);
        return redirect()->route('business.folder.show', compact('folder'))->with('message', "Nuovo file inserito!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        return view('business.file_storage.show', compact('file'));
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
        return view('business.file_storage.edit', compact('file', 'folders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        $validated = $request->validate([
            'title' => 'nullable | string',
            'folder_id' => 'nullable | integer | exists:folders,id',
            'file' => 'nullable',
        ]);

        if (array_key_exists('file', $validated)) {
            Storage::delete($file->file);
            $business_file = Storage::put('business_file', $validated['file']);
            $validated['file'] = $business_file;
        }

        $file->update($validated);
        $folder = $validated['folder_id'];
        return redirect()->route('business.folder.show', compact('folder'))->with('message', "file modificato!");
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
