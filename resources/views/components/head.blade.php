mounted() {
    this.initSidebarDropdown();
    this.initSidebarToggle();
    this.initSidebarMobileToggle();

    // Sidebar close functionality
    this.initSidebarClose();

    // Keep the current page active
    this.initActivePage();

    // Theme toggling functionality
    this.initThemeToggle();

    // Table header checkbox functionality
    this.initTableSelectAll();

    // Remove table row functionality
    this.initRemoveTableRow();
},
methods: {
    // Initialize sidebar dropdown
    initSidebarDropdown() {
        document
            .querySelectorAll(".sidebar-menu .dropdown")
            .forEach((item) => {
                item.addEventListener("click", function () {
                    // Toggle the 'open' and 'dropdown-open' classes
                    item.classList.toggle("open");
                    item.classList.toggle("dropdown-open");

                    // Toggle the visibility of the submenu by toggling the 'show' class
                    const submenu = item.querySelector(".sidebar-submenu");
                    if (submenu) {
                        submenu.classList.toggle("show");
                    }
                });
            });
    },

    // Initialize sidebar toggle functionality
    initSidebarToggle() {
        const sidebarToggle = document.querySelector(".sidebar-toggle");
        if (sidebarToggle) {
            sidebarToggle.addEventListener("click", function () {
                this.classList.toggle("active");
                document
                    .querySelector(".sidebar")
                    .classList.toggle("active");
                document
                    .querySelector(".dashboard-main")
                    .classList.toggle("active");
            });
        }
    },

    // Initialize sidebar mobile toggle functionality
    initSidebarMobileToggle() {
        const sidebarMobileToggle = document.querySelector(
            ".sidebar-mobile-toggle"
        );
        if (sidebarMobileToggle) {
            sidebarMobileToggle.addEventListener("click", function () {
                document
                    .querySelector(".sidebar")
                    .classList.add("sidebar-open");
                document.body.classList.add("overlay-active");
            });
        }
    },

    // Initialize sidebar close functionality
    initSidebarClose() {
        const sidebarCloseBtn =
            document.querySelector(".sidebar-close-btn");
        if (sidebarCloseBtn) {
            sidebarCloseBtn.addEventListener("click", function () {
                document
                    .querySelector(".sidebar")
                    .classList.remove("sidebar-open");
                document.body.classList.remove("overlay-active");
            });
        }
    },

    // Keep the current page active
    initActivePage() {
        const currentUrl = window.location.href;
        document.querySelectorAll("ul#sidebar-menu a").forEach((link) => {
            if (link.href === currentUrl) {
                link.classList.add("active-page");
                link.parentElement.classList.add("active-page");
            }
        });
    },

    // Theme toggling functionality
    initThemeToggle() {
        const button = document.querySelector("[data-theme-toggle]");
        const localStorageTheme = localStorage.getItem("theme");

        let currentThemeSetting = localStorageTheme
            ? localStorageTheme
            : "light";

        if (button) {
            button.setAttribute("aria-label", currentThemeSetting);
            button.innerText = currentThemeSetting;
            document.documentElement.setAttribute(
                "data-theme",
                currentThemeSetting
            );

            button.addEventListener("click", () => {
                const newTheme =
                    currentThemeSetting === "dark" ? "light" : "dark";
                localStorage.setItem("theme", newTheme);
                button.setAttribute("aria-label", newTheme);
                button.innerText = newTheme;
                document.documentElement.setAttribute(
                    "data-theme",
                    newTheme
                );
                currentThemeSetting = newTheme;
            });
        } else {
            document.documentElement.setAttribute(
                "data-theme",
                currentThemeSetting
            );
        }
    },

    // Table header checkbox functionality
    initTableSelectAll() {
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
    },

    // Remove table row functionality
    initRemoveTableRow() {
        document.querySelectorAll(".remove-btn").forEach((removeBtn) => {
            removeBtn.addEventListener("click", function () {
                this.closest("tr").remove();

                // Check if the table has no rows left
                if (
                    document.querySelectorAll(".table tbody tr").length ===
                    0
                ) {
                    document
                        .querySelector(".table")
                        .classList.add("bg-danger");
                    document.querySelector(
                        ".no-items-found"
                    ).style.display = "block";
                }
            });
        });
    },
},
};