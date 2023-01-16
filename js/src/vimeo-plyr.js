import Plyr from 'plyr';

(()=> {

  const showreel = document.querySelectorAll('.showreel-video');

  if (showreel === null) {
    return;
  }

  showreel.forEach((item, i) => {
    const player = new Plyr(`.showreel-video-${i + 1}`);
  })


})();

