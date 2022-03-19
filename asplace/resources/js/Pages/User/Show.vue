<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Пользователи (просмотр)
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg lg:px-8 tg:px-8"
                >
                    Имя: {{ user.name }}<br />
                    E-mail: {{ user.email }}<br />
                    Роль: {{ user.role }}<br />
                    Дата создания: {{ user.created_at }}<br />
                    Дата изменения: {{ user.updated_at }}
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default defineComponent({
    components: {
        AppLayout,
    },

    props: ["user"],
});
</script>
