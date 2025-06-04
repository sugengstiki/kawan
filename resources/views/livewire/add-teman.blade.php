<div>

    <form wire:submit="tambah">
        <label>
            Nama
            <input type="text" wire:model="nama">
        </label>
        <label>
            Angkatan
            <input type="text" wire:model="angkatan">
        </label>
        <label>
            Lulus
            <input type="text">
        </label>
        <input type="submit" value="Simpan">
    </form>

</div>