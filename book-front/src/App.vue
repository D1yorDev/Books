<template>
    <div class="container-fluid">
        <HeaderRow/>

        <!-- main qator boshlandi -->
        <div class="row mt-4">

            <SideBar/>

            <!-- kontent qism bowlandi -->
            <div class="col-12 col-md-10 mt-4 mt-md-0">
                <router-view/>
            </div>
            <!-- kontent qism tugadi -->

        </div>
        <!-- main qator tugadi -->

        <FooterRow/>
    </div>
</template>

<script>

import HeaderRow from "@/components/HeaderRow.vue";
import SideBar from "@/components/SideBar.vue";
import FooterRow from "@/components/FooterRow.vue";

export default {
    name: 'App',
    components: {
        FooterRow,
        SideBar,
        HeaderRow

    }
}
</script>

<style>
</style>
