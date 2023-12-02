<x-layout>
    <x-title-page title="Đăng nhập tài khoản" />
    <div>
        <div class="max-w-container mx-auto py-10">
            <h2 class="text-center text-2xl font-medium uppercase tracking-wider">Đăng nhập tài khoản</h2>
            <div class="flex items-center justify-center py-4">
                <button class="bg-[#3b5998] text-white flex items-center mx-2 rounded-sm">
                    <p class="px-4 py-2 border-solid border-r-[1px] border-stone-500"><i
                            class="fa-brands fa-facebook-f"></i></p>
                    <span class="text-sm px-3">Facebook</span>
                </button>
                <button class="bg-[#e14b33] text-white flex items-center mx-2 rounded-sm">
                    <p class="px-3 py-2 border-solid border-r-[1px] border-stone-500"><i
                            class="fa-brands fa-google-plus-g"></i></p>
                    <span class="text-sm px-3">Google</span>
                </button>
            </div>
            <form action="/login" method="post" class="w-1/2 block mx-auto">
                @csrf
                <input type="text" name="email" id="" placeholder="Email"
                    class="block w-full text-sm border-[1px] border-solid border-[#ebebeb] outline-none py-3 px-5 rounded-full my-4 focus:border-green-800">
                <input type="password" name="password" id="" placeholder="Mật khẩu"
                    class="block w-full text-sm border-[1px] border-solid border-[#ebebeb] outline-none py-3 px-5 rounded-full my-4 focus:border-green-800">
                @error('email')
                    <p class="text-xs text-red-500 ml-1">{{ $message }}</p>
                @enderror
                <button type="submit" class="block w-full bg-bgStriped text-white py-3 mt-6 text-sm rounded-full">
                    Đăng nhập
                </button>
            </form>
            <p class="text-center mt-10 text-sm">Bạn chưa có tài khoản, vui lòng đăng ký <a href="/register"
                    class="underline transition-all ease-linear hover:text-baseColor">tại đây!</a></p>
        </div>
    </div>
</x-layout>
