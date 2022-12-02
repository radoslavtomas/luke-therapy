<template>
    <main-layout>
        <Head title="Where am I" />
        <section class="my-8">
            <h1 class="text-2xl font-bold uppercase text-center">Where am I</h1>
        </section>
        <section class="flex justify-center items-center flex-col mb-12">
            <p class="mb-1">{{ settings.address_line1 }}</p>
            <p class="mb-1">{{ settings.address_line2 }}</p>
            <p class="mb-1">{{ settings.address_line3 }}</p>
            <p class="mb-1">{{ settings.postcode }}</p>
            <br>
            <a :href="`tel:${settings.phone}`" class="flex justify-center items-center rounded text-white text-center px-4 py-3 mb-4 sm:mb-0 mr-0 sm:mr-3 w-full sm:w-auto shadow-md bg-green-500 hover:bg-green-600">
                {{ settings.phone }} <PhoneIcon class="w-5 h-5 ml-1 flip" />
            </a>
        </section>

        <section>
            <div class="iframe w-full" v-html="settings.map"></div>
        </section>
    </main-layout>
</template>

<script setup>
import {Head, Link, usePage} from '@inertiajs/inertia-vue3';
import {computed} from "vue";
import MainLayout from '../Layouts/MainLayout.vue'
import {PhoneIcon} from '@heroicons/vue/24/outline'

const settings = computed(() => usePage().props.value.settings);
</script>

<style scoped>
.iframe iframe {
    width: 100% !important;
}

.flip {
    transform: scaleX(-1);
}
</style>
