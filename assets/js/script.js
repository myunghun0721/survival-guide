//select exercises
const slider = document.querySelector('.Topics');
let isMouseDown = false;
let startX, scrollLeft;

//mouse events
slider.addEventListener('mousedown', (e) => {
  isMouseDown = true;
  startX = e.pageX - slider.offsetLeft; // init click pos
  scrollLeft = slider.scrollLeft;
});

//mouse events
slider.addEventListener('mouseleave', () => {
  isMouseDown = false;
});

//mouse events
slider.addEventListener('mouseup', () => {
  isMouseDown = false;
});

//mouse events
slider.addEventListener('mousemove', (e) => {
  if (!isMouseDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft; // get pos depending mouse move
  const walk = (x - startX) * 1;
  slider.scrollLeft = scrollLeft - walk;
});

// ---slider 2-----------------------------------------------------------------------------------
const slider2 = document.querySelector('.Topics2');

slider2.addEventListener('mousedown', (e) => {
  isMouseDown = true;
  startX = e.pageX - slider2.offsetLeft; // init click pos
  scrollLeft = slider2.scrollLeft;
});

slider2.addEventListener('mouseleave', () => {
  isMouseDown = false;
});

slider2.addEventListener('mouseup', () => {
  isMouseDown = false;
});

slider2.addEventListener('mousemove', (e) => {
  if (!isMouseDown) return;
  e.preventDefault();
  const x = e.pageX - slider2.offsetLeft; // get pos depending mouse move
  const walk = (x - startX) * 1;
  slider2.scrollLeft = scrollLeft - walk;
  
});

const item02 = document.querySelector('.item-2');
const item03 = document.querySelector('.item-3');
const item04 = document.querySelector('.item-4');
const item05 = document.querySelector('.item-5');

let margin = "160px";
function item1(){

  if(myDropdown1.style.display == 'none'){
    myDropdown1.style.display = 'block';
    item02.style.top = "120px";
    item03.style.top = "60px";
    item04.style.top = "10px";

    //if 2 content is open...
    if(myDropdown2.style.display == 'block'){
      myDropdown2.style.display = 'none';
      item03.style.top = "60px";
    }
    //if 3 content is open...
    if(myDropdown3.style.display == 'block'){
      myDropdown3.style.display = 'none';
      item04.style.top = "10px";
    }
    //if 4 content is open...
    if(myDropdown4.style.display == 'block'){
      myDropdown4.style.display = 'none';
      // item05.style.marginTop = "10px";
    }    
    //if 5 content is open...
    // if(myDropdown5.style.display == 'block'){
    //   myDropdown5.style.display = 'none';
    //   //item05.style.marginTop = "10px";
    // }

  }
  else{
    myDropdown1.style.display = 'none';
    item02.style.top = "10px";
    item03.style.top = "10px";
    item04.style.top = "10px";
  }

}

function item2(){
  if(myDropdown2.style.display == 'none'){
    myDropdown2.style.display = 'block';
    item03.style.top = margin;
    item04.style.top = "100px";


    //if 1 content is open...
    if(myDropdown1.style.display == 'block'){
      myDropdown1.style.display = 'none';
      item02.style.top = "10px";
    }

    //if 3 content is open...
    if(myDropdown3.style.display == 'block'){
      myDropdown3.style.display = 'none';
      item04.style.top = "100px";
    }
    //if 4 content is open...
    if(myDropdown4.style.display == 'block'){
      myDropdown4.style.display = 'none';
      // item05.style.marginTop = "10px";
    }    
    // //if 5 content is open...
    // if(myDropdown5.style.display == 'block'){
    //   myDropdown5.style.display = 'none';
    //   //item05.style.marginTop = "10px";
    // }
    
  }
  else{
    myDropdown2.style.display = 'none';
    item02.style.top = "10px";
    item03.style.top = "10px";
    item04.style.top = "10px";
  }
}
function item3(){
  if(myDropdown3.style.display == 'none'){
    myDropdown3.style.display = 'block';
    item03.style.top = "10px";
    item04.style.top = "200px";
    
    //if 1 content is open...
    if(myDropdown1.style.display == 'block'){
      myDropdown1.style.display = 'none';
      item02.style.top = "10px";
    }
    //if 2 content is open...
    if(myDropdown2.style.display == 'block'){
      myDropdown2.style.display = 'none';
      item03.style.top = "10px";
    }

    //if 4 content is open...
    if(myDropdown4.style.display == 'block'){
      myDropdown4.style.display = 'none';
      item04.style.top = "180px";
      // item05.style.marginTop = "10px";
    }    
    // //if 5 content is open...
    // if(myDropdown5.style.display == 'block'){
    //   myDropdown5.style.display = 'none';
    //   //item05.style.marginTop = "10px";
    // }
  }
  else{
    myDropdown3.style.display = 'none';
    item02.style.top = "10px";
    item03.style.top = "10px";
    item04.style.top = "10px";
  }
}
function item4(){
  if(myDropdown4.style.display == 'none'){
    myDropdown4.style.display = 'block';
    item03.style.top = "10px";
    item04.style.top = "10px";
    // item05.style.marginTop = "200px";
    
    //if 1 content is open...
    if(myDropdown1.style.display == 'block'){
      myDropdown1.style.display = 'none';
      item02.style.top = "10px";
    }
    //if 2 content is open...
    if(myDropdown2.style.display == 'block'){
      myDropdown2.style.display = 'none';
      item03.style.top = "10px";
    }
    //if 3 content is open...
    if(myDropdown3.style.display == 'block'){
      myDropdown3.style.display = 'none';
      item04.style.top = "10px";
    }
   
    //if 5 content is open...
    // if(myDropdown5.style.display == 'block'){
    //   myDropdown5.style.display = 'none';
    //   //item05.style.marginTop = "10px";
    // }
  }
  else{
    myDropdown4.style.display = 'none';
    // item05.style.marginTop = "10px";
    item02.style.top = "10px";
    item03.style.top = "10px";
    item04.style.top = "10px";
  }
  
}
// function item5(){
//   if(myDropdown5.style.display == 'none'){
//     myDropdown5.style.display = 'block';
    
//     //if 1 content is open...
//     if(myDropdown1.style.display == 'block'){
//       myDropdown1.style.display = 'none';
//       item02.style.marginTop = "10px";
//     }
//     //if 2 content is open...
//     if(myDropdown2.style.display == 'block'){
//       myDropdown2.style.display = 'none';
//       item03.style.marginTop = "10px";
//     }
//     //if 3 content is open...
//     if(myDropdown3.style.display == 'block'){
//       myDropdown3.style.display = 'none';
//       item04.style.marginTop = "10px";
//     }
//     //if 4 content is open...
//     if(myDropdown4.style.display == 'block'){
//       myDropdown4.style.display = 'none';
//       item05.style.marginTop = "10px";
//     }    

    
//   }
//   else{
//     myDropdown5.style.display = 'none';

//   }
// }
