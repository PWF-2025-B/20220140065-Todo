@props(['href'])

<a href = "{{ $href }}"
{{$attributes->merge([
    'class' => 'inline-flex items-center
                    px-4 py2
                    bg-white text-black border-gray-300
                    uppercase font-medium rounded-lg text-sm
                    hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100
                    dark:bg-gray-800 dark:text-white dark:border-grey-600
                    dark:hover:bg-gray-700 dark:focus:ring-gray-700',

    ]) }}>
    create
</a>