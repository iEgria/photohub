<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotosController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'fotos' => Foto::with('user')->get()
        ]);
    }

    public function index()
    {
        return view('dashboard', [
            'fotos' => Auth::user()->role == 'A' ? Foto::with('user')->get() : Foto::with('user')->where('users_id', Auth::user()->id)->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'mimes:jpeg,bmp,png,gif,svg|max:4096|required',
        ]);

        $requestData = $request->all();
        $requestData['foto'] = str_replace('public', 'storage', $request->file('foto')->store('public/images'));
        $requestData['users_id'] = Auth::user()->id;

        Foto::create($requestData);
        return redirect()->route('dashboard')->with('success', ' Data telah diperbaharui!');
    }

    public function update(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'mimes:jpeg,bmp,png,gif,svg|max:4096',
        ]);

        $requestData = $request->all();
        if ($request->hasFile('foto')) {
            $requestData['foto'] = str_replace('public', 'storage', $request->file('foto')->store('public/images'));
        }
        Foto::findOrFail($request->post('foto_id'))->update($requestData);
        return redirect()->route('dashboard')->with('success', ' Data telah diperbaharui!');
    }

    public function delete($id)
    {
        return Foto::findOrFail($id)->delete();
    }
}
