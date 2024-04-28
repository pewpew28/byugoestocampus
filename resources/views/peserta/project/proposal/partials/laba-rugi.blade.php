<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Laba-Rugi') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Isikan Deskripsi Dan File Laba-Rugimu!') }}
        </p>
    </header>

    <form method="post" action="{{ route('proposal.laba.rugi',['id_proposal'=>$id_proposal]) }}">
        @csrf
        @method('patch')

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text text-black">Deskripsi Laba-Rugi</span>
            </div>
            <input type="text" name="deskripsi_lr" class="textarea textarea-error rounded-md bg-white w-full text-red-600" />
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text text-black">File Laba-Rugi</span>
            </div>
            <input type="file" name="file_lr" class="file-input file-input-error w-full rounded-md bg-white text-red-600" accept="application/pdf" />
        </label>
        <button type="submit" class="btn bg-red-600 text-white mt-2 border-none">Simpan</button>
    </form>
</section>
