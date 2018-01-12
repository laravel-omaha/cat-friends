<template>
    <span class="icon">
        <i :class="iconText"></i>
    </span>
</template>

<script>
    export default {
        props: {
            icon: {
                type: String,
                required: true,
            }
        },

        computed: {
            iconText() {
                return 'mdi mdi-' + this.icon;
            }
        }
    }
</script>
