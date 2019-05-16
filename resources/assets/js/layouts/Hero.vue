<template>
    <header class="header">
        <div class="header__logo-box">
            <!--<img :src="assets('img/hero.jpg')" alt="Logo" class="header__logo">-->
        </div>

        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Find recipes</span>
                <span class="heading-primary--sub">-for every occasion</span>
            </h1>

            <!--<a href="#section-tours" class="btn btn&#45;&#45;white btn&#45;&#45;animated">Discover our tours</a>-->
        </div>
    </header>
</template>
<script>

</script>

<style lang="scss" scoped>

    @import "../../sass/frontend/styles";

    .header {
        height: 95vh;
        background-image: linear-gradient(
                        to right bottom,
                        rgba($color-primary, 0.8),
                        rgba($color-primary-dark, 0.8)),
        url(../../../../public/img/hero.jpg);
        background-size: cover;
        background-position: top;
        position: relative;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 75vh, 0 100%);
        clip-path: polygon(0 0, 100% 0, 100% 75vh, 0 100%);

        &__logo-box {
            position: absolute;
            top: 4rem;
            left: 4rem;
        }

        &__logo {
            height: 3.5rem;
        }

        &__text-box {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    }

</style>