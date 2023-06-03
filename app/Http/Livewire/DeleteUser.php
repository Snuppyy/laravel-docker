<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class DeleteUser extends ModalComponent
{
   public function render()
   {
      return view('livewire.delete-user');
   }
}
