<template>
    <HomeMain/>
    <OurSolutions/>
    <BussinessProcess/>
    <WhyUs/>
</template>

<script>
import HomeMain from "@src/components/HomeMain.vue";
import OurSolutions from "@src/components/OurSolutions.vue";
import BussinessProcess from "@src/components/BussinessProcess.vue";
import WhyUs from "@src/components/WhyUs.vue";
export default{
    components: {
        WhyUs,
        BussinessProcess,
        OurSolutions,
    },
}
</script>
