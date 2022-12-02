<template>
    <Head>
        <meta name="description" :content="settings.page_description">
        <meta name="keywords" :content="settings.page_keywords">
    </Head>
    <header>
        <navigation-bar />
    </header>

    <main class="relative custom-container mx-auto min-h-screen">
        <slot />
    </main>

    <footer class="bg-gray-700 text-white mt-8 footer-shadow">
        <div class="custom-container flex items-center sm:items-start justify-between py-5 flex-col sm:flex-row">
            <section class="mb-8 sm:mb-0 text-center sm:text-left">
                <p class="">{{ settings.page_title }}</p>
                <p class="text-xs">{{ settings.page_subtitle }}</p>
            </section>

            <section class="text-sm text-center sm:text-right">
                <p class="">{{ settings.address_line1 }}</p>
                <p class="">{{ settings.address_line2 }}</p>
                <p class="">{{ settings.address_line3 }}</p>
                <p class="">{{ settings.postocde }}</p>
            </section>
        </div>
    </footer>
</template>

<script setup>
import {Head, usePage} from '@inertiajs/inertia-vue3';
import {computed} from "vue";
import NavigationBar from '../Components/NavigationBar.vue';

const settings = computed(() => usePage().props.value.settings);
</script>

<style>
.footer-shadow {
    box-shadow: 0 -15px 25px -5px rgb(0 0 0 / 0.1), 0 -8px 10px -6px rgb(0 0 0 / 0.1);
}
</style>
