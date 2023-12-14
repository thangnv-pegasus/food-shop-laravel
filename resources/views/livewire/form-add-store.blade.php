@props(['id'])
<form method="post" action="/product" class="block" wire:submit.prevent="addStore">
    @csrf
    <div class="flex items-center">
        <div>
            Số lượng:
        </div>
        <div class="pl-5 text-lg flex items-center">
            <div wire:click="decrease()"
                class="border-[1px] cursor-pointer border-solid border-[#ebebeb] w-8 h-8 leading-[24px] text-center rounded-full transition-all ease-linear hover:border-baseColor"
            >
                -
            </div>
            <input type="text"
                class="border-[1px] mx-3 inline-block select-none border-solid border-[#ebebeb] w-8 h-8 leading-[32px] text-center rounded-full text-base"
                value={{ $quantity }} disabled name="quantity"
            >
            <div wire:click="increase()"
                class="border-[1px] cursor-pointer border-solid border-[#ebebeb] w-8 h-8 leading-[24px] text-center rounded-full transition-all ease-linear hover:border-baseColor"
            >
                +
            </div>
        </div>
    </div>
    <div  class="block py-2 mt-5">
        <input type="submit" value="Thêm vào giỏ hàng" name="submit"
            class="block w-64 text-center bg-bgStriped text-white text-base font-medium py-2 rounded-full cursor-pointer">
    </div>
</div>
