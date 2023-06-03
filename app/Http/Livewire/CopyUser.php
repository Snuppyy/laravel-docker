<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CopyUser extends ModalComponent
{
   public function render()
   {
      return view('livewire.copy-user');
   }
}
