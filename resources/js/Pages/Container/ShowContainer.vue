<template>
    <app-layout>
        <description-list :container="container"/>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import DescriptionList from "@/Jetstream/DescriptionList";
export default {
    components: {
        AppLayout,
        DescriptionList,
    },
    props: {
        container: Object,
    },
};
</script>

<style></style>
