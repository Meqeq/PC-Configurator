<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class Config extends Model
{
    use HasFactory;

    protected $table = 'configs';

    public $componentsNames = ['cpu', 'gpu', 'mb', 'case', 'drive', 'psu', 'ram', 'cooling'];

    protected $fillable = [
        'title',
        'desc',
        'benchmark',
        'price',
        'user_id',
        'public'
    ];

    public function cpu() {
        return $this->belongsTo(CPU::class);
    }

    public function mb() {
        return $this->belongsTo(MBD::class);
    }

    public function gpu() {
        return $this->belongsTo(GPU::class);
    }

    public function drive() {
        return $this->belongsTo(DRIVE::class);
    }

    public function psu() {
        return $this->belongsTo(PSU::class);
    }

    public function ram() {
        return $this->belongsTo(RAM::class);
    }

    public function case() {
        return $this->belongsTo(PC_CASE::class);
    }

    public function cooling() {
        return $this->belongsTo(COOLING::class);
    }

    public function fillComponents(\Illuminate\Session\Store $session) {
        foreach($this->componentsNames as $name) {
            if(!$session->has($name)) throw ValidationException::withMessages([$name => "Select component plz"]);

            $this->$name()->associate($session->get($name));
        }
    }

    public function calcPrice() {
        $price = 0;
        foreach ($this->componentsNames as $name) {
            $price += $this->$name->price;
        }

        $this->price = $price;
    }
}
