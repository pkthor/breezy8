<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    email: String,
    token: String,
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.update'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Reset Password" />

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <BreezeLabel for="email" value="Email" class="text-3xl lg:text-base font-semibold" />
                <BreezeInput id="email" type="email" class="mt-1 block w-full text-2xl lg:text-base" v-model="form.email" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="password" value="Password" class="text-3xl lg:text-base font-semibold" />
                <BreezeInput id="password" type="password" class="mt-1 block w-full text-2xl lg:text-base" v-model="form.password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="password_confirmation" value="Confirm Password" class="text-3xl lg:text-base font-semibold" />
                <BreezeInput id="password_confirmation" type="password" class="mt-1 block w-full text-2xl lg:text-base" v-model="form.password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4 text-xl lg:text-base">
                <BreezeButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Reimposta password
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
