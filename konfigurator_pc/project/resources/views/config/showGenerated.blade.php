@extends("layouts.app")

@section("header")
    Generated config
@endsection

@section("body")
    <div class="mt-8 bg-white dark:bg-gray-800">
        @if (!empty($configs))
            <h3 class="text-xxl text-gray-500">Generated components:</h3>
            <div class="bg-white shadow-md rounded my-6">
                <table class="text-left w-full border-collapse">
                    <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Category</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Model</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">CPU</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#" class="text-grey-lighter rounded bg-green hover:bg-green-dark">{{$configs->cpu->name ?? '-'}}</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">GPU</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#" class="text-grey-lighter rounded bg-green hover:bg-green-dark">{{$configs->gpu->name?? '-'}}</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Motherboard</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#" class="text-grey-lighter rounded bg-green hover:bg-green-dark">{{$configs->mbd->name?? '-'}}</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">RAM</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#" class="text-grey-lighter rounded bg-green hover:bg-green-dark">{{$configs->ram->name?? '-'}}</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Case</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#" class="text-grey-lighter rounded bg-green hover:bg-green-dark">{{$configs->pccase->name?? '-'}}</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Power supply</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#" class="text-grey-lighter rounded bg-green hover:bg-green-dark">{{$configs->psu->name?? '-'}}</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Cooling</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#" class="text-grey-lighter rounded bg-green hover:bg-green-dark">{{$configs->cooling->name?? '-'}}</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        @endif
    </div>

@endsection
