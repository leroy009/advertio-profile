<script setup>
// import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { TrashIcon , PencilIcon, DocumentDuplicateIcon, ArrowTopRightOnSquareIcon, ChevronDownIcon, EllipsisHorizontalIcon  } from '@heroicons/vue/20/solid'
import TableActionMenuItem from "@/Components/TableActionMenuItem.vue";
import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue'

const solutions = [
    {
        name: 'Edit',
        classes: 'text-blue-400',
        href: '##',
        icon: PencilIcon,
    },
    {
        name: 'Delete',
        classes: 'text-red-400',
        href: '##',
        icon: TrashIcon,
    }
]


</script>
<template>
    <div class=" px-4">
        <Popover v-slot="{ open }" class="relative">
            <PopoverButton
                :class="open ? '' : 'text-opacity-90'"
            >
                <EllipsisHorizontalIcon
                    :class="open ? '' : 'text-opacity-70'"
                    class="h-5 w-5 text-blue-300 transition duration-150 ease-in-out group-hover:text-opacity-80"
                    aria-hidden="true"
                />
            </PopoverButton>

            <transition
                enter-active-class="transition duration-200 ease-out"
                enter-from-class="translate-y-1 opacity-0"
                enter-to-class="translate-y-0 opacity-100"
                leave-active-class="transition duration-150 ease-in"
                leave-from-class="translate-y-0 opacity-100"
                leave-to-class="translate-y-1 opacity-0"
            >
                <PopoverPanel
                    class="absolute left-1/2 z-10 mt-3 w-24 -translate-x-1/2 transform px-4 sm:px-0 "
                >
                    <div
                        class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5"
                    >
                        <div class="relative grid gap-4 bg-white p-2 grid-cols-1">
                            <a
                                v-for="item in solutions"
                                :key="item.name"
                                :href="item.href"
                                class="-m-3 flex items-center rounded-lg p-2 transition duration-150 ease-in-out hover:bg-gray-50 m-1
                                focus:outline-none focus-visible:ring focus-visible:ring-blue-500 focus-visible:ring-opacity-50"
                            >
                                <div
                                    class="flex h-5 w-5  items-center justify-center text-white "
                                >
                                    <component
                                        :is="item.icon"
                                        :class="'h-5 w-5 ' + item.classes"
                                        aria-hidden="true"
                                    />
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">
                                        {{ item.name }}
                                    </p>
                                </div>
                            </a>
                        </div>

                    </div>
                </PopoverPanel>
            </transition>
        </Popover>
    </div>
</template>


