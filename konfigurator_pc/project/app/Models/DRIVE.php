<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class DRIVE extends Component {
    use HasFactory;

    public static $filters = [
        [
            "name" => "producer",
            "display" => "Producer",
            "type" => "checkbox",
            "values" => [
                "ADATA", "Toshiba", "Crucial"
            ]
        ],
        [
            "name" => "capacity",
            "display" => "Capacity",
            "type" => "range",
            "step" => 50,
            "min" => 0,
            "max" => 4000
        ],
        [
            "name" => "type",
            "display" => "Disc type",
            "type" => "checkbox",
            "values" => [
                "SSD", "HDD", "SSD M.2"
            ]
        ],
        [
            "name" => "interface",
            "display" => "Disc interface",
            "type" => "checkbox",
            "values" => [
                "M2", "SATA"
            ]
        ],
        [
            "name" => "price",
            "display" => "Price",
            "type" => "range",
            "step" => 50,
            "min" => 0,
            "max" => 1500
        ]
    ];

    protected $table = 'drive';
}
