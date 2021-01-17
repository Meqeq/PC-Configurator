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
                "SilentiumPC", "Thermaltake", "Fractal Design", "Aerocool", "LC-Power", "MSI"
            ]
        ],
        [
            "name" => "type",
            "display" => "Case type",
            "type" => "checkbox",
            "values" => [
                "Full", "Midi", "Mini", "Micro"
            ]
        ],
        [
            "name" => "price",
            "display" => "Price",
            "type" => "range",
            "step" => 50,
            "min" => 0,
            "max" => 10000
        ]
    ];

    protected $table = 'case';
}
