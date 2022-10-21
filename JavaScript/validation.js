//Register form validation

const name_ = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const country = document.getElementById('country');
const city = document.getElementById('city');
const contact = document.getElementById('contact');
const inpTag = document.querySelectorAll('input');
// const error_msg = 
const btn = document.getElementById('btn');

clearErrors();

//registration validation
btn.addEventListener('click', (e)=>{
    // e.preventDefault();
    regisValidation(e);
    
});




const regisValidation = (e) =>{
    const fullnamereg = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
    const mailreg = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    const contactreg = /^([0-9]{10,15})$/;
    const passreg = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    const countryreg = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
    const cityreg = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;


    //testing input
    const testFullName = fullnamereg.test(name_.value);
    const testEmail = mailreg.test(email.value);
    const testContact = contactreg.test(contact.value);
    const testPassword = passreg.test(password.value);
    const testCountry = countryreg.test(country.value);
    const testCity = cityreg.test(city.value);

    //applyiing css if regex
    if(!testFullName){
        name_.style.borderColor = "red";
        e.preventDefault();
    }
    else{
        name_.style.borderColor = "green";
    }

    if(!testEmail){
        email.style.borderColor = "red";
        e.preventDefault();
    }
    else{
        email.style.borderColor = "green";
    }

    if(!testContact){
        contact.style.borderColor = "red";
        e.preventDefault();
    }
    else{
        contact.style.borderColor = "green";
    }

    if(!testPassword){
        password.style.borderColor = "red";
        e.preventDefault();
    }
    else{
        password.style.borderColor = "green";
    }

    if(!testCountry){
        country.style.borderColor = "red";
        e.preventDefault();
    }
    else{
        country.style.borderColor = "green";
    }

    if(!testCity){
        city.style.borderColor = "red";
        e.preventDefault();
    }
    else{
        city.style.borderColor = "green";
    }

    

}


function clearErrors(){
    inpTag.forEach(element => {
        element.addEventListener('change', ()=>{
            element.style.borderColor = "none";
        })
    });
}