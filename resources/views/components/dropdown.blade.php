@props(['trigger'])

<div x-data="{ show:false }" @click.away="show = false" class="relative">
    <!-- Trigger -->
    <div @click = "show = !show">
        {{$trigger}}

    </div>
    <!-- Dropdown links -->
    <div x-show="show" class="py-2 absolute bg-red-300 text-gray-200 mt-2 rounded-xl z-50 overflow-auto max-h-52" style="display:none">

      {{$slot}}

    </div>
</div>