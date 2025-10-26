<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <form wire:submit.prevent="lanjut" class="space-y-6 px-6 border-gray-200 border rounded-lg mt-10 mb-10 shadow-lg">
        <div class="py-8">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold leading-tight">
                    Transaksi Barang
                </h2>
            </div>
        </div>
        <flux:input wire:model="nama_penerima" label="Nama Penerima" class:input="font-mono" />
        <flux:input wire:model="keperluan" label="Keperluan" class:input="font-mono" />
        <flux:input type="date" wire:model="tanggal" label="Tanggal" class:input="font-mono" />

        <div class="flex justify-end mb-5">
            <flux:button type="submit" class="cursor-pointer" variant="primary">Primary</flux:button>
        </div>
        <p>&nbsp;</p>
    </form>
    @if (session('message'))
        <div class="mt-4 text-green-600">
            {{ session('message') }}
        </div>
    @endif
</div>
