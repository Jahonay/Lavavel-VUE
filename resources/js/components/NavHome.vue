<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

import { toRefs } from 'vue';
import type { NavItem } from '@/types';


const props = defineProps({
    nav_links: Array<NavItem>
});
</script>

<template>
    <nav class="flex items-center justify-end gap-4" >
        <ul v-if="props.nav_links" class="flex items-center gap-4"> 
            <li v-for="link in props.nav_links">
                <Link 
                    :href="link.href"
                    >
                    {{ link.title }}
                </Link>
            </li>
        </ul>
        
    </nav>
</template>