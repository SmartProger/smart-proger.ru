const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoDark = document.querySelector(".logo-dark");
const menuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = () => {
  navbar.classList.add("navbar-light");
  logoDark.style.display = "block";
  logoLight.style.display = "none";
};
const lightModeOff = () => {
  navbar.classList.remove("navbar-light");
  logoLight.style.display = "block";
  logoDark.style.display = "none";
};

const openMenu = () => {
  menu.classList.add("is-open");
  document.body.style.overflow = "hidden";
  menuToggle.classList.add("close-menu");
  lightModeOn();
};

const closeMenu = () => {
  menu.classList.remove("is-open");
  document.body.style.overflow = "";
  menuToggle.classList.remove("close-menu");
  if (document.documentElement.scrollTop == 0 && isFront) {
    lightModeOff();
  }
};

window.addEventListener("scroll", () => {
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});

menuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".features-slider", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 5,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
    1220: {
      slidesPerView: 5,
    },
  },
});

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 4,

  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },

  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  spaceBetween: 30,

  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    992: {
      slidesPerView: 2,
    },
  },
});

let currentModal; // текущее модальное окно
let modalDialog; // белое окошко модалки
let alertModal = document.querySelector("#alert-modal");

const modalButtons = document.querySelectorAll("[data-toggle=modal]");
modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    currentModal = document.querySelector(button.dataset.target);
    currentModal.classList.toggle("is-open");
    modalDialog = currentModal.querySelector(".modal-dialog");
    currentModal.addEventListener("click", (event) => {
      if (!event.composedPath().includes(modalDialog)) {
        currentModal.classList.remove("is-open");
      }
    });
  });
});

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form");

forms.forEach((form) => {
  // initialize the validation library
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });

  // apply rules to form fields
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "",
      },
      {
        rule: "maxLength",
        value: 50,
        errorMessage: "Максимум 50 символов",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target;
      const formData = new FormData(thisForm);
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            if (currentModal) {
              currentModal.classList.remove("is-open");
            }
            alertModal.classList.add("is-open");
            currentModal = alertModal;
            modalDialog = currentModal.querySelector(".modal-dialog");
            currentModal.addEventListener("click", (event) => {
              if (!event.composedPath().includes(modalDialog)) {
                currentModal.classList.remove("is-open");
              }
            });
          } else {
            thisForm.reset();
            alert("Ошибка: " + response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});
