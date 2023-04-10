<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head } from "@inertiajs/vue3";

import Table from "@/Components/Table.vue";
import TableBodyRow from "@/Components/TableBodyRow.vue";
import TableRow from "@/Components/TableRow.vue";
import TableDataCell from "@/Components/TableDataCell.vue";
import TableHeaderCell from "@/Components/TableHeaderCell.vue";
import TableActions from "@/Components/TableActions.vue";

defineProps(['roles'])
</script>

<template>
    <Head title="Admin" />

    <AdminLayout>
        <template #header>
            <h2 class="" >Roles</h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h1>Welcome to Roles</h1>
                <Table :href="route('roles.create')" name="Roles">
                    <template #header>
                        <TableRow>
                            <TableHeaderCell>ID</TableHeaderCell>
                            <TableHeaderCell>Name</TableHeaderCell>
                            <TableHeaderCell><span class="sr-only">Actions</span></TableHeaderCell>
                        </TableRow>
                    </template>
                    <template #default>
                        <TableBodyRow v-for="role in roles" :key="role.id" >
                            <TableDataCell>{{role.id}}</TableDataCell>
                            <TableDataCell>{{role.name}}</TableDataCell>
                            <TableDataCell >
                                Edit/Delete
                                <!--                                <TableActions></TableActions>-->
                            </TableDataCell>
                        </TableBodyRow>
                    </template>
                </Table>
            </div>
        </div>
    </AdminLayout>
</template>
