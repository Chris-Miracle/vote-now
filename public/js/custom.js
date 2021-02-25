// vars
const fullBody = document.querySelector('.full-body');
const getTallyBtn = document.querySelector('.tally-btn');
const rightSection = document.querySelector('.right-section');
const closeBtn = document.querySelector('.close-btn');
const largeScreens = window.matchMedia('(min-width: 900px)');
const tallyBtn = document.querySelector('.tally-btn');


// Event listeners
getTallyBtn.addEventListener('click', showRightSection);
closeBtn.addEventListener('click', hideRightSection);


// functions
function showRightSection(){
    if(largeScreens.matches){
        fullBody.style.gridTemplateColumns = '1fr 1fr';
        fullBody.style.width = '800px';
        rightSection.classList.add('animate__animated', 'animate__backInLeft');
        rightSection.style.display = 'block';
        tallyBtn.style.marginTop = '9px';

    } else {
        rightSection.classList.add('animate__animated', 'animate__backInDown');
        rightSection.style.display = 'block';
    }
}

function hideRightSection(){
    if(largeScreens.matches){
        rightSection.classList.remove('animate__animated', 'animate__backInLeft');
        fullBody.style.gridTemplateColumns = '1fr';
        fullBody.style.width = '400px';
        rightSection.style.display = 'none';
        tallyBtn.style.marginTop = '0';
        
    } else{
        rightSection.classList.remove('animate__animated', 'animate__backInDown');
        rightSection.style.display = 'none';
    }
}






console.log(fullBody);