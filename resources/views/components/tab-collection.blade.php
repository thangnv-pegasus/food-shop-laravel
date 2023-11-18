{{-- <form action="/collection/{name}" method="get" class="flex justify-center text-sm pb-5">
    @csrf
    <input type="submit" value="Rau củ" name='vegetable'
        class="{{ $tabIndex === 'vegetable' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
    <input type="submit" value="Hoa quả" name='fruit'
        class="{{ $tabIndex === 'fruit' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
    <input type="submit" value="Hải sản" name='sea-food'
        class="{{ $tabIndex === 'sea-food' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
    <input type="submit" value="Các loại hạt" name='nuts'
        class="{{ $tabIndex === 'nuts' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
    <input type="submit" value="Thực phẩm tươi sống" name='fresh-food'
        class="{{ $tabIndex === 'fresh-food' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
</form> --}}

{{-- {{ $req = request()->get('collectionName') }} --}}

<div class="flex justify-center text-sm pb-5">
    <a href="{{ route('index', ['collectionName' => 'vegetable']) }}"
        class="{{ request()->get('collectionName') === 'vegetable' || request()->get('collectionName') === null ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
        Rau củ
    </a>
    <a
        href="{{ route('index', ['collectionName' => 'fruit']) }}"class="{{ request()->get('collectionName') === 'fruit' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
        Hoa quả
    </a>
    <a
        href="{{ route('index', ['collectionName' => 'sea-food']) }}"class="{{ request()->get('collectionName') === 'sea-food' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
        Hải sản
    </a>
    <a
        href="{{ route('index', ['collectionName' => 'nuts']) }}"class="{{ request()->get('collectionName') === 'nuts' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
        Các loại hạt
    </a>
    <a
        href="{{ route('index', ['collectionName' => 'fresh-food']) }}"class="{{ request()->get('collectionName') === 'fresh-food' ? 'text-white border-baseColor bg-baseColor' : 'text-black border-[#e7e9f3]' }} block px-5 mx-2 border-[1px] border-solid border-[#e7e9f3] rounded-full py-2 cursor-pointer transition-all ease-linear hover:bg-baseColor hover:text-white">
        Hải sản
    </a>
</div>
