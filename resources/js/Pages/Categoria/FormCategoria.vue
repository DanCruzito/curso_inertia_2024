<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
  nombre: null,
  descripcion: null,
})

function submit() {
  router.post('/categoria/store', form)
}
</script>

<template>
  <AppLayout title="Registro de Categoría">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        REGISTRO DE CATEGORÍA
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h4> Formulario de Registro</h4>
          <form @submit.prevent="submit" key="" class="max-w-sm mx-auto m-4">
            <div class="mb-5">
              <label
                for="nombre"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Nombre</label
              >
              <input 
                id="nombre" v-model="form.nombre"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              />
            </div>

            <div class="mb-5">
              <label
                for="descripcion"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Descripción</label
              >
              <input 
                id="descripcion" v-model="form.descripcion"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              />
            </div>
           
            <button
              type="submit"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Registrar
            </button>
          </form>
        </div>
      </div>
    </div>
  </AppLayout>
</template>