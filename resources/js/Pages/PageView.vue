<template>
    <main-layout>
        <Head :title="page.title" />
        <section class="my-8">
            <h1 class="text-2xl font-bold uppercase text-center">{{ page.name }}</h1>
        </section>
        <section class="content max-w-3xl mx-auto" v-html="page.body"></section>
    </main-layout>
</template>

<script setup>
import {Head, Link, usePage} from '@inertiajs/inertia-vue3';
import MainLayout from '../Layouts/MainLayout.vue'
import {computed, onMounted} from "vue";

const page = computed(() => usePage().props.value.page);

</script>
