<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    password: '',
});

const submit = () => {
    form.post(route('password.confirm'), {
        onFinish: () => form.reset(),
    })
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Confirm Password" />

        <div class="mb-4 text-sm text-gray-600">
            Questa è un’area sicura dell’app. Ti preghiamo di confermare la tua password prima di continuare.
        </div>

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <BreezeLabel for="password" value="Password" class="text-3xl lg:text-base font-semibold" />
                <BreezeInput id="password" type="password"  class="mt-1 block w-full text-2xl lg:text-base" v-model="form.password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <BreezeButton class="ml-4 text-xl lg:text-base" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Conferma
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
