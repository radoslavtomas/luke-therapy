<template>
    <main-layout>
        <Head :title="page.title" />
        <section class="mb-4">
            <h1 class="text-2xl font-bold">{{ page.page_title }}</h1>
        </section>
        <section class="max-w-xl mx-auto">
            <label class="block mb-4">
                <span class="text-gray-700">Name</span>
                <input type="text" class="
                    mt-1
                    block
                    w-full
                    rounded-md
                    border-gray-300
                    shadow-sm
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                  " placeholder="">
            </label>

            <label class="block mb-4">
                <span class="text-gray-700">Preferred way for Luke to make first contact</span>
                <select class="
                    block
                    w-full
                    mt-1
                    rounded-md
                    border-gray-300
                    shadow-sm
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                  ">
                    <option>- Please select -</option>
                    <option>Email</option>
                    <option>Phone call</option>
                    <option>Text message</option>
                </select>
            </label>

            <label class="block mb-4">
                <span class="text-gray-700">Please give a couple of days / times that would be convenient to call you back</span>
                <textarea class="
                    mt-1
                    block
                    w-full
                    rounded-md
                    border-gray-300
                    shadow-sm
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                  " rows="3"></textarea>
            </label>

            <label class="block mb-4">
                <span class="text-gray-700">Email</span>
                <input type="email" class="
                    mt-1
                    block
                    w-full
                    rounded-md
                    border-gray-300
                    shadow-sm
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                  " placeholder="john@example.com">
            </label>

            <label class="block mb-4">
                <span class="text-gray-700">Contact number</span>
                <input type="text" class="
                    mt-1
                    block
                    w-full
                    rounded-md
                    border-gray-300
                    shadow-sm
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                  " placeholder="">
            </label>

            <label class="block mb-4">
                <span class="text-gray-700">Reason for message</span>
                <select class="
                    block
                    w-full
                    mt-1
                    rounded-md
                    border-gray-300
                    shadow-sm
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                  ">
                    <option>- Please select -</option>
                    <option>To request a therapy session</option>
                    <option>Student looking for therapy training</option>
                    <option>To find out more about your work</option>
                    <option>General inquiry</option>
                </select>
            </label>

            <label class="block mb-4">
                <span class="text-gray-700">If you are requesting for therapy please give a light description of needs
</span>
                <textarea class="
                    mt-1
                    block
                    w-full
                    rounded-md
                    border-gray-300
                    shadow-sm
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                  " rows="3"></textarea>
                <span class="text-xs text-gray-400">This is just so I can have some understanding of your needs please do not share anything that you are not comfortable to share.</span>
            </label>

            <label class="block mb-4">
                <span class="text-gray-700">Comment or Message</span>
                <textarea class="
                    mt-1
                    block
                    w-full
                    rounded-md
                    border-gray-300
                    shadow-sm
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                  " rows="3"></textarea>
            </label>
        </section>
    </main-layout>
</template>

<script setup>
import {Head, Link, usePage} from '@inertiajs/inertia-vue3';
import MainLayout from '../Layouts/MainLayout.vue';
import {computed} from "vue";

const page = computed(() => usePage().props.value.page);
const settings = computed(() => usePage().props.value.settings);
</script>

