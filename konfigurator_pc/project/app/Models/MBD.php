<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class MBD extends Component {
    use HasFactory;

    public static $filters = [
        [
            "name" => "price",
            "display" => "Price",
            "type" => "range",
            "step" => 50,
            "min" => 0,
            "max" => 1500
        ],
        [
            "name" => "size",
            "display" => "Size",
            "type" => "checkbox",
            "values" => ["ATX", 'm-ATX', "ITX"]
        ]
    ];

    protected $casts = [
        "compatibility" => "array"
    ];

    protected $table = 'mbd';
}
