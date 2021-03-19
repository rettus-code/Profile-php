const form = document.querySelector('.revForm')
// support contact validation
form.addEventListener('submit', e => {
    e.preventDefault();

    const name = form.name.value;
    const link = form.link.value;
    const stars = form.stars.value;
    const message = form.review.value;

    if (stars == '') {
        alert("Select how many Stars you rate it!");
        form.stars.style.border = "red";
        return false;
    }
    if (name == '') {
        alert("Enter a Valid Name!");
        form.name.style.border = "red";
        return false;
    }
    if (link == '') {
        alert("Enter a Valid URL!");
        form.link.style.border = "red";
        return false;
    }
    if (message == '') {
        alert("Review Field Must Not be Empty!");
        form.text.style.border = "red";
        return false;
    }
    form.submit();
})