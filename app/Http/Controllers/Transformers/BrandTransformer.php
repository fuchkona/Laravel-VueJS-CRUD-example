<?php


namespace App\Http\Controllers\Transformers;


use App\Models\Brand;
use League\Fractal\TransformerAbstract;

class BrandTransformer extends TransformerAbstract
{

    public function transform(Brand $model)
    {
        return [
            'id'    => $model->id,
            'title' => $model->title,
        ];
    }

}
