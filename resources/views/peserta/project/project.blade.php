@extends('peserta.index')

@section('judul')
    <div class="text-2xl font-bold uppercase breadcrumbs text-black">
        <ul>
            <li>Project</li>
        </ul>
    </div>
@endsection

@section('content')
    @foreach ($datas as $project)
        @if ($project != null)
            <div class="w-full h-full p-4">
                <div class="flex justify-end mb-4">
                    <a href="">
                        <button
                            class="p-2 border-none bg-red-600 text-white rounded-lg flex justify-center items-center gap-2 btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span>New Project</span>
                        </button>
                    </a>
                </div>
                <div class="h-56 w-full bg-white shadow-xl rounded-lg p-4 grid grid-cols-6">
                    <div class="col-span-2">
                        <div class="h-36 flex items-center">
                            <div class="p-2">
                                <span class="text-xl text-black">Judul Proposal</span>
                                <h1 class="font-bold text-4xl text-red-600 uppercase">{{ $project->proposal->judul }}</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-8 h-8 rounded-full border p-1 bg-red-600 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                </svg>
                                <span class="text-lg text-black">{{ $project->kelompok->nama_kelompok }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-8 h-8 rounded-full border p-1 bg-red-600 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                </svg>
                                <span class="text-lg text-black">{{ $project->created_at }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="h-full flex items-center justify-start">
                            <ul class="steps text-sm">
                                <li class="step uppercase">Member</li>
                                <li class="step uppercase">Model Bisnis</li>
                                <li class="step uppercase">Laba-Rugi</li>
                                <li class="step uppercase">Pemasaran</li>
                                <li class="step uppercase">Maintenance</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-center items-center h-full gap-2">
                            <div class="w-15">
                                <a href="">
                                    <div class="w-full">
                                        <button class="btn btn-md btn-info border-none text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </button>
                                        <div class="badge badge-info flex justify-center uppercase w-full mt-1 rounded-md font-bold text-white">View
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="w-15">
                                <a href="{{ route('proposal') }}">
                                    <div class="w-full">
                                        <button class="btn btn-md btn-warning border-none text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </button>
                                        <div class="badge badge-warning flex justify-center uppercase w-full mt-1 rounded-md font-bold text-white ">Edit
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="w-20">
                                <a href="">
                                    <div class="w-full">
                                        <button class="btn btn-md btn-success w-full border-none text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12-3-3m0 0-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="badge badge-success flex justify-center uppercase w-full mt-1 rounded-md font-bold text-white">publish</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="w-full h-full p-4 border-2 flex justify-center items-center">
                <div>
                    <div class="flex justify-center items-center text-black opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                    </div>
                    <span class="text-black text-xl opacity-50">
                        Belum Ada Project Yang Dibuat
                    </span>
                    <div class="flex justify-center mt-3">
                        <a href="{{ route('project_create') }}">
                            <button class="flex rounded-lg bg-red-600 p-2 gap-2 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                                <span class="font-batik">Create Project</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection
