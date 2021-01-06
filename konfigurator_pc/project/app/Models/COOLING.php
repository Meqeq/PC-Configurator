<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class COOLING extends Component {
    use HasFactory;

    public static $filters = [
        [
            "name" => "producer",
            "display" => "Producer",
            "type" => "checkbox",
            "values" => [
                "Noctua", "Cooler MAster", "Arctic", "Deepcool"
            ]
        ],
        [
            "name" => "socket",
            "display" => "CPU socket",
            "type" => "checkbox",
            "values" => [
                "Intel", "AMD"
            ]
        ],
        [
            "name" => "tpd",
            "display" => "Maximal TPD",
            "type" => "range",
            "step" => 100,
            "min" => 10,
            "max" => 300
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

    protected $table = 'cooling';
}
