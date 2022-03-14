const infos = document.querySelectorAll('.info-blocks__info-block__title');
const crosses = document.querySelectorAll('.info-blocks__info-block__plus__cross');
const cross = crosses[0];
const paragraph = document.querySelectorAll('.info-blocks__info-block__paragraph')
let info = infos[0];
const underLine = getComputedStyle(info,':after');
console.log(underLine.width);
console.log(cross);
// console.log(cross.style.transform);
const toggle1 = function(event) {
    const paraDisplay = paragraph[0].style.display;
    console.log(paraDisplay);
    const crossRotate = cross.style.transform;
    const lineLength = underLine.width;
    paragraph[0].style.display = paraDisplay ==='none' ? 'block' : 'none';
    // if (paraDisplay === 'none'){
    //     paragraph[0].classList.add('show');
        
    // }
    // else{
    //     paragraph[0].classList.remove('show');
        
    // }
    cross.style.transform =  crossRotate ==='rotate(90deg)' ? 'rotate(45deg)' : 'rotate(90deg)'
    // underLine.width = '50px' ;
    console.log('hello')

};


    // info.addEventListener('click', toggle1);



    for(let i = 0; i < infos.length; i++) {

        infos[i].addEventListener('click', ()=>{
            const paragraph = document.querySelectorAll('.info-blocks__info-block__paragraph')
            const paraDisplay = paragraph[i].style.display;
            console.log(paraDisplay);
            const crossRotate = crosses[i].style.transform;
            const lineLength = underLine.width;
            paragraph[i].style.display = paraDisplay ==='none' ? 'block' : 'none';
            // if (paraDisplay === 'none'){
            //     paragraph[0].classList.add('show');
                
            // }
            // else{
            //     paragraph[0].classList.remove('show');
                
            // }
            crosses[i].style.transform =  crossRotate ==='rotate(90deg)' ? 'rotate(45deg)' : 'rotate(90deg)'
            // underLine.width = '50px' ;
            console.log('hello')

        });
      }


// Display Bank account number in bold 


console.log(paragraph[4]);
const bankAccount = paragraph[4].textContent.includes=='BE86';
console.log(bankAccount);