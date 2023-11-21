@props(['product'])

<div
    class="border-[1px] border-solid border-[#f5f6fb] transition-all ease-linear hover:shadow-productShadow rounded-xl overflow-hidden relative">
    <div class="w-full h-64 block relative group">
        <a href="/product/{{ $product->id }}" class="w-full h-64 block">
            <img src="{{ $product->images[0] }}" alt="" class="w-full h-full object-cover object-center block">
        </a>

        <div
            class="absolute top-0 left-0 right-0 bottom-0 bg-[rgba(0,0,0,0.1)] hidden transition-all ease-linear group-hover:block">
        </div>
        <div
            class="absolute top-0 left-0 right-0 bottom-0 transition-all ease-linear hidden justify-center items-center group-hover:flex">
            <div class="flex">
                <button
                    class="block bg-white text-black mx-2 h-10 w-10 text-center rounded-full text-sm transition-all ease-linear hover:bg-baseColor hover:text-white font-bold">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
                <div class="block bg-white text-black mx-2 h-10 w-10 text-center rounded-full text-sm transition-all ease-linear hover:bg-baseColor hover:text-white font-bold"
                    x-data="{ open: false }" @click="open = true">
                    <i class="fa-solid fa-magnifying-glass leading-[40px] cursor-pointer"></i>
                    <div x-show="open"
                        class="fixed top-0 left-0 right-0 bottom-0 bg-[rgba(0,0,0,0.2)] z-20 flex items-center justify-center">
                        <div class="w-4/5 h-5/6 overflow-y-scroll text-black bg-white relative rounded-lg overflow-x-hidden p-8"
                            @click.outside = "open = false">
                            <button @click="open = false"
                                class="absolute text-black top-0 right-0 text-2xl px-2 py-1 z-10">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                            <x-product-modal :$product />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-6 bg-[#f5f6fb]">
        <a href="/product/{{ $product->id }}"
            class="line-clamp-1 text-center leading-6 text-base transition-all ease-linear hover:text-baseColor font-medium">
            {{ $product->name }}
        </a>
        @if ($product->price_sale)
            <div class="flex justify-center py-1 items-center">
                <p class="text-base font-medium text-baseColor">{{ number_format($product->price_sale, 0) }}đ</p>
                <p class="text-sm font-medium text-[#707070] px-2 line-through decoration-[1.5px]">
                    {{ number_format($product->price, 0) }}đ</p>
            </div>
        @else
            <p class="text-base font-medium text-baseColor text-center py-1">{{ number_format($product->price, 0) }}đ
            </p>
        @endif
    </div>
</div>
