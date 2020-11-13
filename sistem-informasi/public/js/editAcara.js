const input = document.getElementById("myInput")

input.addEventListener("click", ()=>{
  document.querySelector(".dropdown-content").classList.toggle("show");
});

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  console.log(filter);

  div = document.getElementById("myDropdown");
  // console.log(div);
  a = div.getElementsByTagName("a");
  // console.log(a);

  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    console.log(txtValue);
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
} 


// const collapse1 = document.getElementById("colapse1") 
// const collapse2 = document.getElementById("colapse2") 

// console.log(collapse1.getAttribute("aria-expanded"));
// console.log(collapse2.getAttribute("aria-expanded"));

// collapse1.addEventListener('click',()=>{
//   const collapse = collapse2.setAttribute("aria-expanded", "false"); 
// });

// collapse2.addEventListener('click',()=>{
//   const collapse = collapse1.setAttribute("aria-expanded", "false"); 
// });