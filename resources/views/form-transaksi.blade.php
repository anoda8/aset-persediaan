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
        <flux:input.group label="Nama Penerima">
            <flux:input wire:model="nama_penerima" class:input="font-mono" />
            <flux:modal.trigger name="cari-penerima">
            <flux:button icon="plus" class="cursor-pointer">New post</flux:button>
            </flux:modal.trigger>
        </flux:input.group>
        <flux:input wire:model="keperluan" label="Keperluan" class:input="font-mono" />
        <flux:input type="date" wire:model="tanggal" label="Tanggal" class:input="font-mono" />

        <div class="flex justify-end mb-5">
            <flux:button type="submit" class="cursor-pointer" variant="primary">Primary</flux:button>
        </div>
        <p>&nbsp;</p>
    </form>

    <flux:modal name="cari-penerima" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Update profile</flux:heading>
                <flux:text class="mt-2">Make changes to your personal details.</flux:text>
            </div>
            <flux:input label="Name" placeholder="Your name" />
            <flux:input label="Date of birth" type="date" />
            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" variant="primary">Save changes</flux:button>
            </div>
        </div>
    </flux:modal>
    @if (session('message'))
        <div class="mt-4 text-green-600">
            {{ session('message') }}
        </div>
    @endif
</div>
