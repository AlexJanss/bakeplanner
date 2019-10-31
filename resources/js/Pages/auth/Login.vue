<template>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
            <h2 class="mb-4 font-light tracking-widest text-2xl">Login</h2>
            <form @submit.prevent="submit" class="w-full max-w-sm">
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
                            Email
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                               id="email" type="email" value="" v-model="form.email">
                        <div v-if="$page.errors.email">{{ $page.errors.email[0] }}</div>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="password">
                            Password
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                               id="password" type="password" v-model="form.password">
                        <div v-if="$page.errors.password">{{ $page.errors.password[0] }}</div>
                    </div>
                </div>

                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="submit">Log In
                        </button>
                    </div>
                </div>
            </form>
        </div>

</template>

<script>
    import Layout from '@/Shared/Layout'

    export default {
        layout: Layout,
        name: "Login",
        data() {
            return {
                form: {
                    email: null,
                    password: null,
                },
            }
        },
        methods: {
            submit() {
                this.$inertia.post('/login', this.form)
            },
        },
    }
</script>