<template>
    <navigation-bar />

    <div class="relative custom-container mx-auto">
        <slot />
    </div>
</template>

<script setup>
import NavigationBar from '../Components/NavigationBar.vue';
</script>
