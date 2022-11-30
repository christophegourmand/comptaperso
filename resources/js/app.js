import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// ============================================================================
// SECTION : transmit color from picker to icon in form to create bank account
// ============================================================================

let colorPickerInput = document.getElementById('formfield_icon_color_hexa');
let iconsFormFieldset = document.getElementById('formfield_icon');

colorPickerInput.addEventListener('change', event =>{
    let colorHexaCode = event.target.value;
    iconsFormFieldset.style.color = colorHexaCode;
});
