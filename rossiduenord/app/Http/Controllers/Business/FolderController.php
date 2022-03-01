<?php

namespace App\Http\Controllers\Business;

use App\{Folder, User, File};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Folder $folder)
    {
        $folders = Folder::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('business.folder_file.index', compact('folder', 'folders'));

/*         $folders = Folder::select(
            'folders.created_at',
            'folders.created_by',
            'folders.id',
            'folders.user_id',
            'folders.name',
            'folders.type',
        )
            ->join('users', 'users.created_by', '=', 'folders.created_by')
            ->orderBy('created_at', 'DESC')->paginate(10);
 */        //dd($folders);
        return view('business.folder_file.index', compact('folders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Folder $folder, User $user)
    {
        $users = User::all();
        return view('business.folder_file.create', compact('folder', 'users', 'user'));
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
            'name' => 'required | string',
            'type' => 'required | string ',
        ]);

        $created_by = Auth::user()->name;
        $validated['created_by'] = $created_by;

        $folder = new Folder($validated);
        $id = auth()->user()->id;
        $folder->user()->associate($id)->save();
        return redirect()->route('business.folder.index')->with('message', "Nuova Cartella: $folder->name inserita!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function show(Folder $folder, File $file)
    {
        $files = File::where('folder_id', '=', $folder->id)->orderBy('created_at', 'DESC')->paginate(10);

        return view('business.folder_file.show', compact('folder', 'files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function edit(Folder $folder)
    {
        return view('business.folder_file.edit', compact('folder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Folder $folder)
    {
        $validated = $request->validate([
            'name' => 'required | string',
            'type' => 'required | string ',
        ]);

        $folder->update($validated);
        return redirect()->route('business.folder.index')->with('message', "La cartella: $folder->name e stata modificata!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $folder = Folder::find($id);
        $folder->delete();
        return redirect()->back()->with('message', "La cartella: $folder->name e stata eliminata!");
    }
}
