<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Kelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ketua = Auth::user();
        $kelompok = Kelompok::where('id_ketua', $ketua->id)->first();
        $member = Member::where('id_kelompok', $kelompok->id)->get();
        return view('peserta.project.proposal.member', ['members' => $member]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nim' => 'required|string',
            'nama' => 'required|string',
            'telp' => 'required|string',
            'email' => 'required|email',
            'posisi' => 'required|string',
        ]);
        $ketua = Auth::user();
        $kelompok = Kelompok::where('id_ketua', $ketua->id)->first();
        $jumlahmember = count(Member::all()->where('id_kelompok', $kelompok->id));

        if ($jumlahmember <= 4) {
            // Buat anggota baru
            Member::create([
                'id_kelompok' => $kelompok->id, // Mengambil id kelompok dari user yang sedang login
                'npsn' => $ketua->npsn,
                'nim' => $validatedData['nim'],
                'nama' => $validatedData['nama'],
                'telp' => $validatedData['telp'],
                'email' => $validatedData['email'],
                'posisi' => $validatedData['posisi'],
            ]);
            return redirect()->back()->with('success', 'Anggota berhasil ditambahkan!');
        }
        
        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('error', 'Anggota Sudah Melebihi!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
