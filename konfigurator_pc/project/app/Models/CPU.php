<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class CPU extends Component {
    use HasFactory;

    public static $filters = [
        [
            "name" => "producer",
            "display" => "Producer",
            "type" => "checkbox",
            "values" => [
                "AMD", "Intel"
            ]
        ],
        [
            "name" => "socket",
            "display" => "Socket",
            "type" => "checkbox",
            "values" => [
                "AM4", "AM3", "1200", "1151"
            ]
        ],
        [
            "name" => "frequency",
            "display" => "Frequency [Mhz]",
            "type" => "range",
            "step" => 200,
            "min" => 0,
            "max" => 6000
        ],
        [
            "name" => "cores",
            "display" => "Number of cores",
            "type" => "radio",
            "values" => [
                1,2,4,6,8,10,12
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

    protected $table = 'cpu';
}
