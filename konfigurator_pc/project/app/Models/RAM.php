<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class RAM extends Component {
    use HasFactory;

    public static $filters = [
        [
            "name" => "producer",
            "display" => "Producer",
            "type" => "checkbox",
            "values" => [
                "Gigabyte", "G.Skill", "Corsair", "Hyper X", "Patriot", "Kingston", "CRUCIAL"
            ]
        ],
        [
            "name" => "capacity",
            "display" => "Capacity [GB]",
            "type" => "checkbox",
            "values" => [
                2,4,8,16,32,64
            ]
        ],
        [
            "name" => "speed",
            "display" => "Frequency [MHz]",
            "type" => "range",
            "step" => 100,
            "min" => 1000,
            "max" => 4000
        ],
        [
            "name" => "type",
            "display" => "Memory type",
            "type" => "checkbox",
            "values" => [
                "DDR4", "DDR3", "DDR2"
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

    protected $table = 'ram';
}
