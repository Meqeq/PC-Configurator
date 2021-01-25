<div class="m-2">
    <h4 class="bg-gray-100 p-0.5 px-2">{{$display}}</h4>
    <div class="p-0.5 flex flex-wrap"> 
        @foreach($values as $value)
            <div class="flex w-1/2">
                <div class="w-3/4">
                    <label for="{{$value}}">{{$value}}</label>
                </div>
                <div class="w-1/4">
                    <input type="checkbox" name="{{$name}}[]" id="{{$value}}" value={{$value}} @if(is_array(old($name)) && in_array($value, old($name))) checked @endif>
                </div>
            </div>
        @endforeach
    </div>
</div>


