{{-- <?= $products ?> --}}

<x-layout>

    <div class="">
        {{-- banner --}}
        <div>
            <img src="https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/slider_1.jpg?1677439224289"
                alt="">
        </div>
        <div class="flex">
            @foreach ($banners as $item => $value)
                <x-banner-item :banner=$value />
            @endforeach
        </div>

        {{-- Ve chung toi --}}
        <div class="py-10">
            <div class="max-w-container mx-auto">
                <x-title-collection title="Về chúng tôi" isImage="true" to=""
                    subTitle="Hiện tại vùng nguyên liệu của chúng tôi có thể cung cấp các thực tập tươi sạch với số lượng lớn vì đang vào vụ mùa thu hoạch nên chúng tôi có thể cung ứng cho tất cả các đối tác xuất khẩu nông sản trên cả nước." />

                {{-- <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                        <div><h3>1</h3></div>
                        <div><h3>2</h3></div>
                        <div><h3>3</h3></div>
                        <div><h3>4</h3></div>
                        <div><h3>5</h3></div>
                        <div><h3>6</h3></div>
                      </div> --}}

                <div class="grid grid-cols-4 gap-x-10 mt-9">
                    @foreach ($aboutmes as $about)
                        <x-aboutme-item :about=$about />
                    @endforeach
                </div>

            </div>
        </div>

        {{-- Danh muc san pham --}}

        <div class="max-w-container mx-auto py-8">
            <x-title-collection title="Danh mục sản phẩm" to="/san-pham" />
            @livewire('tab-collection')
            @livewireScripts
        </div>

        {{-- Hotline --}}
        <div
            class="bg-[url('https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/bg_hotline.jpg?1677439224289')] flex items-center justify-center py-20 bg-no-repeat bg-cover bg-fixed bg-center my-10">
            <div class="text-white text-center">
                <p class="font-medium text-3xl tracking-widest pt-3 pb-5 [text-shadow:_1px_2px_black]">Hotline</p>
                <a href="tel:19006750"
                    class="block font-bold text-5xl pb-3 [text-shadow:_1px_2px_black] transition-all ease-linear hover:text-baseColor">1900
                    6750</a>
                <p class="w-2/3 mx-auto text-sm py-3 [text-shadow:_1px_2px_black]">Chúng tôi cam kết 100% các sản phẩm
                    có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng ngon nhất.</p>
            </div>
        </div>

        {{-- best seller --}}
        <div>
            <div class="max-w-container mx-auto">
                <x-title-collection title="Sản phẩm bán chạy" isImage='true' to="/products" />
                <div class="grid grid-cols-4 gap-5 py-5">
                    @foreach ($bestSeller as $product)
                        <x-product :$product />
                    @endforeach
                </div>
            </div>
        </div>

        {{-- blogs --}}
        <div>
            <div class="max-w-container mx-auto py-10">
                <x-title-collection title="Tin tức" isImage='true' to="/tin-tuc" />
                <div class="grid grid-cols-3 gap-x-8">
                    @foreach ($blogs as $blog)
                        <x-blog-item :$blog />
                    @endforeach
                </div>
            </div>
        </div>

        {{-- top brand --}}
        <div>
            <div class="max-w-container mx-auto py-10">
                <x-title-collection title="Top thương hiệu" isImage='true' />
                <div class="grid grid-cols-6 gap-x-20">
                    <div class="w-full h-32 select-none">
                        <img src="https://bizweb.dktcdn.net/thumb/compact/100/350/980/themes/802125/assets/brand_1.png?1677439224289"
                            alt="" class="w-full h-full object-cover object-center block select-none">
                    </div>
                    <div class="w-full h-32 select-none">
                        <img src="https://bizweb.dktcdn.net/thumb/compact/100/350/980/themes/802125/assets/brand_2.png?1677439224289"
                            alt="" class="w-full h-full object-cover object-center block select-none">
                    </div>
                    <div class="w-full h-32 select-none">
                        <img src="https://bizweb.dktcdn.net/thumb/compact/100/350/980/themes/802125/assets/brand_3.png?1677439224289"
                            alt="" class="w-full h-full object-cover object-center block select-none">
                    </div>
                    <div class="w-full h-32 select-none">
                        <img src="https://bizweb.dktcdn.net/thumb/compact/100/350/980/themes/802125/assets/brand_4.png?1677439224289"
                            alt="" class="w-full h-full object-cover object-center block select-none">
                    </div>
                    <div class="w-full h-32 select-none">
                        <img src="https://bizweb.dktcdn.net/thumb/compact/100/350/980/themes/802125/assets/brand_5.png?1677439224289"
                            alt="" class="w-full h-full object-cover object-center block select-none">
                    </div>
                    <div class="w-full h-32 select-none">
                        <img src="https://bizweb.dktcdn.net/thumb/compact/100/350/980/themes/802125/assets/brand_6.png?1677439224289"
                            alt="" class="w-full h-full object-cover object-center block select-none">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <x-site-footer />
</x-layout>

{{-- <script>
    $(document).ready(function() {
        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    });
</script> --}}
