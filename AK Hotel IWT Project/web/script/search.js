

function search_animal() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('animals');
      
    selectElement = document.querySelector('#select1');
    output = selectElement.options[selectElement.selectedIndex].value;

    for (i = 0; i < x.length; i++) {

        if (!x[i].innerHTML.toLowerCase().includes(input) || !x[i].innerHTML.toLowerCase().includes(output)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }

        



}}


function getOption() {
    selectElement = document.querySelector('#select1');
    output = selectElement.options[selectElement.selectedIndex].value;
    document.querySelector('.output').textContent = output;
}



/* for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    } */