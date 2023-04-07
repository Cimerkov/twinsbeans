var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 3000
  });

  var textWrapper = document.querySelector('#intro');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

  anime.timeline({loop: true})
    .add({
      targets: '#intro .letter',
      scale: [4,1],
      opacity: [0,1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: (el, i) => 70*i
    }).add({
      targets: '#intro',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 3000
    });

   

    const text1 = document.getElementById('text1');
    const text2 = document.getElementById('text2');
    const body = document.querySelector('body');
  
    document.getElementById('card1').addEventListener('click', function() {
      text1.classList.toggle('hidden');
      text2.classList.add('hidden');
    });
  
    document.getElementById('card2').addEventListener('click', function() {
      text2.classList.toggle('hidden');
      text1.classList.add('hidden');
    });
  
    body.addEventListener('click', function(event) {
      if (!event.target.closest('.relative')) {
        text1.classList.add('hidden');
        text2.classList.add('hidden');
      }
    });

    var textWrapper = document.querySelector('.ml3');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 3000
  });

