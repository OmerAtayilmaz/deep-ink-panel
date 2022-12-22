<template>
<div class="container">
    <div class="brand">Atayilmaz Web Solutions</div>
    <div class="navigation">
        <ul class="nav-bar">
            <li class="nav-item"><a to="our-services">Our Services</a></li>
            <li class="nav-item"><a to="/references">References</a></li>
            <li class="nav-item"><a to="/blog">Blog</a></li>
            <li class="nav-item"><a to="contact-us">Contact Us</a></li>
            <li class="nav-item"><a to="/about-us">About Us</a></li>
        </ul>
    </div>
    <div class="actions">
        <a class="language" to="/localization">TR</a>
        <a class="apply" to="/contact-us">Apply Now</a>
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
        height: 120px;
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
    .container .actions{
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        width: 10%;
    }
    .container .actions .language{
        color:white;
        font-weight: 700;
    }
    .container .actions .apply{
        color: #FFBF00;
        border:1px solid #FFBF00;;
        cursor: pointer;
        font-weight: 600;
        border-radius: 23px;
        height: 40px;
        width: 140px;
        text-align: center;
        padding-top:5px;;
    }
</style>
