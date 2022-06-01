const btnBar = document.querySelector(".btn-show-bar");
const btnCloseBar = document.querySelector(".btn-close-bar");
const bar = document.querySelector(".side-bar");

btnBar.addEventListener("click", () => {
    bar.classList.toggle("show");
});

btnCloseBar.addEventListener("click", () => {
    bar.classList.toggle("show");
});
try {
    const backBtn = document.querySelector(".btn-batal");

    backBtn.addEventListener("click", () => history.back());
} catch (error) {}

try {
    const btnDropdown = document.querySelectorAll(".btn-dropdown");
    btnDropdown.forEach((button, index) => {
        button.addEventListener("click", function () {
            const dropdown = document.querySelectorAll(".list-dropdown");
            if (dropdown[index].style.display == "block") {
                dropdown[index].style.display = "none";
            } else {
                dropdown[index].style.display = "block";
            }
        });
    });
} catch (error) {}


