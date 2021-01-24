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
                "Western Digital", "Samsung", "Seagate", "ADATA", "Lexar", "CRUCIAL"
            ]
        ],
        [
            "name" => "capacity",
            "display" => "Disc capacity [GB]",
            "type" => "checkbox",
            "values" => [
                64,128,256,512,1024, 2048
            ]
        ],
        [
            "name" => "type",
            "display" => "Disc type",
            "type" => "checkbox",
            "values" => [
                "SSD", "HDD"
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
            "max" => 10000
        ]
    ];

    protected $table = 'drive';
}
