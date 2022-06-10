<x-layout>
    @unless(count($cargos) == 0)
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg lg:mx-24">
        <table class="w-full text-sm text-left dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th scope="col" class="pl-3 py-3">
                        Cargo no
                    </th>
                    <th scope="col" class="py-3">
                        Cargo type
                    </th>
                    <th scope="col" class="py-3">
                        Cargo size
                    </th>
                    <th scope="col" class="py-3">
                        Weight (Kg)
                    </th>
                    <th scope="col" class="py-3">
                        Remarks
                    </th>
                    <th scope="col" class="py-3">
                        Wharfage (USD)
                    </th>
                    <th scope="col" class="py-3">
                        Penalty (Days)
                    </th>
                    <th scope="col" class="py-3">
                        Storage (USD)
                    </th>
                    <th scope="col" class="py-3">
                        Electricity (USD)
                    </th>
                    <th scope="col" class="py-3">
                        Destuffing (USD)
                    </th>
                    <th scope="col" class="py-3">
                        Lifting (USD)
                    </th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($cargos as $cargo)
                        <tr class="bg-white border-b dark:border-gray-700">
                            <td class="pl-3 py-4">
                                {{ $cargo->cargo_no }}
                            </td>
                            <td class="py-4">
                                {{ $cargo->cargo_type }}
                            </td>
                            <td class="py-4">
                                {{ $cargo->cargo_size }}
                            </td>
                            <td class="py-4">
                                {{ $cargo->weight }}
                            </td>
                            <td class="py-4">
                                {{ $cargo->remarks }}
                            </td>
                            <td class="py-4">
                                {{ $cargo->wharfage }}
                            </td>
                            <td class="py-4">
                                {{ $cargo->penalty }}
                            </td>
                            <td class="py-4">
                                {{ $cargo->storage }}
                            </td>
                            <td class="py-4">
                                {{ $cargo->electricity }}
                            </td>
                            <td class="py-4">
                                {{ $cargo->destuffing }}
                            </td>
                            <td class="py-4">
                                {{ $cargo->lifting }}
                            </td>
                        </tr>
                    @endforeach
        </div>
    @else
        <p class="text-center">No cargos added</p>
    @endunless


    </tbody>
    </table>
    </div>

</x-layout>
