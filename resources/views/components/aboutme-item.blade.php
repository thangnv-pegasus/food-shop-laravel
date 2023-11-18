@props(['about'])

<?php $about ?>

<div>
    <div class="w-36 mx-auto">
        <img src={{ $about->imageUrl }} alt="" class="w-full h-full object-cover object-center block">
    </div>
    <h3 class="font-semibold pt-3 pb-2 text-center text-lg">{{ $about->title }}</h3>
    <p class="text-sm text-[#707070] text-center">
        {{ $about->content }}
    </p>
</div>
