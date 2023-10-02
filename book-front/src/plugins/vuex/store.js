import {createStore} from "vuex";
import book from "@/plugins/vuex/book";
import category from "@/plugins/vuex/category";
import user from "@/plugins/vuex/user";

export default createStore({
    modules: {
        book,
        category,
        user
    }
})