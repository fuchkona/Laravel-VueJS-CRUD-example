<?php


namespace App\Models\System;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Seed
 *
 * @package App\Models\System
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Seed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Seed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Seed query()
 * @method static \Illuminate\Database\Eloquent\Builder|Seed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Seed whereName($value)
 * @mixin \Eloquent
 */
class Seed extends Model
{
    use HasFactory;

    public $timestamps   = false;

    protected $table = 'seeders';

    protected $fillable = [
        'name',
    ];

}
