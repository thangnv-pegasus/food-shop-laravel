@props(['title' => '', 'isImage' => 'true', 'subTitle' => '', 'to' => ''])

<div>
    @if ($to === '')
        <h2
            class="bg-bgStriped [-webkit-background-clip:text] text-4xl text-center [-webkit-text-fill-color:transparent] uppercase font-normal py-4">
            {{ $title }}
        </h2>
    @else
        <a href={{ $to }}
            class="bg-bgStriped [-webkit-background-clip:text] text-4xl text-center [-webkit-text-fill-color:transparent] uppercase font-normal py-4 block transition-all ease-linear hover:text-baseColor hover:[-webkit-text-fill-color:unset]">
            {{ $title }}
        </a>
    @endif
    @if ($isImage == 'true')
        <div class="text-center">
            <img src="https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/bg_title.png?1608187967113"
                alt="" class="block w-auto mx-auto">
        </div>
    @endif
    <p class="text-center px-24 text-sm text-[#8b8b99] py-4"> {{ $subTitle }} </p>
</div>
