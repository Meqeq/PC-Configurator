<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class PSU extends Component {
    use HasFactory;

    public static $filters = [
        [
            "name" => "power",
            "display" => "Power [W]",
            "type" => "range",
            "step" => 10,
            "min" => 100,
            "max" => 1200
        ],
        [
            "name" => "producer",
            "display" => "Producer",
            "type" => "checkbox",
            "values" => [
                "be quiet!", "SilentiumPC"
            ]
        ],
        [
            "name" => "price",
            "display" => "Price",
            "type" => "range",
            "step" => 50,
            "min" => 0,
            "max" => 600
        ]
    ];

    protected $table = 'psu';
}
