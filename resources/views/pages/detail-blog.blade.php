<x-layout>
    <x-title-page title="{{ $blog->title }}" />
    <div>
        <div class="max-w-container mx-auto py-10">
            <div class="py-5">
                <h2 class="text-4xl font-normal pb-4">{{ $blog->title }}</h2>
                <div class="w-[41rem] h-[41rem] mx-auto my-10">
                    <img src="{{ $blog->image }}" alt="" class="w-full h-full object-cover object-center block">
                </div>
                <div class="flex items-center text-sm pb-4">
                    <div class="pr-2 border-solid border-r-[1px] border-black">
                        <span class="pr-1">
                            <i class="fa-regular fa-clock"></i>
                        </span>
                        <span class="text-grayColor">
                            {{ $blog->create_at }}
                        </span>
                    </div>
                    <div class="pl-2 border-solid border-l-[1px] border-black">
                        <span class="pr-1">Đăng bởi: </span>
                        <span class="text-grayColor">
                            {{ $blog->author }}
                        </span>
                    </div>
                </div>
                <div class="leading-7 [&>p]:py-1">
                    <?= $blog->content ?>
                </div>
            </div>
            {{-- comment --}}
            <div class="py-10 border-solid border-t-[1px]">
                <h2 class="text-lg font-normal">Viết bình luận</h2>
                <form action="" method="post">
                    <div class="grid grid-cols-2 gap-x-8 py-4">
                        <input type="text" name="" id="" placeholder="Họ và tên"
                            class="text-sm outline-none rounded-full px-4 py-3 border-[1px] border-solid border-zinc-300">
                        <input type="email" name="" id="" required placeholder="Email"
                            class="text-sm outline-none rounded-full px-4 py-3 border-[1px] border-solid border-zinc-300">
                    </div>
                    <div>
                        <textarea name="" placeholder="Viết bình luận" class="w-full border-[1px] border-solid border-zinc-300 outline-none h-32 px-4 py-3 rounded-xl text-sm"></textarea>
                    </div>
                    <button type="submit" class="block py-3 bg-bgStriped px-6 text-white mt-4 text-center border-solid border-[1px] border-[#ebebeb] transition-all ease-linear hover:bg-baseColor text-sm rounded-full">Gửi bình luận</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
