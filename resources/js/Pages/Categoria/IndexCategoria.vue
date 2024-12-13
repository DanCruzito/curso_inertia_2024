<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/vue3";

defineProps({ categorias: Object })
</script>
<template>
  <AppLayout title="Categoría">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        CATEGORÍAS
      </h2>
      <Link :href="route('categoria.formulario')" class="text-white m-2 bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Crear Categoría</Link>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table
              class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            >
              <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
              >
                <tr>
                  <th scope="col" class="px-6 py-3">#</th>
                  <th scope="col" class="px-6 py-3">Nombre</th>
                  <th scope="col" class="px-6 py-3">Descripción</th>
                  <th scope="col" class="px-6 py-3">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(categoria, index) in categorias" :key="categoria.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    {{ index + 1 }}
                  </th>
                  <td class="px-6 py-4">{{ categoria.nombre }}</td>
                  <td class="px-6 py-4">{{ categoria.descripcion }}</td>
                  <td class="px-6 py-4 text-right">
                    <a
                      href="#"
                      class="bg-blue-500 rounded p-2 font-medium text-white dark:text-blue-500 hover:underline"
                      >Edit</a
                    >
                  </td>
                </tr>  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>