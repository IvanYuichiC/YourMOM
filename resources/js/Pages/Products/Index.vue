<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
  categories: {
    type: Array,
    required: true,
  },

  products: {
    type: Array,
    required: true,
  },

  selectedCategory: {
    type: String,
    required: false,
  },
  methods: {
    backToCat(){

        Inertia.get('/');
    }
  }
});
</script>

<template>
  <div class="flex bg-gray-50 min-h-screen">
    <!-- Sidebar Navigation -->
    <nav class="w-[20%] shadow-md bg-white px-4 py-6">
      <h1 class="text-center mb-4 text-2xl font-bold text-blue-800">Categories</h1>
      <ul class="space-y-2">
        <li
          v-for="category in categories"
          :key="category.id"
          class="p-2 rounded-lg hover:bg-blue-100 hover:text-blue-700 cursor-pointer">
          <Link :href='"/products/" + category.id'>{{ category.name }}</Link>
        </li>
      </ul>
    </nav>

    <!-- Main Content -->
    <div class="w-3/4 p-6">
      <h1 class="text-center text-3xl font-semibold mb-6 text-blue-800">{{ selectedCategory ? selectedCategory.name : "All Products" }}</h1>
      <Link :href="'/'" style="color: blue; text-decoration: underline;">
        Back to categories
      </Link>
            <!-- Product Table -->
      <div class="overflow-x-auto shadow rounded-lg">
        <table class="w-full table-auto border border-gray-300 bg-white">
          <thead>
            <tr class="bg-blue-700 text-blue">
              <th class="px-6 py-4 text-left text-xl font-extrabold tracking-wider">Name</th>
              <th class="px-6 py-4 text-left text-xl font-extrabold tracking-wider">Description</th>
              <th class="px-6 py-4 text-left text-xl font-extrabold tracking-wider">Price</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="product in products" :key="product.id" class="even:bg-gray-100 hover:bg-blue-50">
              <td class="px-6 py-4 text-gray-900 font-bold text-lg">{{ product.name }}</td>
              <td class="px-6 py-4 text-gray-800 text-lg">{{ product.description }}</td>
              <td class="px-6 py-4 text-gray-900 font-bold text-lg">{{ product.price }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
