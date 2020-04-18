<?php

namespace App\Http\Livewire;

use App\Product;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    
    public $search;

    protected $updatesQueryString = ['search'];

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render(): View
    {
        //널이면 페이지만 보여주고 널이 아니면 검색한 결과를 보여준다.
        return view('livewire.products', [
            'products' => $this->search === null ?
                Product::paginate(5) :
                Product::where('name', 'like', '%' . $this->search . '%')->paginate(5)
               
        ]);
    }
}
