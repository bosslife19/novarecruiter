import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '2c1be78a53c1c93c139f',
    cluster: 'eu',
    forceTLS: true,
});
