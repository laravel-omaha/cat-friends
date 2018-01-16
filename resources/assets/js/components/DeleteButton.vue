<template>
    <form method="POST" :action="route" ref="deleteForm">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" :value="csrf">

        <a href="#" @click.prevent="deleteResource">
            <slot></slot>
        </a>
    </form>
</template>

<script>
    export default {
        props: {
            route: {
                type: String,
                required: true,
            }
        },

        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },

        methods: {
            deleteResource() {
                this.$refs.deleteForm.submit();
            }
        }
    }
</script>
