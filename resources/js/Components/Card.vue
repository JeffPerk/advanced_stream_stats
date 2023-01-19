<script setup>
    import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </Head>
    <div class="container mt-5">
        <div class="row justify-around">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Total Gaming Views</h5>
                    <div class="card-body">
                        <h5 class="card-title">Rust</h5>
                        <p class="card-text">134000</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Valhalla</h5>
                        <p class="card-text">214000</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Weekly Followers</h5>
                    <div class="card-body">
                        <h5 class="card-title">December 1, 2022 - December 31, 2022</h5>
                        <p class="card-text"><strong style="color: green">22,000</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Card"
}
</script>

<style scoped>

</style>
