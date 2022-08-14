let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}



let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});




function appoinment() {
    var specalication =
        document.forms.RegForm.Specalication.value;
    var doctor_Name =
        document.forms.RegForm.Doctor_name.value;
    var patient_name =
        document.forms.RegForm.Patient_name.value;
    var Tp =
        document.forms.RegForm.tp.value;

    if (specalication.selectedIndex == -1) {
        alert("Please enter Doctor Name.");
        what.focus();
        return false;
    }
    if (doctor_Name.selectedIndex == -1) {
        alert("Please enter Doctor Name.");
        what.focus();
        return false;
    }
    if (patient_name == "") {
        alert("Please enter your Patient Name");
        password.focus();
        return false;
    }
    if (Tp == "") {
        alert("Please enter your Telephone Number");
        password.focus();
        return false;
    }
    
    return true;
}