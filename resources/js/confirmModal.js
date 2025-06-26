(() => {
    const confirmModal = document.getElementById('confirmModal');
    const closeConfirmModal = document.querySelectorAll('.closeConfirmModal');
    const openConfirmModal = document.getElementById('openConfirmModal');

    console.log(confirmModal);
    console.log(closeConfirmModal);
    console.log(openConfirmModal);

    openConfirmModal.addEventListener('click', () => {
        confirmModal.classList.remove('hidden');
        confirmModal.classList.add('flex');
    });

    closeConfirmModal.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            confirmModal.classList.add('hidden');
            confirmModal.classList.remove('flex');
        })
    });
})();
