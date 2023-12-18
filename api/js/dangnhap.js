const khung = document.querySelector('.khung');
const linkdangnhap = document.querySelector('.linkdangnhap');
const linkdangky = document.querySelector('.linkdangky');

linkdangky.addEventListener('click', ()=> {
    khung.classList.add('active');
});

linkdangnhap.addEventListener('click', ()=> {
    khung.classList.remove('active');
});