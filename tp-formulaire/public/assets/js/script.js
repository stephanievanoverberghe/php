let submitForm = document.getElementById('formInscription');
let passOne = document.getElementById('password');
let passTwo = document.getElementById('confirmPassword');

// Déclaration d'évenements

submitForm.addEventListener('submit', (event) => {
    event.preventDefault();
    if (passOne.value == passTwo.value) {        
        passOne.style.backgroundColor = '';
        passTwo.style.backgroundColor = '';
        submitForm.submit()
    } else {
        passOne.style.backgroundColor = '#ff6b35';
        passTwo.style.backgroundColor = '#ff6b35';
    }
    
})