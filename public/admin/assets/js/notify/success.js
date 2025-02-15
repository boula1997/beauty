'use strict';
var notify = $.notify('<i class="fas fa-bell"></i><strong>Processing</strong> your request. Please wait...', {
    type: 'info', // Use 'info' for initial notification type
    allow_dismiss: true,
    delay: 4000,
    showProgressbar: true,
    timer: 300,
    animate: {
        enter: 'animated fadeInDown',
        exit: 'animated fadeOutUp'
    }
});

setTimeout(function () {
    notify.update({
        type: 'success', // Change to 'success' to indicate successful creation
        message: '<i class="fas fa-check-circle"></i> <strong>Processed Successfully!</strong>'
    });
}, 2000); // Delay for 2 seconds before updating the message
