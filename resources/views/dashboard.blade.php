<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .timeline-with-icons {
            border-left: 1px solid hsl(0, 0%, 90%);
            position: relative;
            list-style: none;
        }

        .timeline-with-icons .timeline-item {
            position: relative;
        }

        .timeline-with-icons .timeline-item:after {
            position: absolute;
            display: block;
            top: 0;
        }

        .timeline-with-icons .timeline-icon {
            position: absolute;
            left: -48px;
            background-color: hsl(217, 88.2%, 90%);
            color: hsl(217, 88.8%, 35.1%);
            border-radius: 50%;
            height: 31px;
            width: 31px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="row">

                        <div class="col-md-6">

                            <h1 class="h1">Translation</h1>
                            <a href="/translate" class="btn btn-lg btn-info btn-block">Translate</a>
                        </div>
                        <div class="col-md-6">
                            <h1 class="h1">Image Generation</h1>

                            <a href="/prompt" class="btn btn-lg btn-warning btn-block">Generate Image from Prompt</a>

                        </div>
                    </div>
                    <div class="gap-3"><br><br></div>
                    <div class="row">
                        <div class="col-md-12 ">

                            <img class="img" width="90%" height="90%" src="/img/guide.png">



                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>