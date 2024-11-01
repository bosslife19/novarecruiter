import axios from 'axios';
window.axios = axios;
import Echo from 'laravel-echo'; // Adjust as necessary

import Pusher from 'pusher-js'

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';






window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: "f130c456f1bb47b871e7",
    cluster: "eu",
    forceTLS: true,
    // encrypted: true,
});

console.log(window.Echo);

// Listen for the UserLoggedIn event on the admin channel
window.Echo.channel('admin')
    .listen('UserLoggedIn', (event) => {
        console.log(`User logged in: ${event.user.id}, Username: ${event.user.name}`);

        if (window.filament && window.filament.notification) {
            window.filament.notification({
                title: `User logged in: ${event.user.name}`,
                status: 'success',
            });
        } else {
            alert(`User logged in: ${event.user.name}`);
        }
    });


import './echo';
