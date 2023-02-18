<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="row">

                        <div class="col-md-6">

                            <h1>Chat with AI</h1>
                        </div>
                        <div class="col-md-6">
                            <h1>Translate any Indian Language</h1>
                        </div>
                    </div>
                    <div class="gap-3"><br></div>
                    <div class="row">
                        <div class="col-md-6 ">

                           
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 text-center">
                        <button class="btn btn-lg btn-primary">Translate</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>