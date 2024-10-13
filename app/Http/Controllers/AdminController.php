<?php

namespace App\Http\Controllers;

use App\Models\skill;
use App\Models\portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function admin()
    {
        $portofolios = portofolio::all();


        // Mengirim data ke view 'portofolio_index'
        return view('admin_portofolio', compact('portofolios'));
    }

    public function create()
    {
        return view('components.porto_create');
    }

    public function store(Request $request)
    {
        $requestData = $request->validate([
            "title" => "required",
            "image" => "required",
            "image2" => "nullable",
            "image3" => "nullable",
            "image4" => "nullable",
            "use" => "required",
            "link" => "nullable"
        ]);



        $portofolio = new portofolio();
        $portofolio->fill($requestData);
        $portofolio->image = $request->file('image')->store('public');
        if ($request->hasFile('image2')) {
            $portofolio->image2 = $request->file('image2')->store('public');
        }

        if ($request->hasFile('image3')) {
            $portofolio->image3 = $request->file('image3')->store('public');
        }

        if ($request->hasFile('image4')) {
            $portofolio->image4 = $request->file('image4')->store('public');
        }
        $portofolio->save();

        return back()->with('pesan', 'Portofolio Baru Telah Ditambahkan');
    }


    public function edit(string $id)
    {
        $data['portofolio'] = portofolio::findOrFail($id);
        return view('components.editporto_admin', $data);
    }

    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            "title" => "required",
            "image" => "required",
            "image2" => "nullable",
            "image3" => "nullable",
            "image4" => "nullable",
            "use" => "required",
            "link" => "nullable"
        ]);

        $portofolio = portofolio::findOrFail($id);
        $portofolio->fill($requestData);
        $portofolio->image = $request->file('image')->store('public');
        if ($request->hasFile('image2')) {
            $portofolio->image2 = $request->file('image2')->store('public');
        }

        if ($request->hasFile('image3')) {
            $portofolio->image3 = $request->file('image3')->store('public');
        }

        if ($request->hasFile('image4')) {
            $portofolio->image4 = $request->file('image4')->store('public');
        }
        $portofolio->save();

        return back()->with('pesan', 'Portofolio Baru Telah Diupdate');
    }

    public function destroy(string $id)
    {
        $portofolio = portofolio::findOrFail($id);
        if ($portofolio->image != null && Storage::exists($portofolio->image)) {
            Storage::delete($portofolio->image);
        }
        $portofolio->delete();
        return back()->with('pesan', 'Portofolio Telah Dihapus');
    }
    //method skills
    public function profile()
    {
        $skills  = skill::all();
        return view('components.profil_admin', compact('skills'));
    }

    public function portofolio()
    {
        $portofolios = portofolio::all();
        return view('components.portofolio_admin', compact('portofolios'));
    }

    public function createSkill()
    {

        return view('components.create_profile');
    }

    public function storeSkill(Request $request)
    {
        $requestData = $request->validate([
            "name" => "required",
            "image" => "required",
        ]);

        $skill = new skill();
        $skill->fill($requestData);
        $skill->image = $request->file('image')->store('public');
        $skill->save();

        return back()->with('pesan', 'Skill Baru Telah Ditambahkan');
    }

    public function destroySkill(string $id)
    {

        $skill = skill::findOrFail($id);
        if ($skill->image != null && Storage::exists($skill->image)) {
            Storage::delete($skill->image);
        }
        $skill->delete();
        return back()->with('pesan', 'Skill Telah Dihapus');
    }
}
