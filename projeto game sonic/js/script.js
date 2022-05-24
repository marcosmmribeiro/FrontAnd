const sonic = document.querySelector('.sonic');
const boss = document.querySelector('.boss');


const jump = () => {
    sonic.classList.add('jump');

    setTimeout(() => {
        sonic.classList.remove('jump');            
    }, 500);
}

const loop = setInterval(() => {
   
    const bossPosition = boss.offsetLeft;
    const sonicPosition = +window.getComputedStyle(sonic).bottom.replace('px', '');
    if (bossPosition <= 80 && bossPosition > 0 && sonicPosition < 100) {
        boss.style.animation = 'none';
        boss.style.left = `${bossPosition}px`;

        sonic.style.animation = 'none';
        sonic.style.bottom = `${sonicPosition}px`;

        sonic.src = 'imagens/sonic-death.png';
        sonic.style.width = '100px'

        clearInterval(loop);

    }

}, 10);


document.addEventListener('keydown', jump);