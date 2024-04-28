<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProposalController extends Controller
{
    public function index(){
        $user = Auth::user();
        $kelompok = Kelompok::where('id_ketua',$user->id)->first();
        $proposal = Proposal::where('id_kelompok',$kelompok->id)->first();
        return view('peserta.project.proposal.index',['proposal' => $proposal, 'id_proposal' => $proposal->id]);
    }
    public function edit($id_proposal){
        $user = Auth::user();
        $kelompok = Kelompok::where('id_ketua',$user->id)->first();
        $proposal = Proposal::where('id_kelompok',$kelompok->id)->first();
        return view('peserta.project.proposal.edit',['proposal' => $proposal, 'id_proposal' => $id_proposal]);
    }

    public function ide_bisnis_create(Request $request, $id_proposal)
    {
        $request->validate([
            'ide_bisnis' => 'string|nullable',
            'bmc' => 'nullable|file|mimes:pdf|max:10240', // File model bisnis (optional)
        ]);
        $proposal = Proposal::findOrFail($id_proposal);
        // Upload dan simpan file model bisnis jika ada
        if ($request->hasFile('bmc')) {
            $kelompok = $proposal->kelompok->nama_kelompok; // Ambil nama kelompok dari proposal
            $judul = $proposal->judul; // Ambil judul proposal dari proposal
            $namaFile = $kelompok . '_' . $judul . '_bmc.pdf'; // Buat nama file dengan format nama_kelompok_judul_proposal_bmc.pdf
            $modelBisnisCanvasPath = $request->file('bmc')->storeAs('bmc', $namaFile, 'public');
            $proposal->bmc = $namaFile;
        }
        // Simpan data ke database
        $proposal->ide_bisnis = $request->ide_bisnis;

        $proposal->save();

        // Redirect atau lakukan apa pun yang diperlukan setelah update berhasil
        return redirect()->route('proposal')->with('success', 'Ide Bisnis berhasil diperbarui.');
    }

    public function laba_rugi(Request $request, $id_proposal)
    {
        $request->validate([
            'deskripsi_lr' => 'string|nullable',
            'file_lr' => 'nullable|file|mimes:pdf|max:10240', // File laba rugi (optional)
        ]);
        $proposal = Proposal::findOrFail($id_proposal);
        // Upload dan simpan file laba rugi jika ada
        if ($request->hasFile('file_lr')) {
            $kelompok = $proposal->kelompok->nama_kelompok; // Ambil nama kelompok dari proposal
            $judulProposal = $proposal->judul_proposal; // Ambil judul proposal dari proposal
            $namaFile = $kelompok . '_' . $judulProposal . '_file_lr.pdf'; // Buat nama file dengan format nama_kelompok_judul_proposal_file_lr.pdf
            $fileLabaRugiPath = $request->file('file_lr')->storeAs('file_lr', $namaFile, 'public');
            $proposal->file_lr = $namaFile;
        }
        // Simpan data ke database
        $proposal->deskripsi_lr = strip_tags($request->deskripsi_lr);
        $proposal->save();

        // Redirect atau lakukan apa pun yang diperlukan setelah update berhasil
        return redirect()->route('proposal.edit', $id_proposal)->with('success', 'Laba Rugi berhasil diperbarui.');
    }

    public function pemasaran(Request $request, $id_proposal)
    {
        $request->validate([
            'file_pemasaran' => 'nullable|file|mimes:pdf|max:10240', // File pemasaran (optional)
            'deskripsi_pemasaran' => 'string|nullable',
        ]);
        $proposal = Proposal::findOrFail($id_proposal);
        // Upload dan simpan file pemasaran jika ada
        if ($request->hasFile('file_pemasaran')) {
            $kelompok = $proposal->kelompok->nama_kelompok; // Ambil nama kelompok dari proposal
            $judulProposal = $proposal->judul_proposal; // Ambil judul proposal dari proposal
            $namaFile = $kelompok . '_' . $judulProposal . '_file_pemasaran.pdf'; // Buat nama file dengan format nama_kelompok_judul_proposal_file_pemasaran.pdf
            $filePemasaranPath = $request->file('file_pemasaran')->storeAs('file_pemasaran', $namaFile, 'public');
            $proposal->file_pemasaran = $namaFile;
        }
        // Simpan data ke database
        $proposal->deskripsi_pemasaran = strip_tags($request->deskripsi_pemasaran);

        $proposal->save();

        // Redirect atau lakukan apa pun yang diperlukan setelah update berhasil
        return redirect()->route('proposal.edit', $id_proposal)->with('success', 'Pemasaran berhasil diperbarui.');
    }

    public function maintenance(Request $request, $id_proposal)
    {
        $request->validate([
            'deskripsi_maintenance' => 'string|nullable',
            'file_maintenance' => 'nullable|file|mimes:pdf|max:10240', // File maintenance (optional)
        ]);
        $proposal = Proposal::findOrFail($id_proposal);
        // Upload dan simpan file maintenance jika ada
        if ($request->hasFile('file_maintenance')) {
            $kelompok = $proposal->kelompok->nama_kelompok; // Ambil nama kelompok dari proposal
            $judulProposal = $proposal->judul_proposal; // Ambil judul proposal dari proposal
            $namaFile = $kelompok . '_' . $judulProposal . '_file_maintenance.pdf'; // Buat nama file dengan format nama_kelompok_judul_proposal_file_maintenance.pdf
            $fileMaintenancePath = $request->file('file_maintenance')->storeAs('file_maintenance', $namaFile, 'public');
            $proposal->file_maintenance = $namaFile;
        }
        // Simpan data ke database
        $proposal->deskripsi_maintenance = strip_tags($request->deskripsi_maintenance);

        $proposal->save();

        // Redirect atau lakukan apa pun yang diperlukan setelah update berhasil
        return redirect()->route('proposal', $id_proposal)->with('success', 'Maintenance berhasil diperbarui.');
    }


}
