<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'description' => $this->description,
            'links' => [
                'category' => route('categories.show', [$this->category_id]) . '/products',
            ],
        ];
    }
}
