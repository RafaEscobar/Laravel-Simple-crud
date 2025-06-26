(() => {
    const confirmModal = document.getElementById('confirmModal');
    const closeConfirmModal = document.getElementById('closeConfirmModal');
    const openConfirmModal = document.getElementById('openConfirmModal');

    openConfirmModal.addEventListener('click', () => {
        confirmModal.classList.remove('hidden');
        confirmModal.classList.add('flex');
    });
    closeConfirmModal.addEventListener('click', () => {
        confirmModal.classList.add('hidden');
        confirmModal.classList.remove('flex');
    });

    acceptButton.addEventListener('click', () => {
        // HACEMOS ALGO
    });
})();
