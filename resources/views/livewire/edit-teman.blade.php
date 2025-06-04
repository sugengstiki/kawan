<div>
    <div x-data="{buka:false}">
        <button @click="buka = true" class="bg-blue-500 px-6 py-2 m-10 rounded-sm cursor-pointer">Tambah</button>
        <div x-show="buka" class="fixed inset-0 bg-gray-500/70 bg-opacity-50 flex flex-col items-center justify-center">
            <h2 class="font-bold">Edit Data Kawan</h2>
            <form wire:submit="save" class="bg-white p-6 rounded shadow-md space-y-4">
                <div>
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" wire:model="nama" class="border border-gray-400 rounded w-full px-3 py-2">
                </div>
                <div>
                    <label for="angkatan">Angkatan:</label>
                    <input type="text" id="angkatan" wire:model="angkatan" class="border border-gray-400 rounded w-full px-3 py-2">
                </div>

                <button type="submit" class="bg-blue-500 px-6 py-2 m-10 rounded-sm cursor-pointer">Simpan</button>
                <button type="button" @click="buka = false" class="bg-blue-500 px-6 py-2 m-10 rounded-sm cursor-pointer">Tutup</button>
            </form>
        </div>
    </div>
</div>