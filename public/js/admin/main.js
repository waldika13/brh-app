const btnBar = document.querySelector('.btn-show-bar');
const btnCloseBar = document.querySelector('.btn-close-bar');
const bar = document.querySelector('.side-bar');

btnBar.addEventListener('click', () => {
  bar.classList.toggle('show');
});

btnCloseBar.addEventListener('click', () => {
  bar.classList.toggle('show');
});

const btnDropdown = document.querySelectorAll('.btn-dropdown');
btnDropdown.forEach((button, index) => {
  button.addEventListener('click', function () {
    const dropdown = document.querySelectorAll('.list-dropdown');
    if (dropdown[index].style.display == 'block') {
      dropdown[index].style.display = 'none';
    } else {
      dropdown[index].style.display = 'block';
    }
  });
});
