<template>
    <div>
        <h1 class="bg-info">Inertiajs is {{ test }}</h1>
        <!-- <inertia-link href="/about-us">Go to about us</inertia-link> -->
    </div>
</template>

<script>
export default {
    components: {
    },
    props: ["test"],
};
</script>