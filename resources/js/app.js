import './bootstrap';
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()


import.meta.glob([
    '/resources/assets/images/**',
    '/resources/assets/icons/**'
]);

