<template>
    <div>
        <div class="sidebar">
            <div style="height: 100%; overflow: auto">

            </div>
        </div>

        <div class="slot">
            <slot />
        </div>
    </div>
</template>
<script>
export default {
    name: 'AdminLayout',
    props: {

    },
    components: {

    },
    methods: {

    }
}
</script>
<style scoped>
    .sidebar {
        width: 200px;
        left: 0;
        top: 0;
        bottom: 0;
        position: fixed;
        background-color: rgba(47,54,95);
        transform: translateZ(0);
    }

    .slot {
        margin-left: 200px;
    }
</style>