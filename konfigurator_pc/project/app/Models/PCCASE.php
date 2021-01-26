<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class PCCASE extends Component {
    use HasFactory;

    public static $filters = [
        [
            "name" => "producer",
            "display" => "Producer",
            "type" => "checkbox",
            "values" => [
                "SilentiumPC", "be Quiet!", "Zalman"
            ]
        ],
        [
            "name" => "price",
            "display" => "Price",
            "type" => "range",
            "step" => 50,
            "min" => 0,
            "max" => 900
        ]
    ];

    protected $casts = [
        "compatibility" => "array"
    ];

    protected $table = 'case';
}
