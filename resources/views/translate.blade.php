<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Neural Machine Translation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('translate') }}">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">

                                <select name="src_lang" class="form-control form-control-lg">
                                    <option>Auto Detect</option>
                                    
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select name="tgt_lang" class="form-control form-control-lg">
                                    <option disabled>Target Language</option>
                                    <option value="asm_Beng" {{ $tgt_lang=="asm_Beng"?"selected":"" }}>Assamese</option>
                                    <option value="ben_Beng" {{ $tgt_lang=="ben_Beng"?"selected":"" }}>Bengali</option>
                                    <option value="bho_Deva" {{ $tgt_lang=="bho_Deva"?"selected":"" }}>Bhojpuri</option>
                                    <option value="hne_Deva" {{ $tgt_lang=="hne_Deva"?"selected":"" }}>Chhattisgarhi</option>
                                    <option value="eng_Latn" {{ $tgt_lang=="eng_Latn"?"selected":"" }}>English</option>
                                    <option value="guj_Gujr" {{ $tgt_lang=="guj_Gujr"?"selected":"" }}>Gujarati</option>
                                    <option value="hin_Deva" {{ $tgt_lang=="hin_Deva"?"selected":"" }}>Hindi</option>
                                    <option value="kas_Arab" {{ $tgt_lang=="kas_Arab"?"selected":"" }}>Kashmiri (Arabic script)	</option>
                                    <option value="kas_Deva" {{ $tgt_lang=="kas_Deva"?"selected":"" }}>Kashmiri (Devanagari script)</option>
                                    <option value="mai_Deva" {{ $tgt_lang=="mai_Deva"?"selected":"" }}>Maithili</option>
                                    <option value="mal_Mlym" {{ $tgt_lang=="mal_Mlym"?"selected":"" }}>Malayalam</option>
                                    <option value="mar_Deva" {{ $tgt_lang=="mar_Deva"?"selected":"" }}>Marathi</option>
                                    <option value="mni_Beng" {{ $tgt_lang=="mni_Beng"?"selected":"" }}>Manipuri</option>
                                    <option value="npi_Deva" {{ $tgt_lang=="npi_Deva"?"selected":"" }}>Nepali</option>
                                    <option value="ori_Orya" {{ $tgt_lang=="ori_Orya"?"selected":"" }}>Odia</option>
                                    <option value="pan_Guru" {{ $tgt_lang=="pan_Guru"?"selected":"" }}>Punjabi</option>
                                    <option value="san_Deva" {{ $tgt_lang=="san_Deva"?"selected":"" }}>Sanskrit</option>
                                    <option value="sat_Deva" {{ $tgt_lang=="sat_Deva"?"selected":"" }}>Santali</option>
                                    <option value="snd_Deva" {{ $tgt_lang=="snd_Deva"?"selected":"" }}>Sindhi</option>  
                                    <option value="tam_Taml" {{ $tgt_lang=="tam_Taml"?"selected":"" }}>Tamil</option>
                                    <option value="tel_Telu" {{ $tgt_lang=="tel_Telu"?"selected":"" }}>Telugu</option>
                                    <option value="urd_Arab" {{ $tgt_lang=="urd_Arab"?"selected":"" }}>Urdu (Arabic script)</option>
                                    

                                </select>
                            </div>
                        </div>
                        <div class="gap-3"><br></div>
                        <div class="row">
                            <div class="col-md-6 ">

                                <textarea name="src_text" class="form-control form-control-lg" rows="5">{{ !empty($src_text)?$src_text:"" }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="bd-clipboard">
                                    <button type="button" class="btn-clipboard" title="" data-bs-original-title="Copy to clipboard">Copy</button>
                                </div>
                                <div class="highlight">

                                    <div class="chroma">
                                        <div class="callout-info">
                                            <code>{{ !empty($tgt_text)?$tgt_text:"" }}</code>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end text-center mt-4">
                            <x-button>
                                {{ __('Translate') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>