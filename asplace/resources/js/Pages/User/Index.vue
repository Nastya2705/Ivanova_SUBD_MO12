<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Пользователи
                <inertia-link
                    class="float-right"
                    :href="route('users.create')"
                    v-if="$page.props.permission.users.view"
                >
                    <jet-button>Добавить</jet-button>
                </inertia-link>
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:-mx-6 lg:-mx-8"
                >
                    <div
                        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
                    >
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Имя
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Статус
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Роль
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only"
                                            >Редактировать</span
                                        >
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="user in users" :key="user.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div
                                                class="flex-shrink-0 h-10 w-10"
                                            >
                                                <img
                                                    class="h-10 w-10 rounded-full"
                                                    src=""
                                                />
                                            </div>
                                            <div class="ml-4">
                                                <div
                                                    class="text-sm font-medium text-gray-900"
                                                >
                                                    {{ user.name }}
                                                </div>
                                                <div
                                                    class="text-sm text-gray-500"
                                                >
                                                    {{ user.email }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="tpx-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"
                                        >
                                            Активен
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                                    >
                                        {{ user.role }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >
                                        <inertia-link
                                            :href="route('users.show', user.id)"
                                            class="text-indigo-600 hover:text-indigo-900"
                                            v-if="user.can.view"
                                        >
                                            Просмотр</inertia-link
                                        >
                                        <inertia-link
                                            :href="route('users.edit', user.id)"
                                            class="ml-2 text-indigo-600 hover:text-indigo-900"
                                            v-if="user.can.update"
                                        >
                                            Изменить</inertia-link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import JetButton from "@/Jetstream/Button";
import { InertiaLink } from "@inertiajs/inertia-vue3";

export default defineComponent({
    components: {
        AppLayout,
        JetButton,
        InertiaLink,
    },

    props: ["users"],
});
</script>
