<script setup></script>
<template lang="">
    <aside class="sidebar">
        <button type="button" class="sidebar-close-btn">
            <Icon icon="radix-icons:cross-2" />
        </button>
        <div>
            <a href="/dashboard" class="sidebar-logo">
                <img
                    src="/public/assets/images/logo.png"
                    alt="site logo"
                    class="light-logo"
                />
                <img
                    src="/public/assets/images/logo.png"
                    alt="site logo"
                    class="dark-logo"
                />
                <img
                    src="/public/assets/images/logo.png"
                    alt="site logo"
                    class="logo-icon"
                />
            </a>
        </div>
        <div class="sidebar-menu-area">
            <ul class="sidebar-menu" id="sidebar-menu">
                <li>
                    <Link :href="route('dashboard')">
                        <Icon icon="mage:email" class="menu-icon" />
                        <span>Dashboard</span>
                    </Link>
                </li>
                <li class="sidebar-menu-group-title"></li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <Icon icon="hugeicons:invoice-03" class="menu-icon" />
                        <span>Data Master</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <Link :href="route('manage.user')"
                                ><i
                                    class="ri-circle-fill circle-icon text-orange-600 w-auto"
                                ></i>
                                Manage User
                            </Link>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
</template>

<style lang=""></style>
