<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Ide Bisnis') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Silahkan Masukkan Ide Bisnis Dan File Bisnis Modal Canvasmu!') }}
        </p>
    </header>
    @if (session('success'))
        <div role="alert" class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('message') }}</span>
        </div>
    @endif
    @if (session('error'))
        <div role="alert" class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('message') }}</span>
        </div>
    @endif
    <form method="post" action="{{ route('proposal.ide.bisnis', ['id_proposal' => $id_proposal]) }}">
        @csrf
        @method('PATCH')
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text text-black">Ide Bisnis</span>
            </div>
            <input type="text" name="ide_bisnis" class="input input-error rounded-md bg-white w-full text-red-600" />
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text text-black">Bisnis Model Canvas File</span>
            </div>
            <input type="file" name="bmc"
                class="file-input file-input-error w-full rounded-md bg-white text-red-600" accept="application/pdf" />
        </label>
        <button type="submit" class="btn bg-red-600 text-white mt-2 border-none">Simpan</button>
    </form>
</section>
