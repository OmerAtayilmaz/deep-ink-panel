<template>
<div class="container">
    <div class="brand">Atayilmaz Web Solutions</div>
    <div class="navigation">
        <ul class="nav-bar">
            <li class="nav-item"><a to="our-services">Our Services</a></li>
            <li class="nav-item"><a to="contact-us">Contact Us</a></li>
            <li class="nav-item"><a to="/about-us">About Us</a></li>
            <li class="nav-item"><a to="/references">References</a></li>
            <li class="nav-item"><a to="/blog">Blog</a></li>
        </ul>
    </div>
    <div class="actions">
        <router-link to="/localization">TR</router-link>
        <router-link to="/contact-us">Apply Now</router-link>
    </div>
</div>
</template>
<style scoped>
*{
    font-family: 'Lato';
}
    .container{
        background-color:#1760B4;
        padding:5px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }
    .container .brand{
        color:white;
        font-weight: 900;
        font-size:2rem;
    }
    .container .navigation .nav-bar {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: row;
        width: 600px;
        font-weight: 700;
        color:#fff;
        list-style: none;
    }
    .container .navigation .nav-bar .nav-item{
        cursor: pointer;
    }
</style>
