@error($fieldName)
    <span x-data="{ show: true }" x-show="show" x-init="() => { setTimeout(() => { show = false; }, 10000); }"
        class="text-red-500 text-xs font-small mr-2 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
        {{ $message }}
    </span>
@enderror

