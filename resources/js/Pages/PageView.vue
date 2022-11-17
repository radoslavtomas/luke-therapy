<template>
    <main-layout>
        <Head :title="page.title" />
        <section class="mb-4">
            <h1 class="text-2xl font-bold">{{ page.name }}</h1>
        </section>
        <section v-html="page.body"></section>
    </main-layout>
</template>

<script setup>
import {Head, Link, usePage} from '@inertiajs/inertia-vue3';
import MainLayout from '../Layouts/MainLayout.vue'
import {computed, onMounted} from "vue";

const page = computed(() => usePage().props.value.page);

onMounted(() => console.log(page.value))
</script>
