<div class="m-2">
    <div class="bg-gray-100 p-0.5">{{$display}}</div>
    <div class="w-64 mx-auto my-2">
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
    let min{{$name}} = document.getElementById("{{$name}}_min");
    let max{{$name}} = document.getElementById("{{$name}}_max");
    let minV{{$name}} = document.getElementById("{{$name}}.minValue");
    let maxV{{$name}} = document.getElementById("{{$name}}.maxValue");

    minV{{$name}}.innerText = min{{$name}}.value = '{{old($name.'_min')}}' || '{{$min}}';
    maxV{{$name}}.innerText = max{{$name}}.value = '{{old($name.'_max')}}' || '{{$max}}';

    min{{$name}}.addEventListener("input", event => {
        let newValue = parseFloat(event.target.value);
        let maxValue = parseFloat(max{{$name}}.value);

        if(newValue > maxValue - {{$step}}) {
            event.target.value = maxValue - {{$step}};
        }

        minV{{$name}}.innerText = event.target.value;
    }); 

    max{{$name}}.addEventListener("input", event => {
        let newValue = parseFloat(event.target.value);
        let minValue = parseFloat(min{{$name}}.value);

        if(newValue < minValue + {{$step}}) {
            event.target.value = minValue + {{$step}};
        }

        maxV{{$name}}.innerText = event.target.value;
    });

</script>