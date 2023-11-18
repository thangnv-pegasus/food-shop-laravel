@props(['banner'])
<div class="group bg-[{{ $banner->backgroundColor }}] bg-[url('{{ $banner->backgroundImage }}')] bg-[50%_auto] bg-no-repeat bg-[right_center] flex-1 text-white p-14 relative">
    <h2 class="text-2xl pb-3 select-none relative z-10 transition-all ease-linear hover:text-baseColor cursor-pointer">{{ $banner->title }}</h2>
    <p class="mb-8 text-sm leading-6 font-normal select-none [text-shadow:_0_0px_1px_black] relative z-10">
        {{ $banner->content }}
    </p>
    <button class="bg-neutral-800 px-5 py-3 rounded-md mb-3 transition-all ease-linear hover:bg-baseColor relative z-10">
        Xem ngay
    </button>
    <div class="absolute top-0 left-0 right-0 bottom-0 bg-[rgba(0,0,0,0.3)] hidden transition-all ease-linear group-hover:block"></div>
</div>
