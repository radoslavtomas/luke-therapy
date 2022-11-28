<template>
    <Head>
        <meta name="description" :content="settings.page_description">
        <meta name="keywords" :content="settings.page_keywords">
    </Head>
    <navigation-bar />

    <div class="relative custom-container mx-auto">
        <slot />
    </div>
</template>

<script setup>
import {Head, usePage} from '@inertiajs/inertia-vue3';
import {computed} from "vue";
import NavigationBar from '../Components/NavigationBar.vue';

const settings = computed(() => usePage().props.value.settings);
</script>
