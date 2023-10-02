<script>
import {mapActions} from "vuex";

export default {
    name: "LoginPage",
    data() {
        return {
            form: {
                email: '',
                password: ''
            }
        }

    },
    methods: {
        ...mapActions(['fetchUserToken', 'fetchCategories']),
        auth() {
            this.fetchUserToken(this.form)
                .then(() => {
                    console.log('token muvaffaqiyatli olindi')
                    this.fetchCategories()
                    this.$router.push('/')
                })
            console.log('bu login sahifasi auth() funksiyasi')
        }
    }
}

</script>

<template>
    <form class="col-6" @submit.prevent="auth">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            v-model="form.email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Parol</label>
            <input type="password" class="form-control" id="exampleInputPassword1"
            v-model="form.password">
        </div>
        <button type="submit" class="btn btn-primary">Kirish</button>
    </form>
</template>

<style scoped>

</style>