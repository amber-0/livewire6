<div class="max-w-6xl mx-auto">
    <div class=”text-right m-2 p-2″>
        <x-jet-button class=”bg-blue-600″ wire:click=”showBookModal”>登録</x-jet-button>
    </div>

    <x-jet-dialog-modal wire:model="liveModal">
        <x-slot name="title"><h2 class="text-green-600">登録</h2></x-slot>  
        <x-slot name="content">内容
        </x-slot>
        <x-slot name="footer">フッター
        </x-slot>
    </x-jet-dialog-modal>

</div>

