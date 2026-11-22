<?php

return [
    /*
    | Sidebar sections hidden from the admin dashboard because the shop front does not use them
    | (to keep the operations team focused). Data and routes are kept; remove a key to show it again.
    |
    | Keys: itemRequests, services, contacts, newsletters
    */
    'hidden_sections' => array_filter(array_map('trim', explode(',', env(
        'DASHBOARD_HIDDEN_SECTIONS',
        'itemRequests,services,contacts,newsletters'
    )))),
];
