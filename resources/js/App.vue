<template>
    <NavigationBar/>
    <HomeLayout/>
    <Footer/>
</template>
<script>
import HomeLayout from "@src/layouts/HomeLayout.vue";
import NavigationBar from "@src/components/NavigationBar.vue";
import Footer from "@src/components/Footer.vue";
export default {
    components:{
        HomeLayout,
        NavigationBar,
        Footer
    }
}
</script>
