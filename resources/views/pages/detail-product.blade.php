<x-layout>
    <x-title-page title="{{ $productx->name }}" />
    <div class="py-10">
        <div class="max-w-container mx-auto">
            <div class="grid grid-cols-2 gap-x-10">
                <div>
                    <div class="w-full h-[31rem] border-[1px] border-solid border-[#ebebeb] rounded-lg overflow-hidden">
                        <img src="{{ $product->images[0] }}" alt=""
                            class="w-full h-full object-cover object-center block">
                    </div>
                    <div class="flex py-2">
                        @foreach ($product->images as $image)
                            <div
                                class="w-24 h-24 border-[1px] border-solid border-[#ebebeb] mr-2 rounded-md overflow-hidden cursor-pointer">
                                <img src="{{ $image }}" alt=""
                                    class="object-cover object-center w-full h-full block">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h2 class="font-normal text-3xl pb-2">{{ $product->name }}</h2>
                    <div class="flex text-sm py-2">
                        <p class="pr-2 border-r-2 border-solid border-[#333]">Thương hiệu: @if ($product->brand)
                                <span class="text-baseColor">
                                    {{ $product->brand }}
                                </span>
                            @else
                                <span class="text-baseColor"> Đang cập nhật</span>
                            @endif
                        </p>
                        <p class="px-2">
                            Tình trạng: <span class="text-baseColor">Còn hàng</span>
                        </p>
                    </div>
                    <div class="py-2 flex items-center">
                        @if ($product->price_sale)
                            <p class="font-medium text-baseColor">{{ number_format($product->price_sale, 0) }}đ</p>
                            <p class="text-xs line-through mx-2 text-[#707070]">{{ number_format($product->price, 0) }}đ
                            </p>
                        @else
                            <p class="font-medium text-baseColor">{{ number_format($product->price, 0) }}đ</p>
                        @endif
                    </div>
                    @if (!($product->origin && $product->weigh && $product->description))
                        <p class="py-2">Thông tin sản phẩm đang được cập nhật</p>
                    @else
                        <p class="text-sm py-2 leading-6">
                            Nguồn gốc: <span>{{ $product->origin }}</span>
                        </p>
                        <p class="text-sm py-2 leading-6">
                            Khối lượng: <span>{{ $product->weigh }}kg/hộp</span>
                        </p>
                        <p class="text-sm pt-2 pb-5 leading-6">
                            {{ $product->description }}
                        </p>
                    @endif
                    <div class="py-5 border-t-[1px] border-solid border-[#ebebeb]">
                        @livewire("form-add-store", ['id' => $product->id])
                        <p class="py-3 text-sm">
                            Gọi đặt mua: <a href="tel:19006750"
                                class="transition-all ease-linear text-baseColor hover:text-black">19006750</a> để nhanh
                            chóng đặt hàng
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="max-w-container mx-auto"> 
            <a href="" class="block w-full my-5">
                <img src="https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/bg_pro.jpg?1677439224289"
                    alt="" class="w-full h-auto">
            </a>
            <div class="py-8" x-data="{ open: true }">
                <div class="flex border-b-[1px] text-2xl font-medium border-solid border-[#ebebeb] justify-center">
                    <button x-bind:class="open === true ? ' after:bg-baseColor' : ' after:bg-transparent'"
                        class="p-5 mx-2 relative after:content-[''] after:absolute after:bottom-0 after:left-1/2 after:w-14 after:h-1 after:-translate-x-1/2"
                        @click="open = true">
                        Mô tả sản phẩm
                    </button>
                    <button x-bind:class="!open ? ' after:bg-baseColor' : 'after:bg-transparent'" @click="open = false"
                        class="p-5 mx-2 relative after:content-[''] after:absolute after:bottom-0 after:left-1/2 after:w-14 after:h-1 after:-translate-x-1/2">Hỏi
                        đáp về sản phẩm
                    </button>
                </div>
                <div class="text-sm [&>p]:py-1 [&>p]:leading-6 py-5" x-show="open">
                    <?= $product->detail ?>
                </div>
                <div x-show="!open" class="py-10 leading-6 text-sm">
                    Các nội dung Hướng dẫn mua hàng viết ở đây
                </div>
            </div>
            <div>
                <x-title-collection title="Sản phẩm liên quan" />
                <div class="grid grid-cols-4 gap-x-10">
                    @foreach ($related as $prod)
                        <x-product :product=$prod />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
