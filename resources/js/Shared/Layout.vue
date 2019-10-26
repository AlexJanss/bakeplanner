<template>
    <main>
        <header>
            <nav class="flex items-center justify-between flex-wrap bg-orange-500 p-6">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <span class="font-semibold text-xl tracking-tight">Bakeplanner</span>
                </div>
                <div class="block sm:hidden">
                    <button @click="toggle" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                        </svg>
                    </button>
                </div>
                <div :class="openNav ? 'block': 'hidden'" class="w-full flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow">
                        <inertia-link class="block lg:inline-block mt-1 sm:mt-2 text-gray-700 hover:text-black mr-4" href="/">Home</inertia-link>
                        <inertia-link class="block lg:inline-block mt-1 sm:mt-2 text-gray-700 hover:text-black mr-4" href="/about">About</inertia-link>
                        <inertia-link class="block lg:inline-block mt-1 sm:mt-2 text-gray-700 hover:text-black mr-4" href="/recipes">Recipes</inertia-link>
                        <inertia-link class="block lg:inline-block mt-1 sm:mt-2 text-gray-700 hover:text-black mr-4" href="/login">Login</inertia-link>
                        <inertia-link class="block lg:inline-block mt-1 sm:mt-2 text-gray-700 hover:text-black mr-4" href="/contact">Contact</inertia-link>
                    </div>

                </div>
            </nav>

        </header>
        <article>
            <slot />
        </article>
    </main>
</template>

<script>
    export default {
        props: {
            title: String,
        },
        watch: {
            title: {
                immediate: true,
                handler(title) {
                    document.title = title
                },
            },
        },
        data: function(){
            return {
                openNav: false,
            }
            },
        methods: {
            toggle() {
                this.openNav = !this.openNav
            }
        }
    }
    </script>