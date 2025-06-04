<div x-show="open"
    x-transition:enter="transition transform duration-300 ease-out"
    x-transition:enter-start="-translate-y-10 opacity-0"
    x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition transform duration-200 ease-in"
    x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="-translate-y-10 opacity-0"
    class="fixed inset-0 flex items-center justify-center z-50 pointer-events-none">

    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md pointer-events-auto">
        <h2 class="text-xl font-semibold mb-4">Modal</h2>
        <p>Isi modal di sini.</p>
        <button @click="open = false" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
            Tutup
        </button>
    </div>
</div>