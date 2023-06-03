<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{

   use WithPagination;

   public string $search = '';

   protected $queryString = ['search'];


   public function render()
   {
      $query = User::query();

      if ($this->search) {
         $query->where('name', 'like', "%{$this->search}%")
            ->orWhere('email', 'like', "%{$this->search}%");
      }


      return view('livewire.users-list', [
         'users' => $query->paginate(20)
      ]);
   }

   public function updateSearch()
   {
      $this->resetPage();
   }
}
