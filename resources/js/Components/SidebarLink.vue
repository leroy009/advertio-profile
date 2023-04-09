<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    current: {
        type: Boolean,
    },
    show: {
        type: Boolean,
    },
    name: {
        type: String,
        required: true,
    },
    icon: {
        type: String,
        required: true,
    },

});

const classes = computed(() =>
    props.current
        ? 'group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold bg-gray-800 text-white'
        : 'group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold text-gray-400 hover:text-white hover:bg-gray-800',
        // 'group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold',
   );

</script>

<template>
    <Link
        v-if="{show}"
        :href="href"
        :class="classes"
    >
        <component
            :is="icon"
            class="h-6 w-6 shrink-0"
            aria-hidden="true"
        />
        {{ name }}
    </Link>
</template>
