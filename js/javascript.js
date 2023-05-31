    formOpenBtn=document.querySelector("#form_open");
    formContiner=document.querySelector(".form_continer");
    formCloseBtn=document.querySelector(".form_close");
    signUpBtn=document.querySelector("#signUp");
    loginBtn=document.querySelector("#login");
    formOpenBtn.addEventListener("click",()=>formContiner.classList.add("show"));
    formCloseBtn.addEventListener("click",()=>formContiner.classList.remove("show"));
    signUpBtn.addEventListener("click",(e)=>{e.preventDefault();formContiner.classList.add("active");});
    loginBtn.addEventListener("click",(e)=>{e.preventDefault();formContiner.classList.remove("active");});


/*-------------------------------------slidding cards------------------------------- */
    
const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);


 /*---------------------------------------------------------------------------------------*/     
 

function check_name(){
   
    const name=document.getElementById('name').value;
    const continer=name.split(' ');
    if(continer.length>2){
      document.getElementById('name_result').style.color='#0b0217';
      document.getElementById('name_result').innerHTML="valid name";}
      
        else{
        document.getElementById('name_result').style.color='#ff274b';
      document.getElementById('name_result').innerHTML="Invalid,name must be more than 2 words";}
}
function check_email(){
    
    const sympol=['/',')','(','&','<','>',',',':',':','?','*','&','^','%','$','#','!','+','=','|',']','[','{','}','~','`'];
    
    const email=document.getElementById('email').value;
    const continer1=email.split('@');
    const continer2=email.split('.');
    const continer3=email.split('');
    var holder=0;
    if(continer1.length==2&&continer2.length==2){
              
            for(var i=0;i<sympol.length;i++)
             if(continer3.includes(sympol[i])){
             document.getElementById('email_result').style.color='#ff274b';
             document.getElementById('email_result').innerHTML="invalid email !!";
             holder=1;
             break;
             }
             if(holder !=1){document.getElementById('email_result').style.color='#0b0217';
             document.getElementById('email_result').innerHTML="valid email ";}
            }
                
     else    
   {if(continer3.length==0){
    document.getElementById('email_result').style.color='#ff274b';
    document.getElementById('email_result').innerHTML="enter your email !";}
    else{
    document.getElementById('email_result').style.color='#ff274b';
    document.getElementById('email_result').innerHTML="invalid email !";}}
}


function check_password(){
    
    const password=document.getElementById('password').value;
    if(password.length>=8){
    document.getElementById('password_result').style.color='#0b0217';
    document.getElementById('password_result').innerHTML="valid ";}
   
    else{
    if(password.length==0){
    document.getElementById('password_result').style.color='#ff274b';
    document.getElementById('password_result').innerHTML="you have to enter password";}
    else{
    document.getElementById('password_result').style.color='#ff274b';
    document.getElementById('password_result').innerHTML="invalid,must be more than 7 digits";}
    }
}
function check_phone_number(){
    const continer=document.getElementById('phone').value;
    const sum=continer[0]+continer[1];
    if(continer.length==9){
        if(sum==77||sum==78||sum==71||sum==73){
           document.getElementById('result_phone').style.color='#0b0217';
           document.getElementById('result_phone').innerHTML="valid phone number";}
           else{
           document.getElementById('result_phone').style.color='#ff274b';
           document.getElementById('result_phone').innerHTML="invalid phone number!";}

    }
    else{
        if(continer.length==0){
        document.getElementById('result_phone').style.color='#ff274b';
        document.getElementById('result_phone').innerHTML="enter your phone number";}
        else{
        document.getElementById('result_phone').style.color='#ff274b';
        document.getElementById('result_phone').innerHTML="invalid phone number"}
    }
    
      

}
function submitinfo(){
    if(document.getElementById('result_phone').innerHTML=="valid phone number"&&
       document.getElementById('password_result').innerHTML=="valid "&&
       document.getElementById('email_result').innerHTML=="valid email "&&
       document.getElementById('name_result').innerHTML=="valid name"){
        document.getElementById('form').submit();
        
              }
       else{
       document.getElementById('submitErorr').style.color='#ff274b';
       document.getElementById('submitErorr').innerHTML="please verfie that your information are valid";}
}
