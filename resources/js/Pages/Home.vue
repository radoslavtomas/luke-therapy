<template>
    <main-layout>
        <Head :title="page.title" />
        <section class="relative home-hero mb-4 h-56 bg-gray-100 flex justify-center items-center flex-col text-white">
            <div class=" absolute top-0 left-0 bg-gray-700 opacity-40 w-full h-full"></div>
            <h1 class="z-20 text-3xl uppercase font-bold mb-2">{{ settings.page_title }}</h1>
            <h4 class="z-20 text-sm">{{ settings.page_subtitle }}</h4>

        </section>
        <section v-html="page.body"></section>
    </main-layout>
</template>

<script setup>
import {Head, Link, usePage} from '@inertiajs/inertia-vue3';
import MainLayout from '../Layouts/MainLayout.vue'
import {computed, onBeforeMount, onMounted} from "vue";

const page = computed(() => usePage().props.value.page);
const settings = computed(() => usePage().props.value.settings);
const ziggy = computed(() => usePage().props.value.ziggy);

onBeforeMount(() => console.log(ziggy.value))
</script>

<style>
.home-hero {
    background: url('/assets/img/hero_bg.jpg') center center no-repeat;
    background-size: cover;
    backdrop-filter: grayscale(100%);
    text-shadow: 1px 1px #4b5563;
}
</style>
