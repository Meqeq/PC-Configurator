@extends("layouts.app")

@section("header")
    Home
@endsection

@section("body")
<section class="p-4 py-8 border-b border-gray-200">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-3/5 p-4">
            <h2 class="text-3xl m-4">
                Generate your config
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium doloremque officia excepturi recusandae quasi, eaque mollitia tempora deleniti hic eligendi, pariatur maxime ratione, eveniet voluptate facilis debitis. Voluptatum, id facilis.
            </p>
        </div>
        <div class="w-full lg:w-2/5 p-4">
            <h3 class="text-3xl m-4">Choose your budget</h3>
            <label for="range">
                <input id="priceRage" class="w-8/12" type="range" name="range" min="500" max="9999" step="100" value="2000"/>
            </label>
            <output id="outputRange" for="range" class="output m-4">175,000 zł</output>
            <div style="padding-top: 10px;">
                <a id="showBtn" href="{{ route('configGenerate', ['price' => 2000])}}" >
                    <button style="width:100%" class="bg-indigo-50 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50" type="submit" value="Submit">SHOW</button>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="p-4 py-8 border-b border-gray-100">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-2/5 p-4 flex items-center justify-center">
            <a href="{{route('config.create')}}">
                <div class="p-4 px-8 bg-blue-100">
                    Create new config
                </div>
            </a>
        </div>
        <div class="w-full lg:w-3/5 p-4">
            <h2 class="text-3xl m-4">
                Pick your components
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime quod officiis sed incidunt, sequi hic maiores quaerat, repudiandae magnam facilis eaque. Architecto necessitatibus fugit doloremque. Numquam aut magnam tempore eum?
            </p>
        </div>
    </div>
</section>

<section class="p-4 py-8 border-b border-gray-100 my-4">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/3 p-4">
            <h3 class="text-2xl m-2">Share configs with friends</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni iusto hic pariatur quidem, ut vero aliquid expedita consequatur</p>
        </div>
        <div class="w-full lg:w-1/3 p-4">
            <h3 class="text-2xl m-2">Look for components</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni iusto hic pariatur quidem, ut vero aliquid expedita consequatur</p>
        </div>
        <div class="w-full lg:w-1/3 p-4">
            <h3 class="text-2xl m-2">Check already created configs</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni iusto hic pariatur quidem, ut vero aliquid expedita consequatur</p>
        </div>
    </div>
</section>
    <script>
        const priceRage = document.getElementById('priceRage');
        const outputRange = document.getElementById('outputRange');
        const showBtn = document.getElementById('showBtn');
        outputRange.value = priceRage.value + ",00  zł";
        priceRage.addEventListener('input', (event) => {
            outputRange.value = event.target.value + ",00  zł";

            showBtn.href="/config/generated/" + event.target.value;
        });

        var pathname = window.location.pathname;
        if(pathname.includes("generated/")) {
            const oldVal = window.location.pathname.substring(window.location.pathname.lastIndexOf('/') + 1);
            priceRage.value = oldVal;
            outputRange.value = oldVal + ",00  $";
        }
    </script>
@endsection