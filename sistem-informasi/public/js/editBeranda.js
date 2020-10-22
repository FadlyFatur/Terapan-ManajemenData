const modal = document.querySelector('.set-up')
const modalBtn = document.querySelector('.launchModal')

modalBtn.addEventListener('click', ()=>{
  modal.classList.toggle('show')
  console.log(modal);
})