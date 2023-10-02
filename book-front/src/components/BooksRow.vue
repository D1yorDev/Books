<script>
import {mapActions, mapGetters} from "vuex";

    export default {
        name: "BooksRow",
        computed: {
            ...mapGetters(['getBooks'])
        },
        methods: {
            ...mapActions(['fetchBooks'])
        },
        watch: {
            '$route.params.id'() {
                console.log('id ozgarmoqda')
                this.fetchBooks(this.$route.params.id)
            }
        },
        mounted() {
            console.log('bookRow componenti yuklandi')
            this.fetchBooks(this.$route.params.id)
        }
    }
</script>

<template>
    <div class="row">
        <!-- kitob boshlandi -->
        <div
                v-for="book of getBooks"
                v-bind:key="book.id"
                class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="card">
                <img alt="sherlock-holmes-picture" class="card-img-top" src="img/sherlock.jpg">
                <div class="card-body">
                    <h5 class="card-title">{{book.name}}</h5>
                    <p class="card-text">{{book.description}}</p>
                    <router-link class="btn btn-primary" to="/book-info">O'qish</router-link>
                </div>
            </div>
        </div>
        <!-- kitob tugadi -->
    </div>
</template>

<style scoped>

</style>