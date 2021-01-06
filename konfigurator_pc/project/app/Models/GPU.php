<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class GPU extends Component {
    use HasFactory;

    public static $filters = [
        [
            "name" => "producer",
            "display" => "Producer",
            "type" => "checkbox",
            "values" => [
                "Gigabyte", "Asus", "MSI", "PNY"
            ]
        ],
        [
            "name" => "chipset",
            "display" => "Chipset type",
            "type" => "checkbox",
            "values" => [
                "GeForce", "Quadro", "Radeon", "Other"
            ]
        ],
        [
            "name" => "RAM",
            "display" => "RAM memory",
            "type" => "checkbox",
            "values" => [
                1,2,4,8,10,24
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

    protected $table = 'gpu';
    //protected $primaryKey = 'id';
}
