<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class MBD extends Component {
    use HasFactory;

    public static $filters = [
        [
            "name" => "size",
            "display" => "Size",
            "type" => "checkbox",
            "values" => ["ATX", 'm-ATX', "ITX"]
        ],
        [
            "name" => "producer",
            "display" => "Producer",
            "type" => "checkbox",
            "values" => ["Gigabyte", "MSI", "Asus", "AsRock"]
        ],
        [
            "name" => "socket",
            "display" => "Socket",
            "type" => "checkbox",
            "values" => ["AM4", "1200", "1151"]
        ],
        [
            "name" => "price",
            "display" => "Price",
            "type" => "range",
            "step" => 50,
            "min" => 0,
            "max" => 1500
        ],
    ];

    protected $casts = [
        "compatibility" => "array"
    ];

    protected $table = 'mbd';
}
