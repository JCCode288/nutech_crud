<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { onMounted } from "vue";

const { products, categories, nextPage, prevPage } = defineProps([
    "products",
    "categories",
    "nextPage",
    "prevPage",
]);

onMounted(() => {
    console.log({ nextPage, prevPage });
});
</script>

<template>
    <AppLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div>Test</div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
