(() => {
    const modal = document.getElementById('modal');
    const openButton = document.getElementById('btnOpen');
    const closeButton = document.getElementById('btnClose');

    openButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
    closeButton.addEventListener('click', () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    });
})();
