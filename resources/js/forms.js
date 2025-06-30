(() => {
    const submitBtn = document.getElementById('submitBtn');

    if (submitBtn) {
        submitBtn.addEventListener('click', () => {
            document.getElementById('currentForm').submit();
        });
    }
})()
