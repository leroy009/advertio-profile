<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {Head, router} from "@inertiajs/vue3";

import Table from "@/Components/Table.vue";
import TableBodyRow from "@/Components/TableBodyRow.vue";
import TableRow from "@/Components/TableRow.vue";
import TableDataCell from "@/Components/TableDataCell.vue";
import TableHeaderCell from "@/Components/TableHeaderCell.vue";
import TableActions from "@/Components/TableActions.vue";

defineProps(['users'])
</script>

<template>
    <Head title="Admin" />

    <AdminLayout>
        <template #header>
            <h2 class="" >Users</h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h1>Welcome to Users</h1>
                <Table :href="route('users.create')" name="Users">
                    <template #header>
                        <TableRow>
                            <TableHeaderCell>ID</TableHeaderCell>
                            <TableHeaderCell>Name</TableHeaderCell>
                            <TableHeaderCell>Email</TableHeaderCell>
                            <TableHeaderCell><span class="sr-only">Actions</span></TableHeaderCell>
                        </TableRow>
                    </template>
                    <template #default>
                        <TableBodyRow v-for="user in users" :key="user.id" >
                            <TableDataCell>{{user.id}}</TableDataCell>
                            <TableDataCell>{{user.name}}</TableDataCell>
                            <TableDataCell>{{user.email}}</TableDataCell>
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
