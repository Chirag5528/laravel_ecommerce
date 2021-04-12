<div class="filter_wrapper">
    {{-- search bar     --}}
    <div class="filter_wrapper__search">
        <input type="text" class="filter_wrapper__input" placeholder="Search Here...">
        <button type="button" class="filter_wrapper__search_button">
            <span class="fa fa-search"></span>
        </button>
    </div>
    <div class="filter_wrapper__filter per_page">
        {{-- items per page    --}}
        <div class="per_page__items">
            <span>
                Items Per Page
            </span>
            <select name="items_per_page" id="items_per_page" class="per_page__select">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
            </select>
        </div>
        {{-- Filter   --}}
        <div class="filter_wrapper__filter_box">
            <button class="filter_wrapper__button">
                <span class="filter_wrapper__buton_span">Filter</span>
                <span>
                    <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </span>
            </button>
        </div>
    </div>
</div>
<div class="table_wrapper">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="table">
                    <thead class="table__thead">
                    <tr>
                        <th scope="col" class="table__th">
                            Sno
                        </th>
                        <th scope="col" class="table__th">
                            Name
                        </th>
                        <th scope="col" class="table__th">
                            Slug
                        </th>
                        <th scope="col" class="table__th">
                            Category
                        </th>
                        <th scope="col" class="table__th">
                            SubCategory
                        </th>
                        <th scope="col" class="table__th">
                            Quantity
                        </th>
                        <th scope="col" class="table__th">
                            Price
                        </th>
                        <th scope="col" class="table__th">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach( $products as $key => $product )
                        <tr>
                            <td class="table__td">
                                <div class="table__td_text">{{ ++$key }}</div>
                            </td>
                            <td class="table__td">
                                <div class="table__td_text">{{ $product['name']  }}</div>
                            </td>
                            <td class="table__td">
                                <div class="table__td_text">{{ $product['slug']  }}</div>
                            </td>
                            <td class="table__td">
                                <div class="table__td_text">{{ $product->category->name }}</div>
                            </td>
                            <td class="table__td">
                                <div class="table__td_text">{{ $product->sub_category->name }}</div>
                            </td>
                            <td class="table__td">
                                <div class="table__td_text">{{ $product['quantity']  }}</div>
                            </td>
                            <td class="table__td">
                                <div class="table__td_text">{{ $product->price->price  }}</div>
                            </td>
                            <td class="table__td">
                                <div class="table__td_text">{{ $product['quantity']  }}</div>
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
{{-- pagination --}}
<div class="pagination">
    {{ $products->links('vendor.pagination.semantic-ui') }}
</div>
