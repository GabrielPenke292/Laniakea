const app = {
    stepForward: function (step) {
        let currentStep = parseInt(step);
        let nextStep = currentStep + 1;

        $(`#step-${currentStep}`).addClass('d-none');
        $(`#step-${nextStep}`).removeClass('d-none');
    }
}
