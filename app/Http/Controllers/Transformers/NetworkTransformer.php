<?php


namespace App\Http\Controllers\Transformers;


use App\Models\Network;
use League\Fractal\TransformerAbstract;

class NetworkTransformer extends TransformerAbstract
{

    public function transform(Network $model)
    {
        return [
            'id'    => $model->id,
            'title' => $model->title,
        ];
    }

}
