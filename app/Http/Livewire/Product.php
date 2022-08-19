<?php

namespace App\Http\Livewire;

use App\Models\Product as ModelsProduct;
use Livewire\Component;
use App\Http\Traits\InteractsWithBanner;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Http\UploadedFile;

class Product extends Component
{
    use InteractsWithBanner;
    use WithFileUploads;

    public $products, $name, $description, $photo, $price, $product_id;

    public $photo_path;

    protected $listeners = ['edit' => 'edit','delete' => 'delete', Trix::EVENT_VALUE_UPDATED];

    public function trix_value_updated($value){
        $this->description = $value;
    }

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'photo' => 'image',
        'price' => 'required',
    ];

    /**
     * Indicates if user deletion is being confirmed.
     *
     * @var bool
     */
    public $isOpen = false;


    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */
    public function render()
    {
        return view('livewire.product');
    }

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function create()
    {

        $this->resetInputFields();

        $this->openModal();

    }

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function openModal()
    {

        $this->isOpen = true;
    }



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function closeModal()
    {

        $this->isOpen = false;
    }



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    private function resetInputFields()
    {

        $this->name = '';

        $this->description = '';

        $this->photo = '';

        $this->price = '';

        $this->product_id = '';

        $this->photo_path = '';
    }


    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function store()
    {

        $this->validate();

        $product = ModelsProduct::find($this->product_id);
        if (empty($product)) {
            $product= new ModelsProduct;
        }

        $product->forceFill([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ])->save();

        if ($this->photo != '') {
            $product->updatePhoto($this->photo);
            $this->photo_path = '';
        }

        $this->banner($product->id ? 'Product Updated Successfully.' : 'Product Created Successfully.');

        $this->closeModal();

        $this->resetInputFields();

        $this->emit('saved');
    }

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function edit($id)
    {
        $this->method = 'edit';

        $product = ModelsProduct::findOrFail($id);

        $this->product_id = $id;

        $this->name = $product->name;

        $this->description = $product->description;

        $this->price = $product->price;

        $this->photo = '';

        $this->photo_path = $product->photo_url;


        $this->openModal();
    }



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function delete($id)
    {

        $product = ModelsProduct::find($id);
        Storage::disk('public')->delete($product->photo_url);
        $product->delete();


        $this->banner('Product Deleted Successfully.');
        $this->emit('success');
    }
}
