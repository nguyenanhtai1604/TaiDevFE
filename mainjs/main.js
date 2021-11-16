const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)



const tabs = $$('.form--tab_item')
const tabitems = $$('.tabitem')

tabitems.forEach((tab, index) => {
    const tabactive = tabs[index]
    tab.onclick = function() {
        $('.form--tab_item.active').classList.remove('active');
        tabactive.classList.add('active');
    }
});
const IconClose = $('.modal--close')
const LoginResign = $('.login--resign')
const Login = $('.modal')
const LoginBlur = $('.modal--login')

IconClose.onclick = function() {
    $('.modal.active').classList.remove('active');
}
LoginResign.onclick = function() {
    $('.modal').classList.add('active');
}
Login.onclick = function() {
    $('.modal.active').classList.remove('active');
}
LoginBlur.addEventListener('click', function(event) {
    event.stopPropagation()
})