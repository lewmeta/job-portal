<div class="relative">
    @if ($formRef)
        <button 
        type="button" 
        class="absolute top-0 right-1 flex h-full items-center"
        @click="$refs['input-{{ $name }}'].value =''; $refs['{{ $formRef}}'].submit();"
        >
            ｘ
        </button>
    @endif

    <input x-ref="input-{{ $name }}" type="text" placeholder="{{ $placeholder }}" name="{{ $name }}"
        value="{{ $value }}" id="{{ $name }}"
        class="w-full rounded-md border-0 py-1.5 px-2.5 ring-1 ring-slate-300 placeholder:text-sm placeholder:text-slate-400 focus:ring-2 pr-5" />
</div>
