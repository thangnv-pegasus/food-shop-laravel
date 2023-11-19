<x-layout>
    <x-title-page title="Tất cả sản phẩm" />
    <div class="py-10">
        <div class="max-w-container mx-auto">
            <div
                class="flex justify-between items-center my-5 p-3 border-[1px] border-solid border-baseColor rounded-md">
                <p>Tất cả sản phẩm</p>
                <form action="" method="get">
                    form
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
</x-layout>
