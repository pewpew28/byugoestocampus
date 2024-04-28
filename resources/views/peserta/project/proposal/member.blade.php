@extends('peserta.index')

@section('judul')
    <div class="text-2xl font-bold uppercase breadcrumbs text-black">
        <ul>
            <li><a href="{{ route('project') }}">Project</a></li>
            <li>Proposal</li>
            <li>Member</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="pb-12">
        <div class="w-full h-full px-24 py-4 flex gap-4">
            <div>
                <a href="{{ route('proposal.edit',['id_proposal'=>$id_proposal]) }}">
                    <button
                        class="btn {{ request()->routeIs('proposal.edit') ? 'border-none text-white bg-red-600 scale-100' : 'border-white bg-white text-red-600 hover:bg-white hover:border-2 hover:border-red-600' }}">Proposal</button>
                </a>
            </div>
            <div>
                <a href="{{ route('proposal.member') }}">
                    <button
                        class="btn {{ request()->routeIs('proposal.member') ? 'border-none text-white bg-red-600 scale-100' : ' border-white bg-white text-red-600 hover:bg-white hover:border-2 hover:border-red-600' }}">Anggota</button>
                </a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    @include('peserta.project.proposal.partials.member-list')
                </div>
            </div>
        </div>
        <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    @include('peserta.project.proposal.partials.member')
                </div>
            </div>
        </div>
    </div>
@endsection
