<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {Head, Link, useForm } from "@inertiajs/vue3";

import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import Checkbox from "@/Components/Checkbox.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const form = useForm({
    name: ""
})
</script>

<template>
    <Head title="Admin" />

    <AdminLayout>
        <template #header>
            <h2 class="" >Roles</h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h1>Create a Role</h1>

                <section class="">
                    <div class="max-w-md mx-auto">
                        <form @submit.prevent="form.post(route('roles.store'))">
                            <div>
                                <InputLabel for="name" value="Name" />
                                <TextInput
                                    id="name"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.name"
                                    required
                                    autofocus
                                    autocomplete="username"
                                />
                                <InputError class="mt-2" :message="form.errors.name" />
                            </div>
                            <div class="flex items-center mt-4">
                                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Create
                                </PrimaryButton>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </AdminLayout>
</template>
