/**
 * External Dependencies
 */
import "jquery";
import "bootstrap";

$(document).ready(() => {
  const falseclick = document.querySelectorAll("a[href]");

  falseclick.forEach(item => {
    item.addEventListener("click", e => {
      e.preventDefault();
    });
  });
});

const clickbtn = document.querySelectorAll("a.btn");
const menuli = document.querySelectorAll(".nav a");
const lispan = document.querySelectorAll(".footer-ul li span");
const course = document.querySelector(".footer-selection a");

const menuid = document.querySelectorAll('a[data-id]')
const listid = document.querySelectorAll('span[data-id]')

menuid.forEach(clickmenu=>{
    
    const selectulid = clickmenu.getAttribute("data-id")
    
    clickmenu.addEventListener("click", ()=>{
            
       listSelected(selectulid)
    })

})

const listSelected = (params) =>{
  listid.forEach(lishow =>{
      lishow.classList.add("d-none")

      if(lishow.getAttribute("data-id") === params){            
          lishow.classList.remove("d-none")
       }
  })
}




clickbtn.forEach(btn => {
  const spanprimary = btn.querySelector("span.span-primary");
  const spansecundary = btn.querySelector("span.span-secundary");

  btn.addEventListener("mouseenter", () => {
    spanprimary.classList.add("d-none");
    spansecundary.classList.remove("d-none");
  });

  btn.addEventListener("mouseleave", () => {
    spansecundary.classList.add("d-none");
    spanprimary.classList.remove("d-none");
  });
});

menuli.forEach(li => {
  li.addEventListener("click", li => {
    const id = li.target.getAttribute("href").replace("#", "");
    const divTo = document.querySelector("#" + id).offsetTop;

    scrollToIdOnClick(divTo);
  });
});

function scrollToPosition(to) {
  smoothScrollTo(0, to, 3000);
}

function scrollToIdOnClick(event) {
  const to = event + 180;
  scrollToPosition(to);
}

function smoothScrollTo(endX, endY, duration) {
  const startX = window.scrollX || window.pageXOffset;
  const startY = window.scrollY || window.pageYOffset;
  const distanceX = endX - startX;
  const distanceY = endY - startY;
  const startTime = new Date().getTime();

  duration = typeof duration !== "undefined" ? duration : 400;

  // Easing function
  const easeInOutQuart = (time, from, distance, duration) => {
    if ((time /= duration / 2) < 1)
      return (distance / 2) * time * time * time * time + from;
    return (-distance / 2) * ((time -= 2) * time * time * time - 2) + from;
  };

  const timer = setInterval(() => {
    const time = new Date().getTime() - startTime;
    const newX = easeInOutQuart(time, startX, distanceX, duration);
    const newY = easeInOutQuart(time, startY, distanceY, duration);
    if (time >= duration) {
      clearInterval(timer);
    }
    window.scroll(newX, newY);
  }, 1000 / 60);
}
