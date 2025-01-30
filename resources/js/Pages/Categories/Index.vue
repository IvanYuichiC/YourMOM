<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
  categories: {
    type: Array,
    required: true,
  },
});
</script>

<template>
  <div class="min-h-screen w-full flex flex-col items-center py-8 px-4 bg-gray-100">
    <!-- Navigation Link -->
    <p class="self-end mb-4">
      <Link href="/products" class="text-blue-600 hover:text-blue-800 underline border border-blue-600 rounded-lg px-3 py-1 hover:bg-blue-50">Go to Products</Link>
    </p>

    <!-- Header -->
    <h1 class="text-5xl font-extrabold text-blue-800 mb-6">Categories</h1>

    <!-- Table -->
    <div class="overflow-x-auto shadow-md rounded-lg w-full max-w-5xl">
      <table class="w-full table-auto border-collapse bg-white">
        <thead>
          <tr class="bg-blue-600 text-blue">
            <th class="px-6 py-4 text-left text-lg font-medium">Name</th>
            <th class="px-6 py-4 text-left text-lg font-medium">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr
            v-for="category in categories"
            :key="category.id"
            class="hover:bg-blue-50 even:bg-gray-100">
            <td class="px-6 py-4 text-gray-700 font-semibold">{{ category.name }}</td>
            <td class="px-6 py-4 text-gray-600">{{ category.description }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
