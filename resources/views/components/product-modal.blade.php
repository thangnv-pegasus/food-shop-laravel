@props(['product'])

<div class="grid grid-cols-2 gap-x-5 overflow-hidden">
    <div>
        <div class="w-full h-[29rem] border-[1px] border-solid border-[#ebebeb] rounded-xl overflow-hidden">
            <img src={{ $product->images[0] }} alt="" class="w-full h-full object-cover object-center block">
        </div>
        <div class="flex mt-5">
            @foreach ($product->images as $image)
                <x-image-item :imgUrl=$image />
            @endforeach
        </div>
    </div>
    <div class="text-left">
        <a href="/product/{{ $product->id }}"
            class="text-3xl transition-all ease-linear font-normal hover:text-baseColor">
            {{ $product->name }}
        </a>
        <div class="font-normal py-2 flex items-center">
            <p class="pr-2">
                <span class="text-[#707070]">Thương hiệu:</span>
                <span>
                    @if ($product->brand)
                        {{ $product->brand }}
                    @else
                        Đang cập nhật
                    @endif
                </span>
            </p>
            <p class="pl-2">
                <span class="text-[#707070]">Tình trạng:</span>
                <span>Còn hàng</span>
            </p>
        </div>
        <div class="font-normal flex items-center py-2">
            @if ($product->price_sale)
                <p class="text-xl font-medium text-baseColor">
                    {{ number_format($product->price_sale, 0) }}đ</p>
                <p class="text-sm font-medium text-[#707070] px-2 line-through decoration-[1.5px]">
                    {{ number_format($product->price, 0) }}đ
                </p>
            @else
                <p class="text-xl font-medium text-baseColor">
                    {{ number_format($product->price, 0) }}đ
                </p>
            @endif
        </div>
        <div class="py-2 font-normal">
            @if ($product->origin && $product->description && $product->weigh)
                <p class="py-2">Nguồn gốc: {{ $product->origin }}</p>
                <p class="py-2">Khối lượng: {{ $product->weigh }}kg/hộp</p>
                <p class="py-2 leading-6">{{ $product->description }}</p>
            @else
                Thông tin sản phẩm đang được cập nhật
            @endif
        </div>
        <div class="block font-normal py-4 border-t-[1px] border-solid border-[#ebebeb]">
            <div class="flex items-center">
                <div>
                    Số lượng:
                </div>
                <div x-data="{ count: 1 }" class="pl-5 text-lg flex items-center">
                    <template x-if="count <= 0">
                        <button
                            class="border-[1px] border-solid border-[#ebebeb] w-8 h-8 leading-[24px] text-center rounded-full">-</button>
                    </template>
                    <template x-if="count > 0">
                        <button x-on:click="count--"
                            class="border-[1px] border-solid border-[#ebebeb] w-8 h-8 leading-[24px] text-center rounded-full">-</button>
                    </template>
                    <span x-text="count"
                        class="border-[1px] mx-3 inline-block border-solid border-[#ebebeb] w-8 h-8 leading-[32px] text-center rounded-full text-base"></span>
                    <button x-on:click="count++"
                        class="border-[1px] border-solid border-[#ebebeb] w-8 h-8 leading-[24px] text-center rounded-full">+</button>


                </div>

            </div>
            <form action="" method="post" class="block py-2 mt-5">
                <input type="submit" value="Thêm vào giỏ hàng"
                    class="block w-64 text-center bg-bgStriped text-white text-base font-medium py-2 rounded-full cursor-pointer">
            </form>

            <p class="py-2 text-[#8d90a6] font-medium text-sm">
                Gọi đặt mua:
                <a href="tel:19006750" class="text-baseColor transition-all ease-linear hover:text-black">19006750</a>
                để nhanh chóng đặt hàng
            </p>
        </div>
    </div>
</div>
