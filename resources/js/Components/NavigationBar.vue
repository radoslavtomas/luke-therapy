<template>
    <nav class="relative tracking-widest">
        <div class="custom-container flex h-16 items-center justify-between">
            <!-- Mobile menu button -->
            <div class="flex items-center lg:hidden">
                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <Bars3Icon v-if="!openNav" @click="openNav = true" class="h-6 w-6" />
                    <XMarkIcon v-else @click="openNav = false" class="h-6 w-6" />
                </button>
            </div>

            <!-- Logo-->
            <div class="flex items-center justify-end">
                <Link :href="route('home')" class="flex items-center justify-end sm:justify-start h-10">
                    <img class="order-2 lg:order-1 h-full w-auto mt-1 hidden sm:block" src="/assets/img/logo.png" alt="Logo">
                    <div class="order-1 lg:order-2 mr-2 lg:mr-0 lg:ml-2 text-right sm:text-left">
                        <h3 class="text-xl font-bold">Luke Stevenson</h3>
                        <h6 class="text-xs leading-tight">Psychotherapy and Counselling</h6>
                    </div>
                </Link>
            </div>

            <!-- Desktop navigation menu -->
            <div class="hidden lg:ml-6 lg:block">
                <div class="flex items-center justify-between space-x-2 h-full tracking-tight">

                    <template v-for="menuItem in navigation" :key="menuItem.id">
                        <Link :href="menuItem.route" :class="pathname === menuItem.route ? 'border-red-600' : 'border-transparent'" class="inline-block font-bold text-gray-700 uppercase border-b-2 hover:border-red-600 hover:text-gray-800 px-2 py-1 text-sm" aria-current="page">{{ menuItem.name }}</Link>
                    </template>

                </div>
            </div>
        </div>


        <!-- Mobile menu -->
        <div v-if="openNav" class="lg:hidden absolute w-full z-10 h-full" id="mobile-menu">
            <div class="relative bg-gray-100 shadow-xl border-y border-purple-300 opacity-95 space-y-1 px-2 pt-2 pb-3 z-50">

                <template v-for="menuItem in navigation" :key="menuItem.id">
                    <Link :href="menuItem.route" :class="pathname === menuItem.route ? 'text-red-700' : 'text-gray-700'" class="block font-bold uppercase hover:bg-gray-200 hover:text-gray-800 px-3 py-2 text-sm font-medium" aria-current="page">{{ menuItem.name }}</Link>
                </template>

            </div>

            <div v-show="openNav" class="backdrop-blur-sm z-20 fixed inset-0 top-20" @click="openNav = false"></div>
        </div>
    </nav>
</template>

<script setup>
import {computed, onMounted, ref} from 'vue';
import {Link, usePage} from "@inertiajs/inertia-vue3";

import MenuDropdown from '../Components/MenuDropdown.vue'
import MenuDropdownLink from '../Components/MenuDropdownLink.vue'
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline';

const openNav = ref(false);
const pathname = ref('');
const navigation = computed(() => usePage().props.value.navigation);

onMounted(() => {
    // console.log(navigation.value)
    // console.log(window.location.pathname.substring(1))
    pathname.value = window.location.pathname.substring(1) ? window.location.pathname.substring(1) : '/';
})

</script>

<style scoped>

</style>

