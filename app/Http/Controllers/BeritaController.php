<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaController extends Controller
{
    // Fungsi Halaman Create Berita
    public function create()
    {
        return view('backend/berita/create');
    }

    // Fungsi Create Berita
    public function createAction(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:tbl_berita',
            'creator' => 'required',
            'poster' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'content' => 'required',
        ], [
            'title.required' => 'Judul berita harus diisi!',
            'slug.required' => 'Slug berita harus diisi!',
            'creator.required' => 'Nama Creator berita harus diisi!',
            'poster.image' => 'File yang anda upload bukan gambar!',
            'poster.mimes' => 'Ekstensi poster yang anda upload tidak sesuai!',
            'poster.max' => 'Ukuran poster maksimal 5 MB!',
            'content.required' => 'Konten berita harus diisi!',
        ]);

        $berita = new Berita([
            'title' => $request->title,
            'slug' => $request->slug,
            'creator' => $request->creator,
            'content' => $request->content,
        ]);

        if ($request->file('poster') == "") {
            $berita->poster = $berita->poster;
        } else {
            // Delete the old photo
            Storage::disk('uploads')->delete($berita->poster);

            // Store the new photo in the uplaods/berita directory
            $berita->poster = $request->file('poster')->store('berita', 'uploads');
        }

        $berita->save();

        return redirect('post-berita')->with('success', 'Data berita berhasil ditambahkan!');
    }

    // Fungsi View Berita
    public function berita(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_berita'] = Berita::where('title', 'like', '%' . $data['q'] . '%')->paginate(5);

        return view('backend/berita/index', $data);
    }

    // Fungsi Halaman Edit Berita
    public function editBerita($id)
    {
        $berita = Berita::find($id);

        if (!$berita) {
            return redirect()->back()->with('error', 'Data berita tidak ditemukan!');
        }

        return view('backend/berita/edit', compact('berita'));
    }

    // Fungsi Edit Berita
    public function update(Request $request, Berita $berita)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'roles' => 'required',
            'password' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Format email anda salah!',
            'roles.required' => 'Roles harus diisi!',
            'password.required' => 'Password harus diisi!',
        ]);

        $berita->nama = $validatedData['nama'];
        $berita->email = $validatedData['email'];
        $berita->roles = $validatedData['roles'];

        $berita->save();

        return redirect()->route('users')->with('success', 'Data berita berhasil diupdate!');
    }

    // Fungsi Delete Berita
    public function delete($id)
    {
        $berita = Berita::find($id);

        if ($berita->poster !== null) {
            Storage::disk('uploads')->delete($berita->poster);
        } else if (!$berita) {
            return redirect()->back()->with('error', 'Data berita tidak ditemukan!');
        }

        $berita->delete();

        return redirect()->back()->with('success', 'Data berita berhasil dihapus!');
    }

    // Fungsi check slug pada Berita
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
