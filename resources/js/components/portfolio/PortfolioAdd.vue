
<script setup lang="ts">
import { useId } from 'vue';
const patternId = `pattern-${useId()}`;
</script>

<template>
    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Add Portfolio Item</h1>
        <form @submit.prevent="addPortfolioItem">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" v-model="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" v-model="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>
            <div class="mb-4">
                <label for="files">Select files:</label>
                <input type="file" id="files" name="files[]" multiple>
                <input type="submit" value="Upload">
            </div>
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add Item</button>
        </form>
    </div>
</template>