window.addEventListener('DOMContentLoaded', () => {

    class CookieConsent {
        constructor({popup, btnConfirm, btnCancel, activeClass, revoke = ''} = {}) {
            this.popup = document.querySelector(popup);
            this.btnConfirm = document.querySelector(btnConfirm);
            this.btnCancel = document.querySelector(btnCancel);
            this.revoke = document.querySelector(revoke);
            this.activeClass = activeClass;
            this.consentPropertyType = 'site_consent';
        }

        getItem = (key) => {
            const cookies = document.cookie
                .split(';')
                .map(cookie => cookie.split('='))
                .reduce((acc, [key, value]) => ({
                    ...acc,
                    [key.trim()]: value
                }), {});

            return cookies[key];
        }

        setItem = (key, value) => {
            document.cookie = `${key}=${value};expires=Sun, 16 Jul 3567 06:23:41 GMT`;
        }

        hasConsented = () => {
            if (this.getItem(this.consentPropertyType) === 'true') {
                return true;
            } else {
                return false;
            }
        }

        changeStatus = (prop) => {
            this.setItem(this.consentPropertyType, prop);
            if (this.hasConsented()) {
                myScripts();
            }
        }

        bindTriggers = () => {
            this.btnConfirm.addEventListener('click', () => {
                this.changeStatus(true);
                this.popup.classList.remove(this.activeClass);
            });

            this.btnCancel.addEventListener('click', () => {
                this.changeStatus(false);
                deleteAllCookies();
                this.popup.classList.remove(this.activeClass);
            });
            this.revoke.addEventListener('click', () => {
                this.popup.classList.add(this.activeClass);
            });

        }

        init = () => {
            try {
                if (this.hasConsented()) {
                    myScripts();
                } else {
                    this.popup.classList.add(this.activeClass);
                }
                this.bindTriggers();
            } catch (e) {
                console.error('Переданы не все данные');
            }

        }
    }

    new CookieConsent({
        activeClass: 'popup_active',
        popup: '.popup',
        btnConfirm: '[data-confirm]',
        btnCancel: '[data-cancel]',
        revoke: '[data-revoke]',
    }).init();

    function myScripts() {
        console.log('Loading...');
    }

    function deleteAllCookies() {
        const cookies = document.cookie.split(";");

        for (let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i];
            const eqPos = cookie.indexOf("=");
            const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
    }

// кнопка
//     document.querySelector("#data-cancel").onclick = function () {
//         deleteAllCookies();
//         location.reload();
//     }
});
