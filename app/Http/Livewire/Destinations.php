<?php

namespace App\Http\Livewire;

use App\Models\Destination;
use App\Models\Packet;
use Livewire\Component;
use Livewire\WithPagination;

class Destinations extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $perPage = 9;
    protected $queryString = ['search'=> ['except' => '']];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $destinations = Destination::latest()->paginate($this->perPage);
        if ($this->search !== null) {
            $destinations = Destination::where('name','like', '%' . $this->search . '%')
            ->orWhere('destination','like', '%' . $this->search . '%')
            ->latest()
            ->paginate($this->perPage);
        }
        return view('livewire.destinations', ['destinations' => $destinations]);
    }
}
