<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use App\Models\Product;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;

class ProductTable extends DataTableComponent
{
    protected $model = Product::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setRefreshTime(2000);
    }

    public function columns(): array
    {
        return [
            Column::make(__('product.id'), "id")
                ->sortable(),
            ImageColumn::make(__('product.photo'))
                ->location(
                    fn($row) => Product::find($row->id)->photo_url
                )
                ->attributes(fn($row) => [
                    'style' => 'width: 50px',
                ]),
            Column::make(__('product.name'), "name")
                ->sortable()
                ->searchable(),
            Column::make(__('product.price'), "price")
                ->sortable()
                ->searchable(),
            ButtonGroupColumn::make(__('action.action'))
                ->unclickable()
                ->attributes(function($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make(__('action.edit'))
                        ->title(fn($row) => __('action.edit'))
                        ->location(fn($row) => "#")
                        ->attributes(function($row) {
                            return [
                                'class' => 'btn btn-warning',
                                'wire:click' => '$emit('."'".'edit'."',".$row->id.')',
                            ];
                        }),
                    LinkColumn::make(__('action.delete'))
                        ->title(fn($row) => __('action.delete'))
                        ->location(fn($row) => "#")
                        ->attributes(function($row) {
                            return [
                                'class' => 'btn btn-danger',
                                'wire:click' => '$emit('."'".'delete'."',".$row->id.')',
                            ];
                        })
                ]),
        ];
    }
}
