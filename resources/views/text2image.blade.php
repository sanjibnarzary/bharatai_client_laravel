<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Generate Image from text') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card" style="height:25em">
                                <img src="http://14.139.218.218:1230/images/{{$image}}" style="height:27em" class="card-img-top" alt="{{$prompt}}">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="height:75%">
                            </div>
                            <form method="POST" action="{{ route('prompt') }}">
                                @csrf
                                <div>
                                    <x-label for="prompt" :value="__('Prompt')" />

                                    <x-input id="prompt" class="form-control " type="text" rows="3" name="prompt" value="{{ $prompt }}" required autofocus />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-button>
                                        {{ __('Generate Image') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="">
                        Generated using Stable Diffusion
                    </div>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>