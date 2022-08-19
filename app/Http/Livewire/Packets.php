<?php

namespace App\Http\Livewire;

use App\Models\Packet;
use Livewire\Component;
use Livewire\WithPagination;

class Packets extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $perPage = 9;
    public $minPrice;
    public $maxPrice;
    public $person;
    
    protected $queryString = ['search'=> ['except' => ''], 'maxPrice'=> ['except' => ''], 'minPrice'=> ['except' => ''], 'person'=> ['except' => '']];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $packets = Packet::when($this->search, function($query){
            $query->whereHas('destination', function($query){
                $query->where('name','like', '%' . $this->search . '%')
                ->orWhere('description','like', '%' . $this->search . '%');
            })
            ->orWhere('name','like', '%' . $this->search . '%');
        })
        ->when($this->minPrice, function($query){
            $query->where('price', '>=', $this->minPrice);
        })
        ->when($this->maxPrice, function($query){
            $query->where('price', '<=', $this->maxPrice);
        })
        ->when($this->person, function($query){
            $query->where('people', $this->person);
        })
        ->latest()
        ->paginate($this->perPage);
        return view('livewire.packets', ['packets' => $packets]);
    }
}
