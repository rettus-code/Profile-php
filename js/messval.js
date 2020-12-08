const forms1 = document.querySelector('.formBook1')
// email me form validation
forms1.addEventListener('submit', e => {
    e.preventDefault();

    const email1 = forms1.email1.value;
    const topic1 = forms1.topic1.value;
    const message1 = forms1.text1.value;

    
    if (topic1 == '') {
        alert("Select a Topic!");
        forms1.topic1.style.border = "red";
        return false;
    }
    if (email1 == '') {
        alert("Enter a Valid Email Address!");
        forms1.email1.style.border = "red";
        return false;
    }
    if (message1 == '') {
        alert("Message Field Must Not be Empty!");
        forms1.text1.style.border = "red";
        return false;
    }
    forms1.submit();
})