<template>

    <div class="card">
        <div class="card__side card__side--front">
            <div class="card__picture card__picture--1"
                 :style="{ 'backgroundImage': 'url(' + image +')'}">

                &nbsp;
            </div>
            <h4 class="card__heading">
                <span class="card__heading-span card__heading-span--1"><slot name="header">Header</slot></span>
            </h4>
            <div class="card__details">
                <ul>
                    <slot name="list-item">Listitem</slot>
                </ul>
            </div>
        </div>
        <div class="card__side card__side--back card__side--back-1">
            <div class="card__cta">
                <div class="card__price-box">
                    <!--<p class="card__price-only">Only</p>-->
                    <!--<p class="card__price-value">$297</p>-->
                </div>
                <a class="btn btn--white"><slot name="link"></slot></a>
                <!--<a href="#popup" class="btn btn&#45;&#45;white">Book now!</a>-->
            </div>
        </div>
    </div>

</template>


<script>

    export default {
        props: [ 'image']

    }

</script>

<style lang="scss" scoped>

    @import "../../sass/frontend/styles";

    .card {

        // FUNCTIONALITY
        perspective: 150rem;
        -moz-perspective: 150rem;
        position: relative;
        height: 52rem;

        &__side {
            height: 52rem;
            transition: all .8s ease;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            backface-visibility: hidden;
            border-radius: 3px;
            overflow: hidden;
            box-shadow: 0 1.5rem 4rem rgba($color-black, .15);

            &--front {
                background-color: $color-grey;
            }

            &--back {
                transform: rotateY(180deg);

                &-1 {
                    background-image: linear-gradient(to right bottom, $color-secondary-light, $color-secondary-dark);
                }
            }
        }


        &:hover &__side--front {
            transform: rotateY(-180deg);
        }

        &:hover &__side--back {
            transform: rotateY(0);
        }


        // FRONT SIDE STYLING
        &__picture {
            background-size: cover;
            height: 23rem;
            background-blend-mode: screen;
            -webkit-clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;

            &--1 {
                background-image: linear-gradient(to right bottom, $color-secondary-light, $color-secondary-dark),
                //url(../img/nat-5.jpg);
            }

        }

        &__heading {
            font-size: 2.4rem;
            font-weight: 300;
            text-transform: uppercase;
            text-align: left;
            color: $color-grey;
            position: absolute;
            bottom: 33rem;
            right: 0rem;
            width: 70%;
            background-color: rgba($color-primary, .5);


        }

        &__heading-span {
            padding: 1rem 2rem;
            -webkit-box-decoration-break: clone;
            box-decoration-break: clone;


            &--1 {

            }

        }

        &__details {
            padding: 3rem;

            ul {
                list-style: none;
                width: 80%;
                margin: 0 auto;
                color: $color-primary;

                li {
                    text-align: center;
                    font-size: 1.5rem;
                    padding: 1rem;

                    &:not(:last-child) {
                        border-bottom: 1px solid $color-grey;
                    }
                }
            }
        }

        // FRONT SIDE STYLING
        &__cta {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            text-align: center;
        }

        &__price-box {
            text-align: center;
            color: $color-grey;
            margin-bottom: 8rem;
        }

        &__price-only {
            font-size: 1.4rem;
            text-transform: uppercase;
        }

        &__price-value {
            font-size: 6rem;
            font-weight: 100;
        }
    }

</style>