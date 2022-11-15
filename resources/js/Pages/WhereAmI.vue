<template>
    <main-layout>
        <Head title="Where am I" />
        <section class="mb-4">
            <h1 class="text-2xl font-bold">Where am I</h1>
        </section>
        <section>
            <p class="mb-2">Oriel Chambers, 14 Water Street, Suite 314, Liverpool, L2 8DT</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1552.1593366911065!2d-2.994710369228683!3d53.4066265337344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b212d91fe4567%3A0x9de9af4ca558885f!2s314%2C%20Oriel%20Chambers%2C%2014%20Water%20St%2C%20Liverpool%20L2%208TD!5e0!3m2!1sen!2suk!4v1668544819094!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main-layout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import MainLayout from '../Layouts/MainLayout.vue'
</script>
