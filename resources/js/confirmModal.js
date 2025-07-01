(() => {
    const confirmModal = document.getElementById('confirmModal');
    const closeConfirmModal = document.querySelectorAll('.closeConfirmModal');
    const openConfirmModal = document.getElementById('openConfirmModal');

    if (openConfirmModal != null) {
        openConfirmModal.addEventListener('click', () => {
            confirmModal.classList.remove('hidden');
            confirmModal.classList.add('flex');
        });
    }
    if (closeConfirmModal != null) {
        closeConfirmModal.forEach((btn, index) => {
            btn.addEventListener('click', () => {
                confirmModal.classList.add('hidden');
                confirmModal.classList.remove('flex');
            })
        });
    }
})();
