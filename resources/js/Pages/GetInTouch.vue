<template>
    <main-layout>
        <Head :title="page.title" />
        <section class="my-8">
            <h1 class="text-2xl font-bold uppercase text-center">{{ page.name }}</h1>
        </section>
        <section class="max-w-xl mx-auto">
            <ContactForm />
        </section>
    </main-layout>
</template>

<script setup>
import {Head, Link, usePage} from '@inertiajs/inertia-vue3';
import MainLayout from '../Layouts/MainLayout.vue';
import {computed} from "vue";

import ContactForm from '../Components/ContactForm.vue'

const page = computed(() => usePage().props.value.page);
</script>

