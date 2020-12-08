const forms = document.querySelector('.formBook')
// support contact validation
forms.addEventListener('submit', e => {
    e.preventDefault();

    const email = forms.email.value;
    const topic = forms.topic.value;
    const message = forms.text.value;

    
    if (topic == '') {
        alert("Select a Topic!");
        forms.topic.style.border = "red";
        return false;
    }
    if (email == '') {
        alert("Enter a Valid Email Address!");
        forms.email.style.border = "red";
        return false;
    }
    if (message == '') {
        alert("Message Field Must Not be Empty!");
        forms.text.style.border = "red";
        return false;
    }
    forms.submit();
})