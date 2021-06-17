<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $ingredients = ProductIngredientResource::collection($this->ingredients);
     
        $ingredients_collection = collect($ingredients);
        $low_ingredient_stock = $ingredients_collection->map(function ($item, $key) {
            return $item['low_stock'];
        })->toArray();
        $low_ingredient_stock = (!empty($low_ingredient_stock))?in_array(1, $low_ingredient_stock):false;
       
        $addon_groups = ProductAddonGroupResource::collection($this->addon_groups);

        return [
            'slack' => $this->slack,
            'product_code' => $this->product_code,
            'name' => $this->name,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'alert_quantity' => $this->alert_quantity,
            'purchase_amount_excluding_tax' => $this->purchase_amount_excluding_tax,
            'sale_amount_excluding_tax' => $this->sale_amount_excluding_tax,
            'category' => new CategoryResource($this->category),
            'supplier' => new SupplierResource($this->supplier),
            'tax_code' => new TaxcodeResource($this->tax_code),
            'discount_code' => new DiscountcodeResource($this->discount_code),
            'images' => ProductImageResource::collection($this->product_images),
            'is_ingredient' => $this->is_ingredient,
            'is_ingredient_price' => $this->is_ingredient_price,
            'ingredients' => $ingredients,
            'ingredient_low_stock' => $low_ingredient_stock,
            'is_addon_product' =>  $this->is_addon_product,
            'addon_groups' => $addon_groups,
            'customizable' => ($addon_groups->isEmpty())?0:1,
            'status' => new MasterStatusResource($this->status_data),
            'detail_link' => (check_access(['A_DETAIL_PRODUCT'], true))?route('product', ['slack' => $this->slack]):'',
            'created_at_label' => $this->parseDate($this->created_at),
            'updated_at_label' => $this->parseDate($this->updated_at),
            'created_by' => new UserResource($this->createdUser),
            'updated_by' => new UserResource($this->updatedUser)
        ];
    }
}
