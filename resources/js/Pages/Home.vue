<template>
    <main-layout>
        <Head :title="page.title" />
        <section class="relative home-hero mb-4 h-56 bg-gray-100 flex justify-center items-center flex-col text-white">
            <div class=" absolute top-0 left-0 bg-gray-700 opacity-40 w-full h-full"></div>
            <h1 class="z-20 text-3xl uppercase font-bold mb-2">{{ settings.page_title }}</h1>
            <h4 class="z-20 text-sm">{{ settings.page_subtitle }}</h4>
        </section>

        <section class="my-6 sm:my-10 max-w-4xl mx-auto" v-html="page.body"></section>

        <section class="mb-4 py-3 flex justify-center items-center flex-col sm:flex-row">
            <Link href="/about-me" class="flex justify-center items-center rounded text-white text-center px-4 py-3 mb-4 sm:mb-0 mr-0 sm:mr-3 w-full sm:w-auto shadow-md bg-cyan-500 hover:bg-cyan-600">
                About me <UserIcon class="w-4 h-4 ml-1" />
            </Link>
            <Link href="/practice/my-approach" class="flex justify-center items-center rounded text-white text-center px-4 py-3 w-full sm:w-auto shadow-md bg-purple-500 hover:bg-purple-600">
                My approach <PuzzlePieceIcon class="w-4 h-4 ml-1" />
            </Link>
        </section>

        <section class="max-w-2xl mx-auto">
            <h1 class="mt-10 text-center text-2xl font-bold uppercase mb-4">Any enquiries?</h1>
            <ContactForm />
        </section>
    </main-layout>
</template>

<script setup>
import {Head, Link, usePage} from '@inertiajs/inertia-vue3';
import {computed, onBeforeMount, onMounted} from "vue";
import MainLayout from '../Layouts/MainLayout.vue'
import ContactForm from '../Components/ContactForm.vue'
import {UserIcon, PuzzlePieceIcon} from '@heroicons/vue/24/outline';

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
