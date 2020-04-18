<div>

    <p class="text-center p-6">
        <span class="text-4xl">Products Page</span>
    </p>
    <hr>

    <br>
    <div class="w-full flex justify-center">
        <input wire:model="search" type="text" class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Search">
    </div>
    <br>

    <div class="flex justify-center bg-gray-200">
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">NAME</th>
                    <th class="px-4 py-2">PRICE</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->id }}</td>
                    <td class="border px-4 py-2">{{ $product->name }}</td>
                    <td class="border px-4 py-2">{{ $product->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <br>
    <div class="w-full flex justify-center pb-6">
        {{ $products->links('layouts.pagination') }}
    </div>

</div>
