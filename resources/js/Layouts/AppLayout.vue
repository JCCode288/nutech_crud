<script setup>
import { router } from "@inertiajs/vue3";
import Sidebar from "@/Components/Sidebar.vue";

defineProps({
    title: String,
});

window._assets = "{{ asset('/storage') }}";

const logout = () => {
    router.post(route("logout"));
};
</script>

<template>
    <div class="flex flex-row container">
        <Sidebar />
        <main>
            <slot />
        </main>
    </div>
</template>
