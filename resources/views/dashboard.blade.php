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
                            <div class=' mt-5 w-full'>
                                @foreach ($applications as $application)
                                    <div class="rounded-xl  border p-5 shadow-md w-11/12 bg-white mt-5">
                                        <div class="flex w-full items-center justify-between border-b pb-3">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]">
                                                </div>
                                                <div class="text-lg font-bold text-slate-700">
                                                    {{ $application->user->name }}</div>
                                            </div>
                                            <div class="flex items-center space-x-8">
                                                <button
                                                    class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">{{ $application->id }}</button>
                                                <div class="text-xs text-neutral-500">
                                                    {{ $application->user->created_at }}</div>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-6">
                                            <div class="mb-3 text-xl font-bold">
                                                {{ $application->client_name }}-{{ $application->client_phone_number }}
                                            </div>
                                            <div class="text-xl flex text-neutral-600">
                                                <h3 class="font-bold uppercase">{{ $application->product_address }}</h3>
                                                -
                                                {{ $application->product_name }}
                                            </div>
                                        </div>

                                        <div>
                                            <div class="flex items-center justify-between text-slate-500">
                                                <div class="flex space-x-4 md:space-x-8">
                                                    <div
                                                        class=" cursor-pointer items-center transition hover:text-slate-600">
                                                        Asil narxi
                                                        <p class="flex">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                            <span>{{ $application->price_org }}</span>
                                                        </p>
                                                    </div>-
                                                    <div
                                                        class=" cursor-pointer items-center transition hover:text-slate-600">
                                                        Sotilgan narxi
                                                        <p class="flex">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                            <span>{{ $application->price_selled }}</span>

                                                        </p>
                                                    </div>
                                                    <span class=""> Umumiy Foyda
                                                        <p class="flex">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                            <?php echo $total = $application->price_selled - $application->price_org; ?>
                                                        </p>
                                                    </span>
                                                    <span class=""> Sotuvchi foydasi
                                                        <p class="flex">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                            <?php echo $total = ($application->price_selled - $application->price_org) * 0.15; ?>
                                                        </p>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <p class="mt-5 mr-5">
                                    {{ $applications->links() }}
                                </p>

                            </div>
                        @else
                            <div class="mt-5 mb-5">
                                <div
                                    class='flex items-center rounded justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 cursor-pointer'>
                                    <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                                        <div class='max-w-md mx-auto space-y-6'>

                                            <form action="{{ route('applications.store') }}" method="POST" my-5
                                                enctype="multipart/form-data">
                                                @csrf
                                                <h2 class="text-2xl font-bold ">Sotilgan Maxsulot</h2>
                                                <hr class="my-6">
                                                <label class="uppercase text-sm font-bold opacity-70">Maxsulot
                                                    Nomi</label>
                                                <input type="text" required name="product_name"
                                                    class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                                <label class="uppercase text-sm font-bold opacity-70">Sotilgan maxsulot
                                                    manzili</label>
                                                <textarea type="text" required name="product_address" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded"></textarea>
                                                <label class="uppercase text-sm font-bold opacity-70">Xaridor ismi
                                                    <input type="text" required name="client_name"
                                                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                                                </label>
                                                <label class="uppercase text-sm font-bold opacity-70">Xaridor nomeri
                                                    <input type="number" required name="client_phone_number"
                                                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                                                </label>
                                                <div class="flex">
                                                    <label class="uppercase mr-1 text-sm font-bold opacity-70">Asil Narx
                                                        <input type="number" required name="price_org"
                                                            class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                                                    </label>
                                                    <label class="uppercase ml-3 text-sm font-bold opacity-70">Sotilgan
                                                        Narx
                                                        <input type="number" required name="price_selled"
                                                            class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                                                    </label>
                                                </div>
                                                <div class="flex">
                                                    <label
                                                        class="uppercase mr-5 mt-5 text-sm font-bold opacity-70">File</label>
                                                    <input type="file" name="file_url"
                                                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                                                </div>
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
