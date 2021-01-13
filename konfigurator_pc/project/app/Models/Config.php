<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\VarDumper\VarDumper;

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

    private function isCompatibile(array $list) : bool {
        $isCompatible = true;

        foreach($list as $component => $rules) {
            foreach($rules as $spec => $compatibile) {
                if(!in_array($this->$component->$spec, $compatibile)) 
                    $isCompatible = false;
            }
        }

        return $isCompatible;
    }
    
    private function checkCompatibilityList(array $list) : array {
        $issues = [];

        foreach($list as $component => $rules) {
            $componentIssues = [];
            foreach($rules as $spec => $compatibile) {
                if(!in_array($this->$component->$spec, $compatibile)) {
                    array_push($componentIssues, [$spec, $compatibile, $this->$component->$spec]);
                }
            }
            if(count($componentIssues)) $issues[$component] = $componentIssues;
        }

        return $issues;
    }

    public function checkCompatibility() {
        $issues = [];
        foreach ($this->componentsNames as $name) {
            if(isset($this->$name->compatibility)) {
                $componentIssues = $this->checkCompatibilityList($this->$name->compatibility);
                if(count($componentIssues))
                    $issues[$name] = $componentIssues;
            }
        }
        return $issues;
    }
}
