<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Daftar Anggota') }}
        </h2>
    </header>

    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr class="font-bold text-red-600">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Posisi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr class="text-red-600">
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">{{ $member->nama }}</div>
                                    <div class="text-sm opacity-50">{{ $member->nim }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ $member->email }}
                        </td>
                        <td>{{ $member->posisi }}</td>
                        <th>
                            <button class="btn btn-ghost btn-xs text-md font-bold text-cyan-500">Details</button>
                        </th>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</section>
