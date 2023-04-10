<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    name: {
        type: String,
        required: true,
    },
    icon: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
        default: true,
        required: true,
    }

});

// active ? 'bg-violet-500 text-white' : 'text-gray-900 ',
//     'group flex w-full items-center rounded-md px-2 py-2 ',
</script>

<template>
    <Link
        :href="href"
        class="group flex w-full items-center rounded-md px-2 py-2 text-gray-900 text-sm bg-violet-500 dark:text-white"

    >
        <component
            :is="icon"
            :active="active"
            class="mr-2 h-5 w-5 text-violet-400"
            aria-hidden="true"
        />
        {{ name }}
    </Link>
</template>
