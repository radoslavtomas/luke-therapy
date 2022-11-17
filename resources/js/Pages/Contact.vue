<template>
    <main-layout>
        <Head title="Where am I" />
        <section class="mb-4">
            <h1 class="text-2xl font-bold">Where am I</h1>
        </section>
        <section>
            <p class="mb-2">{{ settings.address_line1 }}</p>
            <p class="mb-2">{{ settings.address_line2 }}</p>
            <p class="mb-2">{{ settings.address_line3 }}</p>
            <p class="mb-2">{{ settings.postocde }}</p>
            <br>
            <a :href="`tel:${settings.phone}`" class="flex items-center text-blue-700 hover:text-blue-800 mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>

                {{ settings.phone }}
            </a>
            <div class="iframe w-full" v-html="settings.map"></div>
        </section>
    </main-layout>
</template>

<script setup>
import {Head, Link, usePage} from '@inertiajs/inertia-vue3';
import MainLayout from '../Layouts/MainLayout.vue'
import {computed} from "vue";

const settings = computed(() => usePage().props.value.settings);
</script>

<style scoped>
.iframe iframe {
    width: 100% !important;
}
</style>
