//tabs

document.addEventListener("DOMContentLoaded", () => {

    let allTabs = document.getElementById('location-names');

    if (allTabs) {
        allTabs.querySelectorAll('.location-name').forEach(tab => {
            tab.addEventListener('click', mapSwitch);
        });
    }

    function mapSwitch(event) {
        
        if (event.target.classList.contains('active')) {
            return;
        }
        let tabContents = event.target.parentElement.nextElementSibling.querySelectorAll('.location-map');
        let tabButtons = event.target.parentElement.children;
        let targetTab = event.target.dataset.mapId;
        Array.from(tabButtons).forEach(tabButton => {
            tabButton.classList.remove('active');
            tabButton.classList.remove('font-semibold');
        });
        event.target.classList.add('active');
        event.target.classList.add('font-semibold');
        tabContents.forEach(tabContent => {
            tabContent.classList.remove('active');
            if (targetTab === tabContent.id) {
                tabContent.classList.add('active');
            }
        });

    }

});
