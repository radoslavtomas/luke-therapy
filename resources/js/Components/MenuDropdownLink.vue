<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import {computed} from "vue";

const props = defineProps({
    mobile: {
        default: false
    },
});

const mobileClasses = computed(() => {
    if (props.mobile) {
        return 'text-left ml-3 py-1';
    } else {
        return 'text-center text-sm py-3 uppercase';
    }
});
</script>

<template>
    <Link class="block w-full px-4 leading-5 font-bold focus:outline-none transition duration-150 ease-in-out" :class="mobileClasses">
        <span class="text-gray-700 border-b-2 border-transparent hover:border-red-600 transition duration-50 ease-in-out">
            <slot />
        </span>
    </Link>
</template>
