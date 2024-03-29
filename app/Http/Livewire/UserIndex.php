<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class UserIndex extends Component
{
    use WithPagination;
    public function render()
    {
        $users = User::with('roles')->paginate(10);
        return view('livewire.user-index',['users' => $users]);
    }
    public function userDelete($id)
    {
        $user = User::findOrFail($id);

        $user->delete();
        flash()->addSuccess('User deleted successfully!');
        return redirect()->route('user.index');
    }
}
