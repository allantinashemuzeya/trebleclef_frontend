<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;


class UserDetails extends Component
{
    use WithFileUploads;

    public $profilePicture;
    public $bio;
    public $coverImage;

    public function render()
    {
        return view('livewire.user-details');
    }


    public function save()
    {
        $this->validate([
            'coverImage' => 'image|max:5024', // 5MB Max
            'profilePicture' => 'image|max:5024', // 5MB Max
        ]);

        $this->coverImage->store('coverImages');
        $this->profilePicture->store('profilePictures');
    }

    public function saveProfilePicture()
    {
        $this->validate([
            'profilePicture' => 'image|max:5024', // 5MB Max
        ]);

        $path = $this->coverImage->store('profilePictures');

        $model = UserDetails::firstOrNew(
            ['userId' => Auth::user()->id],
            ['userId' => Auth::user()->id, 'profilePicture' => $path]
        );

        dd($model);

        $model->save();

    }
}
