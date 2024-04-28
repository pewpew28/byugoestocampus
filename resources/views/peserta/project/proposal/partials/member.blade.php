<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Daftarkan Anggota') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Isilah Data Diri Yang Sesuai Dan Pastikan Data Tersebut Benar.') }}
        </p>
        
    </header>

    <div class="flex justify-center mt-5">
        <div class="sm:w-full w-full">
            @if (session('error'))    
            <div role="alert" class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ session('message') }}</span>
              </div>
            @endif
            <form action="{{ route('proposal.member.new') }}" method="post">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-red-600">NPSN</span>
                            </div>
                            <label
                                class="input input-bordered border-red-600 w-sm bg-white text-red-600 flex items-center gap-2">
                                <box-icon name='school' type='solid' color='#f30303'></box-icon>
                                <input type="text" name="npsn" placeholder="NPSN" class="grow border-none"
                                    value="{{ Auth::user()->npsn }}"  />
                                <x-input-error :messages="$errors->get('npsn')" />
                            </label>
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text text-red-600">NIM</span>
                            </div>
                            <label
                                class="input input-bordered border-red-600 w-sm bg-white text-red-600 flex items-center gap-2">
                                <box-icon name='graduation' type='solid' color='#f30303'></box-icon>
                                <input type="text" name="nim" placeholder="NIM" class="grow border-none"
                                    required />
                                <x-input-error :messages="$errors->get('nim')" />
                            </label>
                        </label>
                    </div>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-red-600">Nama Lengkap</span>
                        </div>
                        <label
                            class="input input-bordered border-red-600 w-sm bg-white text-red-600 flex items-center gap-2">
                            <box-icon name='user' type='solid' color='#f30303'></box-icon>
                            <input type="text" name="nama" class="grow border-none" placeholder="Nama Lengkap"
                                required />
                            <x-input-error :messages="$errors->get('name')" />
                        </label>
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-red-600">Nomor Whatsapp</span>
                        </div>
                        <label
                            class="input input-bordered border-red-600 w-sm bg-white text-red-600 flex items-center gap-2">
                            <box-icon type='solid' name='phone' color='#f30303'></box-icon>
                            <input type="text" name="telp" class="grow border-none" placeholder="08............"
                                required />
                            <x-input-error :messages="$errors->get('telp')" />
                        </label>
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-red-600">Email</span>
                        </div>
                        <label
                            class="input input-bordered border-red-600 w-sm bg-white text-red-600 flex items-center gap-2">
                            <box-icon name='envelope' type='solid' color='#f30303'></box-icon>
                            <input type="email" name="email" placeholder="@gmail.com" class="grow border-none"
                                required />
                            <x-input-error :messages="$errors->get('email')" />
                        </label>
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-red-600">Posisi</span>
                        </div>
                        <label
                            class="input input-bordered border-red-600 w-sm bg-white text-red-600 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M3 2.25a.75.75 0 0 1 .75.75v.54l1.838-.46a9.75 9.75 0 0 1 6.725.738l.108.054A8.25 8.25 0 0 0 18 4.524l3.11-.732a.75.75 0 0 1 .917.81 47.784 47.784 0 0 0 .005 10.337.75.75 0 0 1-.574.812l-3.114.733a9.75 9.75 0 0 1-6.594-.77l-.108-.054a8.25 8.25 0 0 0-5.69-.625l-2.202.55V21a.75.75 0 0 1-1.5 0V3A.75.75 0 0 1 3 2.25Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <input type="text" name="posisi" placeholder="Posisi" class="grow border-none"
                                required />
                            <x-input-error :messages="$errors->get('posisi')" />
                        </label>
                    </label>
                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="btn bg-red-600 border-none text-white">Daftar Akun</button>
                </div>
            </form>
        </div>
    </div>
</section>
