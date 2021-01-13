<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class MBD extends Component {
    use HasFactory;
    // TODO: tutaj jest MBD.php, ale seeder jest MB i migracja MB - zmienic?
    // TODO: trzeba pomyslec jak zrobic kompatybilność
    public static $filters = [
        [
            "name" => "price",
            "display" => "Price",
            "type" => "range",
            "step" => 50,
            "min" => 0,
            "max" => 10000
        ]
    ];

    protected $casts = [
        "compatibility" => "array"
    ];

    protected $table = 'mb';
}
