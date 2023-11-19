@props(['blog'])

<div class="transition-all ease-linear hover:shadow-productShadow">
    <a href="/tin-tuc/{{ $blog->id }}" class="w-full h-[22.5rem] block">
        <img src="{{ $blog->image }}" alt="" class="w-full h-full object-cover object-center block">
    </a>
    <div class="flex justify-center text-xs bg-white text-[#707070] px-10 py-2">
        <p class="pr-2">
            <span><i class="fa-regular fa-calendar-days"></i></span>
            <span class="text-baseColor font-medium ml-1">
                {{ $blog->create_at }}
            </span>
        </p>
        <p class="pl-2">
            <span>Đăng bởi: </span>
            <span class="text-baseColor font-medium ml-1">
                {{ $blog->author }}
            </span>
        </p>
    </div>
    <div class="bg-[#f5f6fb] py-5 px-8">
        <a href="/tin-tuc/{{ $blog->id }}"
            class="block text-center text-base font-medium transition-all ease-linear hover:text-baseColor">{{ $blog->title }}</a>
        <div class="line-clamp-2 text-sm text-[#707070] pt-2 mb-2">
            <?= $blog->content ?>
        </div>
    </div>
</div>
