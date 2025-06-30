(() => {
    const modal = document.getElementById('modal');
    const modalBody = document.getElementById('modalBody');
    const stepOne = document.getElementById('stepOne');
    const stepTwo = document.getElementById('stepTwo');

    const openButton = document.getElementById('openingBtn');
    const closeButton = document.querySelectorAll('.btnClose');
    const nextStepButton = document.getElementById('btnNextStep');

    const modalEdit = document.getElementById('editModal');
    const btnEdit = document.getElementById('openingBtnEdit');

    let currentStep = 'step1';

    openButton.addEventListener('click', () => {
        modalBody.innerHTML = '';
        modalBody.appendChild(stepOne.cloneNode(true));
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    closeButton.forEach(btn => {
        btn.addEventListener('click', () => {
            if (modal.classList.contains('flex')) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
            if (modalEdit.classList.contains('flex')) {
                modalEdit.classList.add('hidden');
                modalEdit.classList.remove('flex');
            }
        })
    })

    if (nextStepButton) {
        nextStepButton.addEventListener('click', () => {
            if (currentStep == 'step1') {
                currentStep = 'step2';
                modalBody.innerHTML = '';
                modalBody.appendChild(stepTwo.cloneNode(true));
            } else {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                currentStep = 'step1';
            }
        })
    }

    if(btnEdit) {
        btnEdit.addEventListener('click', () => {
            const stepOneContent = document.getElementById('stepOne');
            console.log(stepOneContent);
            if (stepOneContent) {
                modalBody.innerHTML = '';
                modalBody.appendChild(document.getElementById('modalBody').cloneNode(true));
                modalEdit.classList.remove('hidden');
                modalEdit.classList.add('flex');
            } else {
                console.error('stepOne no está disponible en el DOM.');
            }
        });
    }
})();
