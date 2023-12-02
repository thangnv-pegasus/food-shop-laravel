<x-layout>
    <x-title-page title="Đăng ký tài khoản" />
    <div>
        <div class="max-w-container mx-auto py-10">
            <h2 class="text-center text-2xl font-medium uppercase tracking-wider">Đăng ký tài khoản</h2>
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
            <form action="" method="post" class="w-1/2 block mx-auto">
                @csrf
                <input type="text" name="name" id="" placeholder="Họ và tên" value="{{ old('name') }}"
                    class="block w-full text-sm border-[1px] border-solid border-[#ebebeb] outline-none py-3 px-5 rounded-full my-4 focus:border-green-800">
                @error('name')
                    <p class="text-red-500 text-xs mt-1 ml-2">{{ $message }}</p>
                @enderror
                <input type="text" name="email" id="" placeholder="Email" value="{{ old('email') }}"
                    class="block w-full text-sm border-[1px] border-solid border-[#ebebeb] outline-none py-3 px-5 rounded-full my-4 focus:border-green-800">
                @error('email')
                    <p class="text-red-500 text-xs mt-1 ml-2">{{ $message }}</p>
                @enderror
                <input type="tel" name="phone" id="" placeholder="Số điện thoại" value="{{ old('phone') }}"
                    class="block w-full text-sm border-[1px] border-solid border-[#ebebeb] outline-none py-3 px-5 rounded-full my-4 focus:border-green-800">
                @error('phone')
                    <p class="text-red-500 text-xs mt-1 ml-2">{{ $message }}</p>
                @enderror
                <input type="password" name="password" id="" placeholder="Mật khẩu" value="{{ old('password') }}"
                    class="block w-full text-sm border-[1px] border-solid border-[#ebebeb] outline-none py-3 px-5 rounded-full my-4 focus:border-green-800">
                @error('password')
                    <p class="text-red-500 text-xs mt-1 ml-2">{{ $message }}</p>
                @enderror
                <button type="submit" class="block w-full bg-bgStriped text-white py-3 mt-6 text-sm rounded-full">Đăng
                    ký</button>

            </form>
        </div>
    </div>
</x-layout>
