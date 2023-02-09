<div>
    <button wire:click="sendNotifications" class="inline-block text-white font-bold bg-purple py-4 px-8">Send Notification To All Users</button>
    <div class="mt-4">
        <div wire:loading.remove wire:target="sendNotifications">
            Status: {{ $status }}
        </div>
        <div wire:loading wire:target="sendNotifications">
            Status: Sending Notifications...
        </div>
    </div>
</div>
