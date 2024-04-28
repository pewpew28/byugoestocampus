<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Project;
use App\Models\Kelompok;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function view()
    {
        $user = Auth::user();
        $data = Project::where('id_ketua',$user->id)->get();
        return view('peserta.project.project',['datas'=>$data]);
    }

    public function create_view()
    {
        return view('peserta.project.project-create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama_kelompok' => ['required', 'string'],
            'judul' => ['required', 'string'],
        ]);

        $ketua = Auth::user();
        $kelompok = Kelompok::create([
            'id_ketua' =>  $ketua->id,
            'nama_kelompok' => $request->nama_kelompok,
        ]);

        $proposal = Proposal::create([
            'id_kelompok' => $kelompok->id,
            'judul' => $request->judul,
            'status' => 'Draft'
        ]);

        $member = Member::create([
            'id_kelompok' => $kelompok->id,
            'npsn' => $ketua->npsn,
            'nim' => $ketua->nim,
            'nama'=> $ketua->nama,
            'email' => $ketua->email,
            'telp' => $ketua->telp,
            'posisi' => 'Ketua',
        ]);

        $project = Project::create([
            'id_ketua' => $ketua->id,
            'id_kelompok' => $kelompok->id,
            'id_proposal' => $proposal->id,
        ]);


        return redirect()->route('project')->with('status', 'Proyek berhasil ditambahkan!');
    }
}
