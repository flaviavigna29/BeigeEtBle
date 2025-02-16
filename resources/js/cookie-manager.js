// resources/js/cookie-manager.js

class CookieManager {
    constructor() {
        this.cookieConsent = this.getCookieConsent();
        this.initializeBanner();
        this.bindEvents();
    }

    initializeBanner() {
        if (!this.cookieConsent) {
            document.getElementById('cookie-banner-simple').style.display = 'block';
        } else {
            this.applyStoredPreferences();
        }
    }

    bindEvents() {
        // Eventi per il banner semplice
        document.getElementById('accept-all-simple').addEventListener('click', () => {
            this.acceptAll();
            document.getElementById('cookie-banner-simple').style.display = 'none';
        });

        // Eventi per l'offcanvas
        document.getElementById('accept-all').addEventListener('click', () => this.acceptAll());
        document.getElementById('reject-all').addEventListener('click', () => this.rejectAll());
    }

    getCookieConsent() {
        const consent = localStorage.getItem('cookieConsent');
        return consent ? JSON.parse(consent) : null;
    }

    setCookieConsent(preferences) {
        localStorage.setItem('cookieConsent', JSON.stringify(preferences));
        this.cookieConsent = preferences;
    }

    acceptAll() {
        const preferences = {
            necessary: true,
            functional: true,
            analytics: true,
            advertising: true,
            timestamp: new Date().toISOString()
        };
        this.setCookieConsent(preferences);
        this.hideBanner();
        this.applyPreferences(preferences);
    }

    rejectAll() {
        const preferences = {
            necessary: true,
            functional: false, // Manteniamo i cookie funzionali per la lingua
            analytics: false,
            advertising: false,
            timestamp: new Date().toISOString()
        };
        this.setCookieConsent(preferences);
        this.hideBanner();
        this.applyPreferences(preferences);
    }

    hideBanner() {
        document.getElementById('cookie-banner-simple').style.display = 'none';
        const offcanvas = document.getElementById('cookieSettings');
        const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
        if (bsOffcanvas) {
            bsOffcanvas.hide();
        }
    }

    applyStoredPreferences() {
        if (this.cookieConsent) {
            this.applyPreferences(this.cookieConsent);
        }
    }

    applyPreferences(preferences) {
        if (preferences.analytics) {
            this.enableAnalytics();
        }
        if (preferences.advertising) {
            this.enableAdvertising();
        }
        if (preferences.functional) {
            this.enableFunctional();
        }
    }

    enableAnalytics() {
        if (typeof gtag === 'undefined' && !document.getElementById('ga-script')) {
            const script = document.createElement('script');
            script.id = 'ga-script';
            script.async = true;
            script.src = `https://www.googletagmanager.com/gtag/js?id=G-26D3Q0LFE9`;
            document.head.appendChild(script);

            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-26D3Q0LFE9');
        }
    }

    enableAdvertising() {
        // Implementare se necessario in futuro
    }

    enableFunctional() {
        // Gestione della lingua preferita
        const savedLanguage = localStorage.getItem('preferredLanguage');
        
        if (savedLanguage) {
            document.querySelectorAll('.language-selector .flag').forEach(button => {
                if (button.dataset.language === savedLanguage) {
                    button.classList.add('active');
                }
            });
        }

        document.querySelectorAll('.language-selector .flag').forEach(button => {
            button.addEventListener('click', () => {
                const selectedLanguage = button.dataset.language;
                localStorage.setItem('preferredLanguage', selectedLanguage);
            });
        });
    }
}

// Inizializza il gestore dei cookie quando il DOM è caricato
document.addEventListener('DOMContentLoaded', () => {
    window.cookieManager = new CookieManager();
});