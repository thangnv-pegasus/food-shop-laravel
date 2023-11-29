<div>
    {{-- {{ $thisOption }} --}}
    <x-title-page title="Tất cả sản phẩm" />
    <div class="py-10">
        <div class="max-w-container mx-auto">
            <div
                class="flex justify-between items-center my-5 p-3 border-[1px] border-solid border-baseColor rounded-md">
                <p>Tất cả sản phẩm</p>
                <form action="" method="get" class="flex items-center">
                    <div class=" text-gray-900 dark:text-gray-800 mr-5">
                        Sắp xếp theo
                    </div>
                    <div class="flex items-center px-2" wire:click="filter('atoz')">
                        <input id="link-radio" type="radio" value="" name="1"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="link-radio" class="ms-1 text-sm font-medium text-gray-900 dark:text-gray-600 cursor-pointer"> 
                            Từ A - Z
                        </label>
                    </div>
                    <div class="flex items-center px-2" wire:click="filter('ztoa')">
                        <input id="link-radio2" type="radio" value="" name="1"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="link-radio2" class="ms-1 text-sm font-medium text-gray-900 dark:text-gray-600 cursor-pointer">
                            Từ Z - A
                        </label>
                    </div>
                    <div class="flex items-center px-2" wire:click="filter('mintomax')">
                        <input id="link-radio3" type="radio" value="" name="1"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="link-radio3" class="ms-1 text-sm font-medium text-gray-900 dark:text-gray-600 cursor-pointer"> 
                            Giá tăng dần </label>
                    </div>
                    <div class="flex items-center px-2" wire:click="filter('maxtomin')">
                        <input id="link-radio4" type="radio" value="" name="1"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="link-radio4" class="ms-1 text-sm font-medium text-gray-900 dark:text-gray-600 cursor-pointer">
                            Giá giảm dần
                        </label>
                    </div>
                </form>
            </div>
            <div class="py-5">
                <div class="grid grid-cols-4 gap-5">
                    @foreach ($products as $product)
                        <x-product :$product />
                    @endforeach
                </div>
                <div class="mt-5">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
