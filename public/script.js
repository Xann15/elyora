// Sidebar
const menuItems = document.querySelectorAll('.menu-items');
// Messages
const messagesNotification = document.querySelector('#messages-notifications');
const messages = document.querySelector('.messages');
const message = messages.querySelectorAll('.message');
const messageSearch = document.querySelector('#message-search');
// Customization
const theme = document.querySelector('#theme');
const themeModal = document.querySelector('.customize-theme');
const fontSizes = document.querySelectorAll('.choose-size span');
var root = document.querySelector(':root');
const Bg1 = document.querySelector('.bg-1');
const Bg2 = document.querySelector('.bg-2');



// ==========SideBar============

// Remove Active from all menu items
const changeActiveItem = () =>{
    menuItems.forEach(item => {
        item.classList.remove('active');
    })
}

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        changeActiveItem();
        item.classList.add('active');
        if(item.id != 'notifications'){
            document.querySelector('.notification-popup').style.display = 'none';
        } else{
            document.querySelector('.notification-popup').style.display = 'block';
            document.querySelector('#notifications .notification-count').style.display = 'none';
        }
    })
})

// ============ Messages ===============
// Searches chat
const searchMessage = () => {
    const val = messageSearch.value.toLowerCase();
    message.forEach(user => {
        let name = user.querySelector('h5').textContent.toLowerCase(); // Use querySelector, not querySelectorAll
        if (name.indexOf(val) !== -1) {
            user.style.display = 'flex';
        } else {
            user.style.display = 'none';
        }
    });
}

// Search Chat
messageSearch.addEventListener('keyup', searchMessage);

// highlight messages box
messagesNotification.addEventListener('click', () => {
    messages.style.boxShadow = "0 0 1rem var(--colour-primary)";
    messagesNotification.querySelector('.notification-count').style.display = 'none'
    setTimeout(() => {
        messages.style.boxShadow = 'none'
    }, 2000);
})

// ==================== Customizations ======================

// open customize modal
const openThemeModal = () => {
    themeModal.style.display = 'grid';
}

// close modal
const closeThemeModal = (e) => {
    if(e.target.classList.contains('customize-theme')){
        themeModal.style.display ='none';
    }
}
themeModal.addEventListener('click', closeThemeModal);

theme.addEventListener('click', openThemeModal);

// Font sizes
// removing the active from all font sizes
const removeSizeSelector = () =>{
    fontSizes.forEach(size => {
        size.classList.remove('active');
    })
}

fontSizes.forEach(size => {
    size.addEventListener('click', () =>{
        removeSizeSelector();
        let fontSize;
        size.classList.toggle('active');

        if(size.classList.contains('font-size-1')){
            fontSize = '10px';
            root.style.setProperty('--sticky-top-left', '5.4rem');
            root.style.setProperty('--sticky-top-right', '5.4rem');
        } else if(size.classList.contains('font-size-2')){
            fontSize = '13px';
            root.style.setProperty('--sticky-top-left', '5.4rem');
            root.style.setProperty('--sticky-top-right', '-7rem');
        } else if(size.classList.contains('font-size-3')){
            fontSize = '16px';
            root.style.setProperty('--sticky-top-left', '-2rem');
            root.style.setProperty('--sticky-top-right', '-17rem');
        } else if(size.classList.contains('font-size-4')){
            fontSize = '19px';
            root.style.setProperty('--sticky-top-left', '-5rem');
            root.style.setProperty('--sticky-top-right', '-25rem');
        } else if(size.classList.contains('font-size-5')){
            fontSize = '22px';
            root.style.setProperty('--sticky-top-left', '-12rem');
            root.style.setProperty('--sticky-top-right', '-35rem');
        }
        
        // Changing HTML Font Sizes
    document.querySelector('html').style.fontSize = fontSize;
    })
})

// ==================== Theme Change =======================
let lightColourLightness;
let whiteColourLightness;
let darkColourLightness;

//change BG colour
const changeBG = () => {
    root.style.setProperty('--light-colour-lightness', lightColourLightness);
    root.style.setProperty('--white-colour-lightness', whiteColourLightness);
    root.style.setProperty('--dark-colour-lightness', darkColourLightness);
}

Bg1.addEventListener('click', () =>{
    // Add active
    Bg1.classList.add('active');
    // remove active from other
    Bg2.classList.remove('active');
    // remove customized changes from local storage
    window.location.reload();
});

Bg2.addEventListener('click', () => {
    darkColourLightness = '95%';
    whiteColourLightness = '10%';
    lightColourLightness = '0%';

    // add active
    Bg2.classList.add('active');
    //  remove active from others
    Bg1.classList.remove('active');
    changeBG();
})