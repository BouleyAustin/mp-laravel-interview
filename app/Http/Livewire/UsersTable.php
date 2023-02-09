<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use withPagination;

    public $search;

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        if($this->search == null){
            $users = User::where('email', '!=', null)->paginate(10);
        }
        else{
            $users = User::where('id', 'LIKE', "%$this->search%")
                ->orWhere('email', 'LIKE', "%$this->search%")
                ->orWhere('name', 'LIKE', "%$this->search%")
                ->orWhere('created_at', 'LIKE', "%$this->search%")
                ->paginate(10);
        }

        return view('livewire.users-table', [
            'users' => $users,
        ]);
    }
}
