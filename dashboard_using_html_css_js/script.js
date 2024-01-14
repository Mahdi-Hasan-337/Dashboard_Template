var dashboardToggleButton = document.getElementById("dashboard-menu-toggle");
var analyticsToggleButton = document.getElementById("analytics-menu-toggle");
var feedbackToggleButton = document.getElementById("feedback-menu-toggle");
var notification1ToggleButton = document.getElementById("notification1-menu-toggle");
var notification2ToggleButton = document.getElementById("notification2-menu-toggle");
var el = document.getElementById("wrapper");

dashboardToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
analyticsToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
feedbackToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
notification1ToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
notification2ToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};

document.querySelector('.list-group-item[href="#dashboard-content-wrapper"]').addEventListener('click', function () {
    toggleContent('dashboard-content-wrapper');
});

document.querySelector('.list-group-item[href="#page-content-wrapper"]').addEventListener('click', function () {
    toggleContent('page-content-wrapper');
});

document.querySelector('.list-group-item[href="#feedback-content-wrapper"]').addEventListener('click', function () {
    toggleContent('feedback-content-wrapper');
});

document.querySelector('.list-group-item[href="#notification1-content-wrapper"]').addEventListener('click',
    function () {
        toggleContent('notification1-content-wrapper');
    });

document.querySelector('.list-group-item[href="#notification2-content-wrapper"]').addEventListener('click',
    function () {
        toggleContent('notification2-content-wrapper');
    });

function toggleContent(contentId) {
    document.getElementById('dashboard-content-wrapper').style.display = 'none';
    document.getElementById('page-content-wrapper').style.display = 'none';
    document.getElementById('feedback-content-wrapper').style.display = 'none';
    document.getElementById('notification1-content-wrapper').style.display = 'none';
    document.getElementById('notification2-content-wrapper').style.display = 'none';

    document.getElementById(contentId).style.display = 'block';
}