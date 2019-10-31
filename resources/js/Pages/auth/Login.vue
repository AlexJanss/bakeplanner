<template>
    <form @submit.prevent="submit">
        <label for="first_name">First name:</label>
        <input id="first_name" v-model="form.first_name" />
        <div v-if="$page.errors.first_name">{{ $page.errors.first_name[0] }}</div>
        <label for="last_name">Last name:</label>
        <input id="last_name" v-model="form.last_name" />
        <div v-if="$page.errors.last_name">{{ $page.errors.last_name[0] }}</div>
        <label for="email">Email:</label>
        <input id="email" v-model="form.email" />
        <div v-if="$page.errors.email">{{ $page.errors.email[0] }}</div>
        <button type="submit">Submit</button>
    </form>
</template>

<script>
    export default {
        name: "Login",
        data() {
            return {
                form: {
                    first_name: null,
                    last_name: null,
                    email: null,
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