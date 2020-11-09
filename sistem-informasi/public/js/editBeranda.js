const gambar1 = document.querySelector('#gambar1')
const gambar2 = document.querySelector('#gambar2')
const gambar3 = document.querySelector('#gambar3')
const modal = document.querySelector('.modal')
const id_modal = document.querySelector('.input-modal')
console.log(gambar1, gambar2, gambar3);

gambar1.addEventListener('click', function () {
  modal.setAttribute('id', 'gambar1')
  id_modal.setAttribute('name', 'gambar1')
  console.log(modal, id_modal);

});

gambar2.addEventListener('click', function () {
  modal.setAttribute('id', 'gambar2')
  id_modal.setAttribute('name', 'gambar2')
  console.log(modal, id_modal);
});

gambar3.addEventListener('click', function () {
  modal.setAttribute('id', 'gambar3')
  id_modal.setAttribute('name', 'gambar3')
  console.log(modal, id_modal);
});
