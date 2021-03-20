<template>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Konteyner bilgisi
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Konteyner yük bilgi uygulaması
            </p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div
                    class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                >
                    <dt class="text-sm font-medium text-gray-500">Konteyner</dt>
                    <dd
                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                    >
                        {{ container.loads.type }}
                    </dd>
                </div>
                <div
                    class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                >
                    <dt class="text-sm font-medium text-gray-500">
                        Kalkış Yeri
                    </dt>
                    <dd
                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                    >
                        {{ container.departure }}
                    </dd>
                </div>
                <div
                    class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                >
                    <dt class="text-sm font-medium text-gray-500">
                        Varış Yeri
                    </dt>
                    <dd
                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                    >
                        {{ container.arrival }}
                    </dd>
                </div>
                <div
                    class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                >
                    <dt class="text-sm font-medium text-gray-500">
                        Ayrılış Tarihi / Tahmini Varış Tarihi
                    </dt>
                    <dd
                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                    >
                        {{ container.loads.release_date }} /
                        {{ container.loads.arrival_date }}
                    </dd>
                </div>
                <div
                    class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                >
                    <dt class="text-sm font-medium text-gray-500">
                        Varış Limanı
                    </dt>
                    <dd
                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                    >
                        {{ container.loads.arrival_port }}
                    </dd>
                </div>
                <div
                    class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                >
                    <dt class="text-sm font-medium text-gray-500">
                        Getiren Gemi
                    </dt>
                    <dd
                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                    >
                        {{ container.ships.name }}
                    </dd>
                </div>
                <div
                    class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                >
                    <dt class="text-sm font-medium text-gray-500">Acente</dt>
                    <dd
                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                    >
                        {{ container.loads.agencieses.name }}
                    </dd>
                </div>
                <div
                    class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                >
                    <dt class="text-sm font-medium text-gray-500">
                        Harita
                    </dt>
                    <dd
                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                    >
                        <div style="width: 100%">
                            <div style="width: 100%">
                                <div style="width: 100%">
                                    <iframe
                                        width="100%"
                                        height="600"
                                        frameborder="0"
                                        scrolling="no"
                                        marginheight="0"
                                        marginwidth="0"
                                        src='https://maps.google.com/maps?width=100%25&amp;height=600t=&amp;z=8&amp;ie=UTF8&amp;iwloc=B&amp;output=embed'
                                    ></iframe>
                                </div>
                            </div>
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        container: Object,
    },
};
</script>
