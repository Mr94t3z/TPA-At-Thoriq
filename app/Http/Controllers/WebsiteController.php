<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\IdentitasLembaga;
use App\Models\KepalaPendidikan;
use App\Models\LuasTanah;
use App\Models\Pendukung;
use App\Models\PenggunaanLahan;
use App\Models\Siswa;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebsiteController extends Controller
{
    // Fungsi Halaman Profile
    public function home()
    {
        $profileData = IdentitasLembaga::first();

        $websiteData = Website::first();

        $beritaData = Berita::orderBy('created_at', 'desc')->take(2)->get();

        return view('frontend/website', compact('profileData', 'websiteData', 'beritaData'));
    }

    // Fungsi Halaman Profile
    public function profile()
    {
        $profileKepalaPendidikan = KepalaPendidikan::first();
        $profileData = IdentitasLembaga::first();
        $websiteData = Website::first();

        // Data untuk Statistik pada My Area Chart
        $countByKelas = Siswa::selectRaw('kelas, count(*) as total')->groupBy('kelas')->get();

        return view('frontend/profile', compact('profileKepalaPendidikan', 'profileData', 'websiteData', 'countByKelas'));
    }

    // Fungsi Halaman Berita
    public function berita()
    {
        $profileData = IdentitasLembaga::first();
        $websiteData = Website::first();

        $beritaData = Berita::orderBy('created_at', 'desc')->paginate(2);

        return view('frontend/berita', compact('profileData', 'websiteData', 'beritaData'));
    }

    // Fungsi Halaman Read Berita
    public function readBerita($slug)
    {
        $profileData = IdentitasLembaga::first();
        $websiteData = Website::first();

        $berita = Berita::where('slug', $slug)->first();

        if (!$berita) {
            return redirect()->back()->with('error', 'Data berita tidak ditemukan!');
        }

        return view('frontend/read', compact('profileData', 'websiteData', 'berita'));
    }

    // Fungsi Halaman Fasilitas
    public function fasilitas()
    {
        $fasilitasData = PenggunaanLahan::pluck('keterangan', 'milik');
        $profileData = IdentitasLembaga::first();
        $websiteData = Website::first();

        // Data untuk Statistik pada Pie Chart
        $luasTanah = LuasTanah::count();
        $penggunaanLahan = PenggunaanLahan::count();
        $sarprasPendukung = Pendukung::count();

        $no = 1;

        return view('frontend/fasilitas', compact('fasilitasData', 'no', 'profileData', 'websiteData', 'luasTanah', 'penggunaanLahan', 'sarprasPendukung'));
    }

    // Fungsi Halaman Manajemen Website
    public function website(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_website'] = Website::where('id', 'like', '%' . $data['q'] . '%')->get();

        return view('backend/website/index', $data);
    }

    // Fungsi Halaman Edit Manajemen Website
    public function editWebsite($id)
    {
        $website = Website::find($id);

        if (!$website) {
            return redirect()->back()->with('error', 'Data website tidak ditemukan!');
        }

        return view('backend/website/edit', compact('website'));
    }

    // Fungsi Edit Manajemen Website
    public function update(Request $request, Website $website)
    {
        $validatedData = $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'welcome_message' => 'nullable',
            'welcome_video' => 'nullable|file|mimes:mp4,3gp,mov,flv,avi,wmv|max:20000',
            'quote_message' => 'nullable',
            'quote_by' => 'nullable',
            'maps_latitude' => 'nullable',
            'maps_longitude' => 'nullable',
            'maps_video' => 'nullable|file|mimes:mp4,3gp,mov,flv,avi,wmv|max:20000',
            'visi' => 'nullable',
            'visi_video' => 'nullable|file|mimes:mp4,3gp,mov,flv,avi,wmv|max:20000',
            'misi' => 'nullable',
            'misi_video' => 'nullable|file|mimes:mp4,3gp,mov,flv,avi,wmv|max:20000',
            'fasilitas_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'logo.image' => 'Logo harus berupa gambar!',
            'logo.mimes' => 'Logo harus berupa file gambar dengan format jpeg, png, jpg, gif, svg!',
            'logo.max' => 'Logo maksimal berukuran 1 MB!',
            'welcome_video.file' => 'Video Welcome Message harus berupa file!',
            'welcome_video.mimes' => 'Video Welcome Message harus berupa file video dengan format mp4, 3gp, mov, flv, avi, wmv!',
            'welcome_video.max' => 'Video Welcome Message maksimal berukuran 20 MB!',
            'maps_video.file' => 'Video Maps harus berupa file!',
            'maps_video.mimes' => 'Video Maps harus berupa file video dengan format mp4, 3gp, mov, flv, avi, wmv!',
            'maps_video.max' => 'Video Maps maksimal berukuran 20 MB!',
            'visi_video.file' => 'Video Visi harus berupa file!',
            'visi_video.mimes' => 'Video Visi harus berupa file video dengan format mp4, 3gp, mov, flv, avi, wmv!',
            'visi_video.max' => 'Video Visi maksimal berukuran 20 MB!',
            'misi_video.file' => 'Video Misi harus berupa file!',
            'misi_video.mimes' => 'Video Misi harus berupa file video dengan format mp4, 3gp, mov, flv, avi, wmv!',
            'misi_video.max' => 'Video Misi maksimal berukuran 20 MB!',
            'fasilitas_image.image' => 'Gambar Fasilitas harus berupa gambar!',
            'fasilitas_image.mimes' => 'Gambar Fasilitas harus berupa file gambar dengan format jpeg, png, jpg, gif, svg!',
            'fasilitas_image.max' => 'Gambar Fasilitas maksimal berukuran 2 MB!',
        ]);

        $website->welcome_message = $validatedData['welcome_message'];
        $website->quote_message = $validatedData['quote_message'];
        $website->quote_by = $validatedData['quote_by'];
        $website->maps_latitude = $validatedData['maps_latitude'];
        $website->maps_longitude = $validatedData['maps_longitude'];
        $website->visi = $validatedData['visi'];
        $website->misi = $validatedData['misi'];

        if ($request->file('logo') == "") {
            $website->logo = $website->logo;
        } else {
            // Delete the old photo
            Storage::disk('uploads')->delete($website->logo);

            // Store the new photo in the uploads/website directory
            $website->logo = $request->file('logo')->store('website', 'uploads');
        }

        if ($request->file('welcome_video') == "") {
            $website->welcome_video = $website->welcome_video;
        } else {
            // Delete the old photo
            Storage::disk('uploads')->delete($website->welcome_video);

            // Store the new photo in the uploads/website directory
            $website->welcome_video = $request->file('welcome_video')->store('website', 'uploads');
        }

        if ($request->file('maps_video') == "") {
            $website->maps_video = $website->maps_video;
        } else {
            // Delete the old photo
            Storage::disk('uploads')->delete($website->maps_video);

            // Store the new photo in the uploads/website directory
            $website->maps_video = $request->file('maps_video')->store('website', 'uploads');
        }

        if ($request->file('visi_video') == "") {
            $website->visi_video = $website->visi_video;
        } else {
            // Delete the old photo
            Storage::disk('uploads')->delete($website->visi_video);

            // Store the new photo in the uploads/website directory
            $website->visi_video = $request->file('visi_video')->store('website', 'uploads');
        }

        if ($request->file('misi_video') == "") {
            $website->misi_video = $website->misi_video;
        } else {
            // Delete the old photo
            Storage::disk('uploads')->delete($website->misi_video);

            // Store the new photo in the uploads/website directory
            $website->misi_video = $request->file('misi_video')->store('website', 'uploads');
        }

        if ($request->file('fasilitas_image') == "") {
            $website->fasilitas_image = $website->fasilitas_image;
        } else {
            // Delete the old photo
            Storage::disk('uploads')->delete($website->fasilitas_image);

            // Store the new photo in the uploads/website directory
            $website->fasilitas_image = $request->file('fasilitas_image')->store('website', 'uploads');
        }

        $website->save();

        return redirect()->route('website')->with('success', 'Data website berhasil diupdate!');
    }
}
