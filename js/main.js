
const form1 = document.querySelector('.feedback')

form1.addEventListener('submit', e => {
    e.preventDefault();

    const sub = form1.subscribe.value;
    if (sub == '') {
        alert("Enter a Valid Name!");
        form1.subscribe.style.border = "1px solid crimson";
        return false;
    }
    form1.submit();
})
$(function(){
    $(".owl-carousel").owlCarousel({
        center:true,
        loop:true,
        margin:20,
        nav:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            }
        },
    });
});

