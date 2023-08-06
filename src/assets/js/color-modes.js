(() => {
    'use strict';

    const validThemes = ['light', 'dark-custom', 'auto'];
    const getStoredTheme = () => {
        const storedTheme = localStorage.getItem('theme');
        return validThemes.includes(storedTheme) ? storedTheme : 'auto';
    };
    const setStoredTheme = (theme) => {
        if (validThemes.includes(theme)) {
            localStorage.setItem('theme', theme);
        }
    };

    window.addEventListener('storage', () => {
        setStoredTheme();
    });

    const isDaytime = () => {
        const now = new Date();
        const hours = now.getHours();
        // Establece el rango de horas para el día (por ejemplo, de 7:00 a 19:00)
        const dayStartHour = 7;
        const dayEndHour = 19;
        return hours >= dayStartHour && hours < dayEndHour;
    };

    const getPreferredTheme = () => {
        const storedTheme = getStoredTheme();
        if (storedTheme === 'auto') {
            // Si el tema es "auto", determinar el tema según la hora del día.
            return isDaytime() ? 'light' : 'dark-custom';
        }
        return storedTheme;
    };

    const setTheme = (theme) => {
        if (theme === 'auto') {
            // Si el tema es "auto", determinar el tema según la hora del día.
            theme = isDaytime() ? 'light' : 'dark-custom';
        }
        document.documentElement.setAttribute('data-bs-theme', theme);
    };

    setTheme(getPreferredTheme());

    const showActiveTheme = (theme, focus = false) => {
        const themeSwitcher = document.querySelector('#bd-theme');

        if (!themeSwitcher) {
            return;
        }

        if (theme === 'dark-custom') {
            return; // Si el tema es "dark-custom", no realizamos cambios.
        }

        const themeSwitcherText = document.querySelector('#bd-theme-text');
        const activeThemeIcon = document.querySelector('#bd-theme span[theme-icon-active]');
        const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`);
        const svgOfActiveBtn = btnToActive.querySelector('#bd-theme-text').classList.toString();

        document.querySelectorAll('[data-bs-theme-value]').forEach((element) => {
            element.classList.remove('active');
            element.setAttribute('aria-pressed', 'false');
        });

        btnToActive.classList.add('active');
        btnToActive.setAttribute('aria-pressed', 'true');
        activeThemeIcon.setAttribute('class', svgOfActiveBtn);
        const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
        themeSwitcher.setAttribute('aria-label', themeSwitcherLabel);

        if (focus) {
            themeSwitcher.focus();
        }
    };

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        const storedTheme = getStoredTheme();
        if (storedTheme !== 'light' && storedTheme !== 'dark-custom') {
            setTheme(getPreferredTheme());
        }
    });

    window.addEventListener('DOMContentLoaded', () => {
        showActiveTheme(getPreferredTheme());

        document.querySelectorAll('[data-bs-theme-value]').forEach((toggle) => {
            toggle.addEventListener('click', () => {
                const theme = toggle.getAttribute('data-bs-theme-value');
                setStoredTheme(theme);
                setTheme(theme);
                showActiveTheme(theme, true);
            });
        });
    });
})();