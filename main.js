const tab1 = document.getElementById('tab1');
const tab2 = document.getElementById('tab2');
const tab3 = document.getElementById('tab3');

const formInput1 = document.getElementById('form-input1');
const formInput2 = document.getElementById('form-input2');
const submitA = document.getElementById('submitA');
const submitB = document.getElementById('submitB');
const formlink1 = document.getElementById('form-link1');
const formlink2 = document.getElementById('form-link2');

const next = document.querySelector('.next');
const all = document.querySelector('.all')

const toogleTab1 = function (){
    formInput1.style.display = 'block'
    formInput2.style.display = 'none'
    submitA.style.display = 'block'
    submitB.style.display = 'none'
    all.style.display = 'block'
    next.style.display = 'none'
    formlink1.style.display = 'block'
    formlink2.style.display = 'none'
    tab2.style.backgroundColor = '#fff'
    tab3.style.backgroundColor = '#fff'
    tab1.style.backgroundColor = '#2d822a'


}
const toogleTab2 = function (){
    formInput1.style.display = 'none'
    formInput2.style.display = 'block'
    submitA.style.display = 'none'
    submitB.style.display = 'block'
    all.style.display = 'block'
    next.style.display = 'none'
    formlink1.style.display = 'none'
    formlink2.style.display = 'block'

    tab1.style.background = '#fff'
    tab3.style.background = '#fff'
    tab2.style.background = '#2d822a'
    tab2.style.color = '#fff'
}
const toogleTab3 = function (){
    all.style.display = 'none'
    next.style.display = 'block'

}
