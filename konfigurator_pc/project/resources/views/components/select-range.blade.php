<div class="m-2">
    <div class="bg-gray-100 p-0.5">{{$display}}</div>
    <div class="w-64">
        <input class="w-64" class="select-range" type="range" min="{{$min}}" max="{{$max}}" name="{{$name}}_min" id="{{$name}}_min" step="{{$step}}" value="{{ old($name.'_min') }}" />
        <div class="text-center">
            <span id="{{$name}}.minValue">{{$min}}</span>
            -
            <span id="{{$name}}.maxValue">{{$max}}</span>
        </div>
        <input class="w-64" class="select-range" type="range" min="{{$min}}" max="{{$max}}" name="{{$name}}_max" id="{{$name}}_max" step="{{$step}}" value="{{ old($name.'_max') }}" />
    </div> 
</div>

<script>
    let min = document.getElementById("{{$name}}_min");
    let max = document.getElementById("{{$name}}_max");
    let minV = document.getElementById("{{$name}}.minValue");
    let maxV = document.getElementById("{{$name}}.maxValue");

    minV.innerText = min.value = '{{old($name.'_min')}}' || '{{$min}}';
    maxV.innerText = max.value = '{{old($name.'_max')}}' || '{{$max}}';

    min.addEventListener("change", event => {
        let newValue = parseFloat(event.target.value);
        let maxValue = parseFloat(max.value);

        if(newValue > maxValue - {{$step}}) {
            event.target.value = maxValue - {{$step}};
        }

        minV.innerText = event.target.value;
    }); 

    max.addEventListener("change", event => {
        let newValue = parseFloat(event.target.value);
        let minValue = parseFloat(min.value);

        if(newValue < minValue + {{$step}}) {
            event.target.value = minValue + {{$step}};
        }

        maxV.innerText = event.target.value;
    });

</script>