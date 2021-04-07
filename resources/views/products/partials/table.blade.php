<div class="flex flex-row my-8 items-center justify-between">
    {{--   search bar     --}}
    <div class="search_bar col-span-1 flex flex-row w-full">
        <input type="text" class="border-2 py-1 px-3 border-gray-500" placeholder="Search Here...">
        <button type="button" class="border-2 border-l-0 border-gray-500 p-1 text-md text-gray-500"><span class="fa fa-search"></span></button>
    </div>
   <div class="items_wrapper flex flex-row justify-between w-full">
       {{--    items per page    --}}
       <div class="per_page flex flex-row ml-16 w-full">
        <span>
            Items Per Page
        </span>
           <select name="items_per_page" id="items_per_page" class="p-1 ml-3 focus:border-blue-600 focus:rounded bg-white border-2 border-gray-500 text-gray-500">
               <option value="10">10</option>
               <option value="20">20</option>
               <option value="30">30</option>
               <option value="40">40</option>
               <option value="50">50</option>
           </select>
       </div>
       {{--     Filter   --}}
       <div class="filter w-full">
           <button
               class="text-left text-gray-500 border-gray-500 border-2 outline-none focus:outline-none px-3 py-1 bg-white rounded-sm flex justify-start items-center w-full"
           >
               <span class="pr-1 font-normal flex-1">Filter</span>
               <span>
      <svg
          class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
      >
        <path
            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
        />
      </svg>
    </span>
           </button>
       </div>
   </div>
</div>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Sno
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Slug
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            SubCategory
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach( $products as $key => $product )
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ ++$key }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $product['name']  }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $product['slug']  }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $product->category->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $product->sub_category->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $product['quantity']  }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $product->price->price  }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $product['quantity']  }}</div>
                                </td>
                            </tr>
                        @endforeach
                    <!-- More items... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{--        pagination --}}
<div class="pagination">
    {{ $products->links('vendor.pagination.tailwind') }}
</div>
