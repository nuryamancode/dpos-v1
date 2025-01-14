<template lang="">
    <Sidebar />
    <main class="dashboard-main">
        <Navbar />
        <div class="dashboard-main-body">
            <slot></slot>
        </div>
        <Footer />
    </main>
</template>

<script setup>
import Navbar from "../Components/Navbar.vue";
import Footer from "../Components/Footer.vue";
import Sidebar from "../Components/Sidebar.vue";
import { onMounted } from "vue";

defineOptions({
    sidebar: Sidebar,
    navbar: Navbar,
    footer: Footer,
});
onMounted(() => {
    initSidebarDropdown();
    initSidebarToggle();
    initSidebarMobileToggle();
    initSidebarClose();
    initThemeToggle();
    initTableSelectAll();
    initRemoveTableRow();
});

function initSidebarDropdown() {
    document.querySelectorAll(".sidebar-menu .dropdown").forEach((item) => {
        item.addEventListener("click", function () {
            item.classList.toggle("open");
            item.classList.toggle("dropdown-open");

            const submenu = item.querySelector(".sidebar-submenu");
            if (submenu) {
                submenu.classList.toggle("show");
            }
        });
    });
}

function initSidebarToggle() {
    const sidebarToggle = document.querySelector(".sidebar-toggle");
    if (sidebarToggle) {
        sidebarToggle.addEventListener("click", function () {
            this.classList.toggle("active");
            document.querySelector(".sidebar").classList.toggle("active");
            document
                .querySelector(".dashboard-main")
                .classList.toggle("active");
        });
    }
}

function initSidebarMobileToggle() {
    const sidebarMobileToggle = document.querySelector(
        ".sidebar-mobile-toggle"
    );
    if (sidebarMobileToggle) {
        sidebarMobileToggle.addEventListener("click", function () {
            document.querySelector(".sidebar").classList.add("sidebar-open");
            document.body.classList.add("overlay-active");
        });
    }
}

function initSidebarClose() {
    const sidebarCloseBtn = document.querySelector(".sidebar-close-btn");
    if (sidebarCloseBtn) {
        sidebarCloseBtn.addEventListener("click", function () {
            document.querySelector(".sidebar").classList.remove("sidebar-open");
            document.body.classList.remove("overlay-active");
        });
    }
} 
function initThemeToggle() {
    const button = document.querySelector("[data-theme-toggle]");
    const localStorageTheme = localStorage.getItem("theme");
    let currentThemeSetting = localStorageTheme ? localStorageTheme : "light";

    if (button) {
        button.setAttribute("aria-label", currentThemeSetting);
        button.innerText = currentThemeSetting;
        document.documentElement.setAttribute(
            "data-theme",
            currentThemeSetting
        );

        button.addEventListener("click", () => {
            const newTheme = currentThemeSetting === "dark" ? "light" : "dark";
            localStorage.setItem("theme", newTheme);
            button.setAttribute("aria-label", newTheme);
            button.innerText = newTheme;
            document.documentElement.setAttribute("data-theme", newTheme);
            currentThemeSetting = newTheme;
        });
    } else {
        document.documentElement.setAttribute(
            "data-theme",
            currentThemeSetting
        );
    }
}

function initTableSelectAll() {
    const selectAll = document.querySelector("#selectAll");
    if (selectAll) {
        selectAll.addEventListener("change", function () {
            document
                .querySelectorAll(".form-check .form-check-input")
                .forEach((checkbox) => {
                    checkbox.checked = selectAll.checked;
                });
        });
    }
}
function initRemoveTableRow() {
    document.querySelectorAll(".remove-btn").forEach((removeBtn) => {
        removeBtn.addEventListener("click", function () {
            this.closest("tr").remove();

            // Check if the table has no rows left
            if (document.querySelectorAll(".table tbody tr").length === 0) {
                document.querySelector(".table").classList.add("bg-danger");
                document.querySelector(".no-items-found").style.display =
                    "block";
            }
        });
    });
}
</script>

<style>
.sidebar-submenu.show {
    display: block;
}
</style>
