window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');

var notifications = [];

const NOTIFICATION_TYPES = {
    projectassigned: 'App\\Notifications\\ProjectAssigned',
    includedinproject : 'App\\Notifications\\includedinproject'
};

$(document).ready(function() {
    // check if there's a logged in user
     console.log(Laravel.userId);

    if(Laravel.userId) {
        $.get('/notifications', function (data) {
        	console.log(data);
            addNotifications(data, "#notifications");
        });
    }
});

function addNotifications(newNotifications, target) {
    notifications = _.concat(notifications, newNotifications);

    // show only last 5 notifications
    // notifications.slice(0, 5);

    showNotifications(notifications, target);
}

function showNotifications(notifications, target) {
    if(notifications.length) {
        var htmlElements = notifications.map(function (notification) {
            return makeNotification(notification);
        });
        $(target + 'Menu').html(htmlElements.join(''));
        $(target).addClass('has-notifications')
    } else {
        $(target + 'Menu').html('<li class="dropdown-header">No notifications</li>');
        $(target).removeClass('has-notifications');
    }
}

// Make a single notification string
function makeNotification(notification) {
    var to = routeNotification(notification);
    var notificationText = makeNotificationText(notification);
    return '<li><a href="' + to + '">' + notificationText + '</a></li>';
}

// get the notification route based on it's type
function routeNotification(notification) {
    var to = '?project_id=' + notification.data.project_id;
    var read = '&read=' + notification.id;
    if(notification.type === NOTIFICATION_TYPES.projectassigned) {
        to = 'projectintiation' + to + read;
    }
    return '/' + to;
}

// get the notification text based on it's type
function makeNotificationText(notification) {
    var text = '';
    if(notification.type === NOTIFICATION_TYPES.projectassigned) {
        const name = notification.data.project_title;
        text += 'New Project <strong>' + name + '</strong> assigned to you';
    }else if(notification.type === NOTIFICATION_TYPES.includedinproject){
        const name = notification.data.project_title;
        text += 'You are a member of new project <strong>' + name + '</strong>';

    }
    return text;
}