<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head } from "@inertiajs/vue3";

import Table from "@/Components/Table.vue";
import TableBodyRow from "@/Components/TableBodyRow.vue";
import TableRow from "@/Components/TableRow.vue";
import TableDataCell from "@/Components/TableDataCell.vue";
import TableHeaderCell from "@/Components/TableHeaderCell.vue";
import TableActions from "@/Components/TableActions.vue";

defineProps(['permissions'])
</script>

<template>
    <Head title="Admin" />

    <AdminLayout>
        <template #header>
            <h2 class="" >Permissions</h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h1>Welcome to Permissions</h1>
                <Table>
                    <template #header>
                        <TableRow>
                            <TableHeaderCell>ID</TableHeaderCell>
                            <TableHeaderCell>Name</TableHeaderCell>
                            <TableHeaderCell><span class="sr-only">Actions</span></TableHeaderCell>
                        </TableRow>
                    </template>
                    <template #default>
                        <TableBodyRow v-for="permission in permissions" :key="permission.id" >
                            <TableDataCell>{{permission.id}}</TableDataCell>
                            <TableDataCell>{{permission.name}}</TableDataCell>
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
