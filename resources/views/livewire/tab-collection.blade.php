<div>
    <div class="flex justify-center text-sm pb-5">
        <a wire:click="setTabCollection('vegetable')"
            class="{{ $thisTab === 'vegetable' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
            Rau củ
        </a>
        <a wire:click="setTabCollection('fruit')"
            class="{{ $thisTab === 'fruit' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
            Hoa quả
        </a>
        <a wire:click="setTabCollection('sea-food')"
            class="{{ $thisTab === 'sea-food' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
            Hải sản
        </a>
        <a wire:click="setTabCollection('nuts')"
            class="{{ $thisTab === 'nuts' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
            Các loại hạt
        </a>
        <a wire:click="setTabCollection('fresh-food')"
            class="{{ $thisTab === 'fresh-food' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
            Thực phẩm tươi sống
        </a>
    </div>
    <div class="grid grid-cols-4 gap-5 py-5">
        @foreach ($products as $product)
            <x-product :$product />
        @endforeach
    </div>
</div>
