<script setup lang="ts">
import { Link } from '@inertiajs/vue3';


// const props = defineProps({
// });

</script>

<template>
    <div class="flex text-lg font-black bg-black flex-col w-full h-100">
        <div style="background-color: rgba(0, 0, 0, 0.5);" class="h-full bg-cover m-auto w-full flex flex-col bg-blend-multiply align-middle justify-center gap-2" :style="{backgroundImage: 'url(http://localhost:8000/images/woman-art-exhibition.jpg)' }">
            <h2 class="text-3xl font-bold  text-white mx-auto">
                Portfolio Submissions Manager
            </h2>
            <Link class="px-5 py-2 bg-blue-500 hover:bg-blue-700 rounded text-white mx-auto text-2xl" href="/login">
            Login
            </Link>
        </div>
    </div>
    <div class="text-gray-500 text-xs text-right">
        Image by rawpixel.com on Freepik
    </div>
</template>