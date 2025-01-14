let toggled = false;
function toggleSidebar() {
    const sidebar = document.getElementsByClassName('sidebar')[0];
    toggled = !toggled;
    sidebar.style.marginLeft = toggled ? '0' : '-55%';
}