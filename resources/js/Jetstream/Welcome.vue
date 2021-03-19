<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl">Yüklü Konteyner Takip Tablosu</div>

            <div class="mt-6 text-gray-500">
                Gemilerdeki yüklerin takibini, varış noktasını ve tahmini varış
                süresini bildiren ekleyip çıkartılabilen sistem.
            </div>
        </div>
        <data-table />
    </div>
</template>

<script>
import JetApplicationLogo from "@/Jetstream/ApplicationMark";
import DataTable from "./DataTable.vue";

export default {
    components: {
        JetApplicationLogo,
        DataTable,
    },
};
</script>
