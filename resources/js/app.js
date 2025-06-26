(() => {
    const modal = document.getElementById('modal');
    const modalBody = document.getElementById('modalBody');
    const stepOne = document.getElementById('stepOne');
    const stepTwo = document.getElementById('stepTwo');
    const openButton = document.getElementById('btnOpen');
    const closeButton = document.getElementById('btnClose');
    const nextStepButton = document.getElementById('btnNextStep');

    let currentStep = 'step1';

    openButton.addEventListener('click', () => {
        console.log("olis");
        modalBody.innerHTML = '';
        modalBody.appendChild(stepOne.cloneNode(true));
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
    closeButton.addEventListener('click', () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    });

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
})();
