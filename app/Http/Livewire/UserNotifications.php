<?php

namespace App\Http\Livewire;

use App\Jobs\SendUserNotification;
use App\Models\User;
use Livewire\Component;

class UserNotifications extends Component
{
    public $users;

    public $status = 'Idle';

    public function mount()
    {
        $this->users = collect();
    }

    public function sendNotifications()
    {
        $users = User::all();
        foreach($users as $user){
            SendUserNotification::dispatch($user);
        }

        $this->status = 'Notifications Sent';
    }

    public function render()
    {
        return view('livewire.user-notifications');
    }
}
