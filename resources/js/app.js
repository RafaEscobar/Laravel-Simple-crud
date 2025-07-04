(() => {
    //* BTN de confirmación
    const openingBtn = document.getElementById('openingBtn');
    const closeBtn = document.querySelectorAll('.closeBtn');
    const modal = document.getElementById('modal');

    if (openingBtn) {
        openingBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    }
    if (closeBtn) {
        closeBtn.forEach((btn) => {
            btn.addEventListener('click', () => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            })
        })
    }

    //* BTN de eliminación
    const deleteBtns = document.querySelectorAll('.deleteBtn');
    const deleteForm = document.getElementById('deleteForm');

    if (deleteBtns) {
        deleteBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                const authorId = btn.dataset.id;
                const currentEntity = deleteForm.dataset.id;
                deleteForm.action = `/${currentEntity}/${authorId}`;
            });
        });
    }

})();
