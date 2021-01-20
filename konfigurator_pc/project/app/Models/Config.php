<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $table = 'configs';

    public $componentList = ['cpu', 'gpu', 'mbd', 'pccase', 'drive', 'psu', 'ram', 'cooling'];

    public $componentNames = [
        'cpu' => 'CPU', 'gpu' => 'Graphics card', 'mbd' => 'Motherboard', 'pccase' => 'Case',
        'drive' => 'Drive', 'psu' => 'Power supply', 'ram' => 'RAM', 'cooling' => 'Cooling'
    ];

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

    public function mbd() {
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

    public function pccase() {
        return $this->belongsTo(PCCASE::class);
    }

    public function cooling() {
        return $this->belongsTo(COOLING::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function getFromSessionOrCreate() : Config {
        if(session()->has("config")) {
            return session()->get("config");
        } else {
            return new Config();
        }
    }

    public function saveInSession() {
        session(["config" => $this]);
    }

    public function compatibleSpec(string $comp) : array {
        $params = [];
        foreach($this->componentList as $name) {
            if(isset($this->$name) && isset($this->$name->compatibility) && isset($this->$name->compatibility[$comp])) {
                foreach($this->$name->compatibility[$comp] as $key => $needed) {
                    $params[$key] = $needed;
                }
            }
        }
        return $params;
    }

    public function compatibilityErrors() : array {
        $errors = [];

        foreach($this->componentList as $name) {
            if(isset($this->$name) && isset($this->$name->compatibility)) {
                foreach($this->$name->compatibility as $component => $list) {
                    if(isset($this->$component) && !$this->$component->isCompatible($list)) {
                        array_push($errors, $this->componentNames[$component]." is incompatible with ".$this->componentNames[$name]);
                    }
                }
            }
        }

        return $errors;
    }

    public function isComplete() : bool {
        foreach($this->componentList as $name) {
            if(!isset($this->$name)) {
                return false;
            }
        }
        return true;
    }

    public function isCompatible() : bool {
        foreach($this->componentList as $name) {
            if(isset($this->$name) && isset($this->$name->compatibility)) {
                foreach($this->$name->compatibility as $component => $list) {
                    if(isset($this->$component) && !$this->$component->isCompatible($list))
                        return false;
                }
            }
        }

        return true;
    }

    public function calcPrice() {
        $price = 0;
        foreach ($this->componentList as $name) {
            $price += $this->$name->price;
        }

        $this->price = $price;
    }


}
