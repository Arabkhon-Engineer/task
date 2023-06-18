<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asosiy bo\'lim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (auth()->user()->role->name == 'manager')
                        <span class="mt-5 mb-5 font-bold text-xl">Resived Applications!</span>
                        <div class=" flex ">
                            <div class=' mt-5'>
                                <div class="rounded-xl border p-5 shadow-md w-11/12 bg-white">
                                    <div class="flex w-full items-center justify-between border-b pb-3">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]">
                                            </div>
                                            <div class="text-lg font-bold text-slate-700">Joe Smith</div>
                                        </div>
                                        <div class="flex items-center space-x-8">
                                            <button
                                                class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">ID:
                                                5</button>
                                            <div class="text-xs text-neutral-500">2 hours ago</div>
                                        </div>
                                    </div>

                                    <div class="mt-4 mb-6">
                                        <div class="mb-3 text-xl font-bold">Nulla sed leo tempus, feugiat velit vel,
                                            rhoncus
                                            neque?</div>
                                        <div class="text-sm text-neutral-600">Aliquam a tristique sapien, nec bibendum
                                            urna.
                                            Maecenas convallis dignissim turpis, non suscipit mauris interdum at. Morbi
                                            sed
                                            gravida nisl, a pharetra nulla. Etiam tincidunt turpis leo, ut mollis ipsum
                                            consectetur quis. Etiam faucibus est risus, ac condimentum mauris consequat
                                            nec.
                                            Curabitur eget feugiat massa</div>
                                    </div>

                                    <div>
                                        <div class="flex items-center justify-between text-slate-500">
                                            <div class="flex space-x-4 md:space-x-8">
                                                <div
                                                    class="flex cursor-pointer items-center transition hover:text-slate-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                                    </svg>
                                                    <span>125</span>
                                                </div>
                                                <div
                                                    class="flex cursor-pointer items-center transition hover:text-slate-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                    <span>4</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=' mt-5'>
                                <div class="rounded-xl border p-5 shadow-md w-11/12 bg-white">
                                    <div class="flex w-full items-center justify-between border-b pb-3">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]">
                                            </div>
                                            <div class="text-lg font-bold text-slate-700">Arabjon Nishonov</div>
                                        </div>
                                        <div class="flex items-center space-x-8">
                                            <button
                                                class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">Category</button>
                                            <div class="text-xs text-neutral-500">2 hours ago</div>
                                        </div>
                                    </div>

                                    <div class="mt-4 mb-6">
                                        <div class="mb-3 text-xl font-bold">Nulla sed leo tempus, feugiat velit vel,
                                            rhoncus
                                            neque?</div>
                                        <div class="text-sm text-neutral-600">Aliquam a tristique sapien, nec bibendum
                                            urna.
                                            Maecenas convallis dignissim turpis, non suscipit mauris interdum at. Morbi
                                            sed
                                            gravida nisl, a pharetra nulla. Etiam tincidunt turpis leo, ut mollis ipsum
                                            consectetur quis. Etiam faucibus est risus, ac condimentum mauris consequat
                                            nec.
                                            Curabitur eget feugiat massa</div>
                                    </div>

                                    <div>
                                        <div class="flex items-center justify-between text-slate-500">
                                            <div class="flex space-x-4 md:space-x-8">
                                                Phone: <a href="tel:+998949113133">+998-94-911-31-33</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @else
                        <span class="mt-5 mb-5 font-bold text-xl">You are Seles</span>
                        <div class="mt-5 mb-5">
                            <div
                                class='flex items-center rounded justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 cursor-pointer'>
                                <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                                    <div class='max-w-md mx-auto space-y-6'>

                                        <form action="" method="POST" my-5 enctype="multipart/form-data">
                                            @csrf
                                            <h2 class="text-2xl font-bold ">Sotilgan Maxsulot</h2>
                                            <hr class="my-6">
                                            <label class="uppercase text-sm font-bold opacity-70">Maxsulot Nomi</label>
                                            <input type="text"
                                                class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                            <label class="uppercase text-sm font-bold opacity-70">Sotilgan maxsulot manzili</label>
                                            <textarea type="text" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded"></textarea>
                                            <label class="uppercase text-sm font-bold opacity-70">Asil Narx</label>
                                            <input type="text" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                                            <label class="uppercase text-sm font-bold opacity-70">Sotilgan Narx</label>
                                            <input type="text" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                                            <label class="uppercase text-sm font-bold opacity-70">1-File</label>
                                            <input type="file" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                                            <label class="uppercase text-sm font-bold opacity-70">2-File</label>
                                            <input type="file" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                                            <input type="submit"
                                                class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300"
                                                value="Send">
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
