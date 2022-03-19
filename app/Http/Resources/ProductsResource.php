<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'categoryId' => $this->category_id,
            'productId' => $this->id,
            'productName' => $this->name,
            'unit' => $this->unit,
            'price' => $this->rate,
            'links' => [
                'product' => route('products.show', [$this->category_id, $this->id]),
                'categories' => route('categories.index'),
            ],
        ];
    }
}
