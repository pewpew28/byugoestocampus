@extends('peserta.index')

@section('judul')
    <div class="text-lg font-bold uppercase breadcrumbs text-black">
        <ul>
            <li><a href="{{ route('project') }}">Project</a></li>
            <li>New Project</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="w-full h-full p-4">
        <form action="{{ route('create') }}" method="post">
            @csrf
            <div class="w-full h-fit border-2 border-red-600 rounded-lg mt-4">
                <div class="bg-red-600 p-4">
                    <span class="text-white ">Ketua Kelompok</span>
                </div>
                <div class="p-2">
                    <table class="table-fixed text-black">
                        <tbody>
                            <tr>
                                <td>NPSN</td>
                                <td> : </td>
                                <td>{{ Auth::user()->npsn }}</td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td> : </td>
                                <td>{{ Auth::user()->nim }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td> : </td>
                                <td>{{ Auth::user()->nama }}</td>
                            </tr>
                            <tr class="gap-2">
                                <td>Nomor Whatsapp</td>
                                <td> : </td>
                                <td>{{ Auth::user()->telp }}</td>
                            </tr>
                            <tr class="gap-2">
                                <td>Email</td>
                                <td> : </td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr class="gap-2">
                                <td>Posisi</td>
                                <td> : </td>
                                <td>Ketua</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-full h-fit border-2 border-red-600 rounded-lg mt-4">
                <div class="bg-red-600 p-4">
                    <span class="text-white ">Nama Kelompok</span>
                </div>
                <div class="p-2 form-control">
                    <input type="text" name="nama_kelompok" class="input input-error bg-white" placeholder="Nama Kelompok">
                    <x-input-error :messages="$errors->get('nama_kelompok')" />
                </div>
            </div>
            <div class="w-full h-fit border-2 border-red-600 rounded-lg mt-4">
                <div class="bg-red-600 p-4">
                    <span class="text-white ">Nama Project / Judul Proposal</span>
                </div>
                <div class="p-2 form-control">
                    <input type="text" name="judul" class="input input-error bg-white" placeholder="Nama Project / Judul Proposal">
                    <x-input-error :messages="$errors->get('judul')" />
                </div>
            </div>
            <div class="mt-4 flex justify-end">
                <button type="submit" class="btn bg-red-600 border-none text-white">Submit</button>
            </div>
        </form>
    </div>
@endsection
