<div>


    <div class="relative overflow-x-auto">
        <div class="flex justify-between items-center pb-4 bg-white dark:bg-gray-900">
            <div>
                <h1 class="text-2xl font-bold">Teman</h1>
            </div>
            <div>
                <input type="text" wire:model="search" placeholder="Search..." class="border rounded px-4 py-2">
            </div>
            <livewire:add-teman />
        </div>
  
        <div class="py-4 px-3">
            <div class="flex">
                <div class="flex space-x-4 item-center mb-3">
                    <label for="">Per Page</label>
                    <select wire:model.live="perPage" class="border rounded px-6 py-2">
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Teman
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Angkatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($temans as $t)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $t->nama }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $t->angkatan }}
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>






    {{ $temans->links() }}
</div>