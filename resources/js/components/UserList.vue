<script setup lang="ts">
import { useId } from 'vue';
import axios from 'axios'; // Import Axios
const patternId = `pattern-${useId()}`;
import { ref, onMounted } from 'vue';

const users = ref([]);
const cats = ref([]);

console.log(users);

function log(value: any) {
  console.log(value);
  return value; // Return the value so rendering isn't disrupted
}
async function fetchCats() {
      // Make a GET request to your Laravel API endpoint
      axios.get('/api/cat')
        .then(response => {
            let items;
            console.log(response.data.data);
            cats.value = response.data.data; // Assign the fetched data to the 'items' data property
            
        })
        .catch(error => {
          console.error("There was an error fetching the items:", error);
          console.log(axios.get('/api/cat'));
        });
    }

async function fetchUsers() {
      // Make a GET request to your Laravel API endpoint
      axios.get('/api/user')
        .then(response => {
            let items;
            console.log(response.data[0]);
            users.value = response.data; // Assign the fetched data to the 'items' data property
            
        })
        .catch(error => {
          console.error("There was an error fetching the items:", error);
          console.log(axios.get('/api/user'));
        });
    }
    onMounted(fetchUsers());
    onMounted(fetchCats());
</script>BreadcrumbItem

<template>
        <ul >
        <li v-for="value in users" :key="value.id">
            {{value.name}} {{value.email}} 
        </li>
        <li v-for="cat in cats" :key="cat.id">
            {{cat.name}} {{cat.breed}} 
        </li>
    </ul>
     
    
</template>
