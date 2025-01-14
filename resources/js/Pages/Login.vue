<template>
    <section class="auth bg-base d-flex flex-wrap">
        <div class="auth-left d-lg-block d-none">
            <div
                class="d-flex align-items-center bg-auth-left flex-column h-100 justify-content-center"
            >
                <img src="/public/assets/images/logo.png" alt="Logo" />
            </div>
        </div>
        <div
            class="auth-right py-32 px-24 d-flex flex-column justify-content-center"
        >
            <div class="max-w-464-px mx-auto w-100">
                <div>
                    <h4 class="mb-12">Sign In to your Account</h4>
                    <p class="mb-32 text-secondary-light text-lg">
                        Welcome back! please enter your detail
                    </p>
                </div>
                <form @submit.prevent="submitForm">
                    <div class="icon-field mb-16">
                        <span class="icon top-50 translate-middle-y">
                            <Icon icon="mage:email"/>
                        </span>
                        <input
                            type="email"
                            v-model="email"
                            class="form-control h-56-px bg-neutral-50 radius-12"
                            placeholder="Email"
                            required
                        />
                    </div>
                    <div class="position-relative mb-20">
                        <div class="icon-field">
                            <span class="icon top-50 translate-middle-y">
                                <Icon
                                    icon="solar:lock-password-outline"
                                />
                            </span>
                            <input
                                :type="passwordVisible ? 'text' : 'password'"
                                v-model="password"
                                class="form-control h-56-px bg-neutral-50 radius-12"
                                id="your-password"
                                placeholder="Password"
                                required
                            />
                        </div>
                        <span
                            @click="togglePasswordVisibility"
                            class="toggle-password cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                        >
                            <Icon
                                :icon="
                                    passwordVisible
                                        ? 'ri-eye-off-line'
                                        : 'ri-eye-line'
                                "
                            />
                        </span>
                    </div>
                    <div class="d-flex justify-content-between gap-2">
                        <div
                            class="form-check style-check d-flex align-items-center"
                        >
                            <input
                                class="form-check-input border border-neutral-300"
                                type="checkbox"
                                v-model="rememberMe"
                                id="remember"
                            />
                            <label class="form-check-label" for="remember"
                                >Remember me</label
                            >
                        </div>
                        <a
                            href="javascript:void(0)"
                            class="text-primary-600 fw-medium"
                            >Forgot Password?</a
                        >
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32"
                    >
                        Sign In
                    </button>

                    <div class="mt-32 center-border-horizontal text-center">
                        <span class="bg-base z-1 px-4">Or sign in with</span>
                    </div>
                    <div class="mt-32 d-flex align-items-center gap-3">
                        <button
                            type="button"
                            class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50"
                        >
                            <Icon
                                icon="ic:baseline-facebook"
                                class="text-primary-600 text-xl line-height-1"
                            />
                            Facebook
                        </button>
                        <button
                            type="button"
                            class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50"
                        >
                            <Icon
                                icon="logos:google-icon"
                                class="text-primary-600 text-xl line-height-1"
                            />
                            Google
                        </button>
                    </div>
                    <div class="mt-32 text-center text-sm">
                        <p class="mb-0">
                            Don’t have an account?
                            <a href="" class="text-primary-600 fw-semibold"
                                >Sign Up</a
                            >
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>

<script setup>
import Auth from "../Layouts/Auth.vue";
defineOptions({
    layout: Auth,
})
import { ref } from "vue";
const email = ref("");
const password = ref("");
const rememberMe = ref(false);
const passwordVisible = ref(false);

function togglePasswordVisibility() {
    passwordVisible.value = !passwordVisible.value;
}
</script>

<style scoped>
.btn-primary{
    background-color: #FB611F;
    color: #fff;
    border-color: #FB611F;
}
.btn-primary:active{
    background-color: #0A1D24;
    color: #fff;
    border-color: #0A1D24;
}
</style>
