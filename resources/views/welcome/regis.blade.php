<div class="w-full h-fit p-10 bg-white">
    <div class="flex justify-center">
        <h1 class="font-bold font-batik text-4xl text-red-600">Daftarkan Akun Ketua</h1>
    </div>
    <div class="flex justify-center">
        <p class="text-black">Isilah Data Diri Yang Sesuai Dan Pastikan Data Tersebut Benar.</p>
    </div>
    <div class="flex justify-center mt-5">
        <div class="sm:w-1/2 w-full">
            <form action="{{ route('register') }}" method="post">
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
                                <input type="npsn" name="npsn" placeholder="NPSN" class="grow" required />
                                <x-input-error :messages="$errors->get('npsn')" />
                            </label>
                            <div class="label">
                                <button class="label-text-alt text-red-600">Cari Kampus</button>
                            </div>
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
                                <input type="nim" name="nim" placeholder="NIM" class="grow" required />
                                <x-input-error :messages="$errors->get('nim')"  />
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
                            <input type="text" name="nama" class="grow" placeholder="Nama Lengkap" required />
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
                            <input type="text" name="telp" class="grow" placeholder="08............" required />
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
                            <input type="email" name="email" placeholder="@gmail.com" class="grow" required />
                            <x-input-error :messages="$errors->get('email')" />
                        </label>
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-red-600">Password</span>
                        </div>
                        <label
                            class="input input-bordered border-red-600 w-sm bg-white text-red-600 flex items-center gap-2">
                            <box-icon name='lock-alt' type='solid' color='#f30303'></box-icon>
                            <input type="password" name="password" placeholder="***********" class="grow" required />
                            <x-input-error :messages="$errors->get('password')" />
                        </label>
                    </label>
                </div>
                <div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text text-red-600">Konfirmasi Password</span>
                        </div>
                        <label
                            class="input input-bordered border-red-600 w-sm bg-white text-red-600 flex items-center gap-2">
                            <box-icon name='lock-alt' type='solid' color='#f30303'></box-icon>
                            <input type="password" name="confirm" placeholder="***********" class="grow" />
                            <x-input-error :messages="$errors->get('password_confirmation')" />
                        </label>
                    </label>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit" class="btn bg-red-600 border-none text-white">Daftar Akun</button>
                </div>
            </form>
        </div>
    </div>
</div>
