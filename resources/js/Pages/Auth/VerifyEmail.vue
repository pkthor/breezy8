<script setup>
import { computed } from 'vue';
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    status: String,
});

const form = useForm();

const submit = () => {
    form.post(route('verification.send'));
};

const verificationLinkSent = computed(() => props.status === 'verification-link-sent');
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Email Verification" />

        <div class="mb-4 text-sm text-gray-600">
            Grazie per esserti registrato/a! Prima di continuare, potresti verificate il tuo indirizzo e-mail cliccando sul link che ti abbiamo appena inviato? Nel caso non lo avessi ricevuto, te ne manderemo volentieri un altro.
        </div>

        <div class="mb-4 font-medium text-sm text-green-600" v-if="verificationLinkSent" >
            Abbiamo inviato un nuovo link di verifica all’indirizzo e-mail fornito in fase di registrazione.
        </div>

        <form @submit.prevent="submit">
            <div class="mt-4 flex items-center justify-between text-xl lg:text-base">
                <BreezeButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Rinvia e-mail di verifica
                </BreezeButton>

                <Link :href="route('logout')" method="post" as="button" class="underline text-sm text-gray-600 hover:text-gray-900">Log Out</Link>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
